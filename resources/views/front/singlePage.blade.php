@extends('front.layouts.master')

@section('title','Single')                            
@section('content')
<div class="title-section ptd100" style="background-image:url(/{{$singlePage->image}})">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrapper text-center">
                            <h1>Blog Post</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb themeix-breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('front.home',app()->getLocale())}}">home</a></li>
                                    <li class="breadcrumb-item active"><a href="">{{$singlePage->slug}}</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Title -->
        <!-- Start Main -->
        <div class="main-section ptd100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="main-content themeix-blog-post">
                            <div class="blog-post-img"><img width="100%" src="/{{$singlePage->image}}" alt="blog post img" /></div>
                            <ul  class="blog-post-meta list-inline">
                                <li class="list-inline-item"><a href="#">{{$singlePage->author}}</a></li>
                                <li class="list-inline-item"><a href="#">{{$singlePage->getCommentCount()}} comment</a></li>
                                <li id="like" class="list-inline-item"> <button style="background-color:transparent; border:none" class="like" value="{{$singlePage->id}}">
                                @if(Session::has('like'))<i class="fa fa-heart" aria-hidden="true"></i>@endif 
                                @if(Session::has('dislike'))<i class="fa fa-heart-o" aria-hidden="true"></i>@endif{{$singlePage->getLikesCount()}} like</button></li>
                                <li class="list-inline-item"><a href="#">{{$singlePage->hit}} view</a></li>
                            </ul>
                            <h2>{{$singlePage->setLocale(session()->get('locale'))->title}}</h2>
                             <p>{{$singlePage->setLocale(session()->get('locale'))->description}}</p>
                            <div class="blog-post-panel">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="blog-post-social text-left">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="blog-post-pagination text-right">
                                            <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> previous</a>
                                            <a href="#">next <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-post-comment">
                                <h3 class="blog-post-title">{{$singlePage->getCommentCount()}} comments</h3>
                                @foreach($comments as $comment)
                                <div class="blog-post-comment-box">
                                    <div class="blog-post-comment-thum">
                                        <img src="/{{$comment->author_photo}}" alt="author image" />
                                    </div>
                                    <div class="blog-post-comment-post">
                                        <h4><a href="#">{{$comment->name}}</a></h4>
                                        <span>{{date('d M', strtotime($comment->created_at))}}</span>
                                        <p>{{$comment->comment}}</p>
                                        <a class="comment-reply" href="#"><i class="fa fa-reply" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            <div class="blog-post-contact-form text-left">
                                <h3 class="blog-post-title">write your comment</h3>
                                <form action="{{route('front.comment',[app()->getLocale(),$singlePage->getCategory->name,$singlePage->slug])}}" method="post">
                                   @csrf
                                    <div class="form-group comment">
                                        <textarea name='comment' placeholder="write your comment" id="textarea" rows="8"></textarea>
                                    </div>
                                    <button type="submit"  class="btn btn-primary">Post comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar">
                            @include('front.layouts.sidebar')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main -->

@endsection
@section('likeJs')
<script type="text/javascript">
   
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   $(".like").click(function(e){
        e.preventDefault();
        var msg=$(this).val();
        $.ajax({
           type:'GET',
           url:"{{ route('front.like',session('locale'))}}",
		   data:{msg},
           success:function(data){
			  // alert(data.success);
              $( "#like" ).load(window.location.href + " #like" );
			
           }
        });
   });
</script>
@endsection