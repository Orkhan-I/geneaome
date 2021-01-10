<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">


<!-- Mirrored from demo.themeix.com/html/nextblog/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Dec 2020 17:01:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="themeix description" />
    <meta name="themeix" content="hosting business" />
    <title>@yield('title')</title>
    <!--Call Favicon Icon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- All Css File Add -->
    <link rel="stylesheet" href="{{asset('front/')}}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('front/')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/css/animate.min.css" />
    <link rel="stylesheet" href="{{asset('front/')}}/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{asset('front/')}}/style.css" />
    <link rel="stylesheet" href="{{asset('front/')}}/css/responsive.css" />
    <link rel="stylesheet" href="{{asset('front/')}}/css/flag-icon.css" />
    <link rel="stylesheet" href="{{asset('front/')}}/css/flag-icon.min.css" />
    <!-- Lato Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>
    <!-- preloader -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div id="object"></div>
            </div>
        </div>
    </div>
    <!-- Fixed asidebar -->
    <aside class="pushy pushy-right" data-focus="#first-link">
        <div class="owl-carousel themeix-aside-slider">
        @foreach($authors as $author)
            <div class="item">
                <div class="pushy-content">
                    <img src="/{{$author->author_image}}" alt="sidebar author" />
                    <h4><a href="#">{{$author->author_name}}</a></h4>
                    <p>{{$author->setLocale(session('locale'))->text}}</p>
                    <ul class="pushy-author-meta list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </aside>
    <div class="site-overlay"></div>
    <main class="main-section">
        <!-- Start Header -->
        <header class="header-section">
            <div class="header-top clearfix">
           

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-inline header-author-share float-left">
                                <li class="list-inline-item"><a target="_blank" href="{{settings()->get('facebook')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a target="_blank" href="{{settings()->get('twitter')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a target="_blank" href="{{settings()->get('instagram')}}"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a target="_blank" href="{{settings()->get('facebook')}}"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a target="_blank" href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a target="_blank" href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                            <div class="sidebar-author float-right" >
                            @foreach($locales as $locale)
                                <a href="{{route('lang',[$locale->code])}}"><span  class="flag-icon flag-icon-{{$locale->code}}"></span></a>
                            @endforeach
                            @if(Auth::check())<a style="color:#969694; font-size:15px; line-height:1.5 font-weight:500; margin-right:13px; margin-left:13px; border:0px 1px 0 1px solid white" href="{{route('logout')}}">@lang('pagination.logout') </a>
                            @endif
                            @if(!Auth::check())
                                <a style="color:#969694; font-size:15px; font-weight:500; margin-right:10px; margin-left:10px; " href="{{route('login')}}">@lang('pagination.login')</a>
                                <a style="color:#969694; font-size:15px; font-weight:500; margin-right:10px; margin-left:10px;" href="{{route('register')}}">@lang('pagination.register')</a>
                            @endif
                                <a href="#"  class="menu-btn"><i class="fa fa-navicon"></i></a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="themeix-brand float-left">
                                <a href="{{route('front.home',app()->getLocale())}}"><img style=" " src="{{Storage::url(settings()->get('logo'))}}" alt="{{settings()->get('app_name')}}" /></a>
                            </div>
                            <div class="themeix-main-menu float-right">
                                <div class="button_container" id="toggle">
                                    <span class="top"></span>
                                    <span class="middle"></span>
                                    <span class="bottom"></span>
                                </div>
                                <div class="overlay-close">
                                    <nav class="overlay-menu">
                                        <ul class="nav">
                                        <li class="nav-item"><a class="nav-link" href="{{route('front.home',app()->getLocale())}}">@lang('pagination.home')</a></li>
                                            @foreach($pages as $page)
                                                        <li class="nav-item"><a class="nav-link" href="/{{session('locale').'/'.$page->slug}}">{{$page->setLocale(session()->get('locale'))->title}}</a></li>
                                            @endforeach
                                            <!-- <li class="nav-item"><a class="nav-link" href="{{route('front.contact',[app()->getLocale()])}}">Contact</a></li> -->
                                            <li class="nav-item"><a class="nav-link " href="#" data-toggle="modal" data-target="#mymodal"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade themeix-modal" id="mymodal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Your search here</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('front.search',session('locale'))}}">
                                                    <div class="form-group">
                                                        <input type="text" name="term" class="form-control" placeholder="Search for..." aria-label="Search for...">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary modal-btn">search</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>