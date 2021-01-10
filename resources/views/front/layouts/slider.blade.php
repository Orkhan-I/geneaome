  <!-- Start Slider -->
 
  <div class="slider-section" @foreach($slides as $slide) style="background-image: url(/{{$slide->image}})" @endforeach>
        
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel themeix-slider">
                        @foreach($sliders as $slider)
                            <div class="item">
                                <div class="next-slider-content">
                                    <div class="next-slider-content-wrapper">
                                        <h1><a href="{{route('front.single',[app()->getLocale(),$slider->getCategory->slug,$slider->slug])}}">{{$slider->title}}</a></h1>
                                        <ul class="next-slider-meta list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>{{$slider->author}}</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> {{$slider->getCommentCount()}}</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>{{$slider->getLikesCount()}}</a></li>
                                        </ul>
                                        <a class="next-slider-share" href="#"><i class="fa fa-external-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider -->