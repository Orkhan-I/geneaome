 <!-- Start Footer -->
 <footer class="footer-section">
            <div class="footer-widget-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-widget float-left">
                                <div class="footer-widget-box">
                                    <h5 class="footer-title">@lang('pagination.us')</h5>
                                    <p>@lang('pagination.about')</p>
                                    <ul class="list-inline footer-share">
                                        <li class="list-inline-item"><a target="_blank" href="{{settings()->get('facebook')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="list-inline-item"><a target="_blank" href="{{settings()->get('twitter')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="list-inline-item"><a target="_blank" href="{{settings()->get('instagram')}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-widget float-right">
                                <div class="footer-widget-box">
                                    <h5 class="footer-title">@lang('pagination.newsletter')</h5>
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="E-mail" aria-label="Search for">
                                            <span class="input-group-btn">
									<button class="btn btn-secondary" type="submit">Signup</button>
								  </span>
                                        </div>
                                    </form>
                                    <p>Dolor eros cubilia velit fusce</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center">
                <p>Copyright - <?php echo date('d-M-Y') ?>   Created by <a target="_blank" href="https://www.youtube.com">Orkhan_I_</a> </p>
            </div>
            <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        </footer>
    </main>
    <!-- End Footer -->
    <!-- Call Javascript File -->
    <script src="{{asset('front/')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('front/')}}/js/popper.min.js"></script>
    <script src="{{asset('front/')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('front/')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('front/')}}/js/pushy.min.js"></script>
    <script src="{{asset('front/')}}/js/custom.js"></script>
    @yield('js')
    @yield('likeJs')
</body>


<!-- Mirrored from demo.themeix.com/html/nextblog/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Dec 2020 17:01:54 GMT -->
</html>