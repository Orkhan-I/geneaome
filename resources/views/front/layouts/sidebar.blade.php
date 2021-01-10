<div class="col-lg-12" style="margin-top:80px;">
    <div class="widget-sidebar categories" style=" border:1px solid #eee; padding:54px 30px 30px 30px;    margin-top: 26px; margin-bottom: 30px; border: 1px solid #eee;padding: 54px 30px 30px 30px;position: relative;">
          <div class="widget-header" style="position:absolute; top:-26px; left:50%; transform: translate(-50%); color: #fff; background: #1e1e1e; " >
             <h4 style='margin-top: 0px; background-color: #1e1e1e; color: #ffffff; font-family: "Cormorant", Arial, Helvetica, serif; font-size: 14px;text-transform: uppercase;font-weight: 700; letter-spacing: 1px; display: inline-block;padding: 16px 24px; text-align: center; line-height: 1.6; margin: 0 0 0px; min-width: 140px;'>@lang('pagination.categories')</h4>
        </div>
     <div class="widget-content">
            <ul class="categories" style="list-style:none">
                @foreach($categories as $category)
                        @if($category->status == 'active')
                                <li style="display: block; width: 100%;  margin-bottom: 12px;  padding-bottom: 12px;     border-bottom: 1px dashed #eee;"><a href="{{route('front.category',[app()->getLocale(),$category->slug])}}">{{$category->setLocale(session()->get('locale'))->name}} <span style="float:right">({{$category->getArticleCount()}})</span></a></li>
                            @endif
                @endforeach
             </ul>
        </div>
    </div>
</div>




<!-- 
<div class="widget-about sidebar-widget">
        <h5>@lang('pagination.me') </h5>
        <p>Lorem ipsum dolor sit amet, nec ante integer eget, dolor lectus consequat vehicula lorem mattis, ultricies mauris elit nostra per, luctus sem a. Ut ligula ut arcu aenean purus, mi eget volut</p>
        <ul class="list-inline about-share">
            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
        </ul>
    </div> -->
    <div class="widget-latest-post sidebar-widget">
        <h5>@lang('pagination.recent') </h5>
        <?php $i=1; ?>
        @foreach($recentPosts as $r)
                @if($category->status == 'active')
                        <div class="latest-post-wrapper clearfix">
                            <div class="latest-post-date">
                                <span class="date-Ellipse">{{$i++}}</span>
                            </div>
                            <div class="latest-post-info">
                                <a href="{{route('front.single',[app()->getLocale(),$r->getCategory->slug,$r->slug])}}">{{$r->setLocale(session('locale'))->title}}</a>
                                <ul class="lastest-post-meta list-inline">
                                    <li class="list-inline-item">{{$r->getCommentCount()}} comments</li>
                                    <li class="list-inline-item">{{$r->hit}} views</li>
                                </ul>
                            </div>
                        </div>
                    @endif
        @endforeach
    </div>
    <div class="widget-social-profile sidebar-widget">
        <h5> @lang('pagination.social') </h5>
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