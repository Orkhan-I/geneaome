@extends('front.layouts.master')
@section('title',$search->title)
@section('content')
<!-- Start Title	-->
<div class="title-section ptd100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrapper text-center">
                    <h1>SEARCH RESULT</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb themeix-breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active"><a href="">{{$search->title}}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- End Title -->
<div class="main-section ptd100">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <form action="{{route('front.search',session('locale'))}}" class="search-menu">
                <div class="input-group">
                    <input type="text" name="term" class="form-control" placeholder="Search" aria-label="Search for">
                    <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span>
                </div>
            </form>
                <div class="main-content">
                    <div class="content-post-panel m-0">
                        <div class="row">
                            @if($project==[])
                                <div class="alert alert-danger"><p>Daxil etdiyiniz soze uygun meqale tapilmadi</p></div>
                             @else
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
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="themeix-pagination">
                                    <ul class="pagination justify-content-left">
                                        <li class="page-item">
                                        <!-- {{  $project->links() }} -->
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
        