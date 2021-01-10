@extends('front.layouts.master')
@section('title',settings()->get('app_name'))
@section('content')
@include('front.layouts.slider')
<div class="main-section ptd100">
    <div class="container">
        <div class="owl-carousel themeix-media-slider">
            @foreach($sliderArticles as $sliderArticle)
                        <div class="item">
                            <div class="media-post" style="background:url(/{{$sliderArticle->image}})no-repeat">
                                <div class="media-post-overlay">
                                    <h5><a href="{{route('front.single',[app()->getLocale(),$sliderArticle->getCategory->slug,$sliderArticle->slug])}}">{{$sliderArticle->setLocale(session()->get('locale'))->title}}</a></h5>
                                    <ul class="media-post-meta list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>{{$sliderArticle->author}}</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> {{$sliderArticle->getCommentCount()}}</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>{{$sliderArticle->getLikesCount()}}</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="main-content">
                    <div class="content-post-panel m-0">
                        <div class="row">
                            @foreach($articles as $article)
                            @if(isset($project))
                             @foreach($project as $p)
                             <div class="col-md-12 col-lg-6">
                                            <div class="article-post">
                                                <div class="article-post-thumbnail">
                                                    <a href="{{route('front.single',[app()->getLocale(),$p->getCategory->slug,$p->slug])}}"><img src="/{{$p->image}}" alt="article post image" /></a>
                                                </div>
                                                <div class="article-post-intro">
                                                    <h5><a href="{{route('front.single',[app()->getLocale(),$p->getCategory->slug,$p->slug])}}"> {{$p->setLocale(session()->get('locale'))->title}}</a></h5>
                                                    <p>{{\Illuminate\Support\str::limit($p->setLocale(session()->get('locale'))->description,80,'...')}}</p>
                                                    <ul class="article-post-meta list-inline">
                                                        <li class="list-inline-item"><a href="#">author: {{$p->author}}</a></li>
                                                        <li class="list-inline-item"><a href="#"> {{$p->created_at->diffForHumans()}}</a></li>
                                                        <li class="list-inline-item"><a href="#">{{$p->getCommentCount()}} comments </a></li>   
                                                    </ul>
                                                    <p style="padding:0; margin-top:30px; margin-right:100px; font-weight:1000">Kategoriya: {{$p->getCategory->name}}</p>
                                                </div>
                                            </div>
                                        </div>

                             @endforeach
                             @endif
                                        <div class="col-md-12 col-lg-6">
                                            <div class="article-post">
                                                <div class="article-post-thumbnail">
                                                    <a href="{{route('front.single',[app()->getLocale(),$article->getCategory->slug,$article->slug])}}"><img src="/{{$article->image}}" alt="article post image" /></a>
                                                </div>
                                                <div class="article-post-intro">
                                                    <h5><a href="{{route('front.single',[app()->getLocale(),$article->getCategory->slug,$article->slug])}}"> {{$article->setLocale(session()->get('locale'))->title}}</a></h5>
                                                    <p>{{\Illuminate\Support\str::limit($article->setLocale(session()->get('locale'))->description,80,'...')}}</p>
                                                    <ul class="article-post-meta list-inline">
                                                        <li class="list-inline-item"><a href="#">author: {{$article->author}}</a></li>
                                                        <li class="list-inline-item"><a href="#"> {{$article->created_at->diffForHumans()}}</a></li>
                                                        <li class="list-inline-item"><a href="#">{{$article->getCommentCount()}} comments </a></li>   
                                                    </ul>
                                                    <p style="padding:0; margin-top:30px; margin-right:100px; font-weight:1000">Kategoriya: {{$article->getCategory->name}}</p>
                                                </div>
                                            </div>
                                        </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="themeix-pagination">
                                    <ul class="pagination justify-content-left">
                                        <li class="page-item">
                                          {{$articles->links()}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
        