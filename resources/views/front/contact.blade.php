@extends('front.layouts.master')
@section('title',$contact->title)
@section('content')
 <!-- Start Title -->
 <div class="title-section ptd100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrapper text-center">
                            <h1>{{$contact->slug}}</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb themeix-breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">home</a></li>
                                    <li class="breadcrumb-item active"><a href="contact.html">contact</a></li>
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
                        <div class="main-content">
                            <div class="themeix-map">
                                <div id="myMap"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d48581.48969341733!2d49.784422400000004!3d40.4455424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1saz!2s!4v1609326472126!5m2!1saz!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                            </div>
                            <div class="contact-form text-left">
                                <h3 class="contact-title">contact with us</h3>
                                <form action="{{route('front.contactPost',app()->getLocale())}}" method="POST">
                                    @csrf
                                    <div class="form-group comment">
                                        <textarea name="message" placeholder="Write your message" id="textarea" rows="8"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Post Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar">
                        <div class="widget-social-profile sidebar-widget">
                                <h5> Contact info </h5>
                                <div class="social-profile-wrapper clearfix">
                                    <div class="social-profile-icon">
                                        <a class="icon-Ellipse" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="social-post-info">
                                        <a href="single.html">{{settings()->get('address')}}</a>
                                        <span>capital of Azerbaijan</span>
                                    </div>
                                </div>
                                <div class="social-profile-wrapper clearfix">
                                    <div class="social-profile-icon">
                                        <a class="icon-Ellipse" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="social-post-info">
                                        <a href=""><span class="__cf_email__" data-cfemail="8de3e8f5f9efe1e2eab9b8bbcdeae0ece4e1a3eee2e0">[{{settings()->get('email')}}&#160;protected]</span></a>
                                        <span>contact by email</span>
                                    </div>
                                </div>
                                <div class="social-profile-wrapper clearfix">
                                    <div class="social-profile-icon">
                                        <a class="icon-Ellipse" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="social-post-info">
                                        <a href="single.html">{{settings()->get('phone')}}</a>
                                        <span>24/7 support</span>
                                    </div>
                                </div>
                                <div class="social-profile-wrapper clearfix">
                                    <div class="social-profile-icon">
                                        <a class="icon-Ellipse" href="#"><i class="fa fa-chrome" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="social-post-info">
                                        <a href="single.html">{{settings()->get('app_name')}}</a>
                                        <span>visit our website</span>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-social-profile sidebar-widget">
                                <h5> social profile </h5>
                                <div class="social-profile-wrapper clearfix">
                                    <div class="social-profile-icon">
                                        <a class="icon-Ellipse" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="social-post-info">
                                        <a href="single.html">facebook</a>
                                        <span>223k fans</span>
                                    </div>
                                </div>
                                <div class="social-profile-wrapper clearfix">
                                    <div class="social-profile-icon">
                                        <a class="icon-Ellipse" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="social-post-info">
                                        <a href="single.html">twitter</a>
                                        <span>921k follower</span>
                                    </div>
                                </div>
                                <div class="social-profile-wrapper clearfix">
                                    <div class="social-profile-icon">
                                        <a class="icon-Ellipse" href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="social-post-info">
                                        <a href="single.html">youtube</a>
                                        <span>251k subscribe</span>
                                    </div>
                                </div>
                            </div>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection