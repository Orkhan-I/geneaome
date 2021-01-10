@extends('front.layouts.master')
@section('title',$about->title)
@section('content')
<div class="title-section ptd100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrapper text-center">
                            <h1>ABOUT ME</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb themeix-breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('front.home',app()->getLocale())}}">home</a></li>
                                    <li class="breadcrumb-item active"><a href="about">{{$about->slug}}</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Start Main -->
<div class="main-section ptd100">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 m-auto">
                        <div class="author-biodata-wrapper">
                            <div class="author-biodata-bubble"><img src="{{asset('front/')}}/images/buble-bg.png" alt="author biodata img" /></div>
                            <div class="owl-carousel themeix-author-slider">
                            @foreach($authors as $author)
                                <div class="item">
                                    <div class="author-biodata text-center">
                                        <div class="author-intro">
                                            <div class="author-img">
                                                <img src="/{{$author->author_image}}" alt="author image" />
                                            </div>
                                            <h5><a href="#">{{$author->author_name}}</a></h5>
                                            <span>{{$author->author_duty}}</span>
                                        </div>
                                        <div class="author-info-border"></div>
                                        <h5>{{$author->setLocale(session('locale'))->title}}</h5>
                                        <p>{{$author->setLocale(session('locale'))->text}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="author-social-lnk text-center">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{settings()->get('facebook')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="{{settings()->get('twitter')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="{{settings()->get('github')}}"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="{{settings()->get('facebook')}}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main -->
@endsection