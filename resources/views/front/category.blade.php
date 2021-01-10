@extends('front.layouts.master')
@section('title','Category')

@section('content')
 <!-- Start Title -->
 <div class="title-section ptd100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrapper text-center">
                            <h1>CATEGORY - {{$categories->name}}</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb themeix-breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('front.home',app()->getLocale())}}">home</a></li>
                                    <li class="breadcrumb-item active"><a href="">{{$categories->name}}</a></li>
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
                @foreach($categoryArticles as $categoryArticle)
                            <div class="col-md-4">
                                <div class="article-post">
                                    <div class="article-post-thumbnail">
                                        <a href="{{route('front.single',[app()->getLocale(),$categories->slug,$categoryArticle->slug])}}"><img src="/{{$categoryArticle->image}}" alt="article post image" /></a>
                                    </div>
                                    <div class="article-post-intro">
                                        <h5><a href="{{route('front.single',[app()->getLocale(),$categories->slug,$categoryArticle->slug])}}">{{$categoryArticle->setLocale(session()->get('locale'))->title}}</a></h5>
                                        <p>{{$categoryArticle->setLocale(session()->get('locale'))->description}} </p>
                                        <ul class="article-post-meta list-inline">
                                            <li class="list-inline-item"><a href="#">{{$categoryArticle->author}}</a></li>
                                            <li class="list-inline-item"><a href="#">{{$categoryArticle->hit}} view</a></li>
                                            <li class="list-inline-item"><a href="#">{{$categoryArticle->created_at->diffForHumans()}}</a></li>
                                            <li class="list-inline-item"><a href="#">2 comment</a></li>
                                        </ul>
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
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                
                               {{ $categoryArticles->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main -->
@endsection