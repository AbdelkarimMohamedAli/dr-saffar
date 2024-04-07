

<!-- Start Footer Area -->
<footer class="footer-area pt-100">
    <div class="container"  <?php   if(session('locale') == 'ar'){?> dir="rtl" <?php } ?>>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <div class="widget-logo">
                        <img src="{{ asset('assets/imgs/'.$settings[0]['logo'] ) }}" class="black-logo" alt="image">
                        <img src="{{ asset('assets/imgs/'.$settings[0]['logo'] ) }}" class="white-logo" alt="image">
                    </div>
                    
                    <p style="text-align:justify">{{ $settings[0]['subtitle_en'] }}</p>

                  
                    <div class="widget-info">
                        <img src="{{ asset('assets/imgs/'.$settings[0]['dr_image'] ) }}" alt="image">
                        <h4>{{ $settings[0]['dr_name'] }}</h4>
                        <span>{{ $settings[0]['email'] }}</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget ps-5">
                    <h3> Useful Link</h3>

                    <ul class="quick-links">
                        <li>
                            <a href="about"> About Us   </a>
                        </li>
                        <li>
                            <a href="medical">Latest-News</a>
                        </li>
                        <li>
                            <a href="contact"> Contact Us </a>
                        </li>
                        <li>
                            <a href="services">Our-Services</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Latest-News</h3>
                    
                    <div class="footer-widget-blog">
                    <?php  foreach($blogs as $blog){ ?> 
                        <article class="item">
                            <a href="{{ route('medical_news.show', ['id' => $blog->id]) }}" class="thumb">
                                
                                <img src="{{ asset('assets/imgs/'.$blog->dr_image) }}" class="fullimage">
                            </a>
                            <div class="info">
                            
                                <h4><a href="{{ route('medical_news.show', ['id' => $blog->id]) }}">{{ $blog->blog_title_en }}</a></h4>
                                <span><a href="{{ route('medical_news.show', ['id' => $blog->id]) }}">{{ $settings[0]['title']}}</a></span>
                            </div>
                        </article>
                    <?php }?>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget ps-3">
                    <h3> Contact Information</h3>

                    <ul class="footer-information">
                        <li>
                            <i class="ri-phone-fill"></i>
                            <h4><a href="tel:{{ $settings[0]['phone1']}}">{{ $settings[0]['phone1']}}</a></h4>
                            <span>   Call Today </span>
                        </li>

                        <li>
                            <i class="ri-time-line"></i>
                            <h4>{{ $settings[0]['open_hours']}}</h4>
                            <span>Open Hour</span>
                        </li>

                        <li>
                            <i class="ri-map-pin-line"></i>
                            <h4>{{ $settings[0]['location']}}</h4>
                            <span> Our Location  </span>
                        </li>
                    </ul>

                </div>
                   
                @include('front.social_icon')




            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
               
                    Copyright @ <script>document.write(new Date().getFullYear())</script> All Rights Reserved.
                                جميع الحقوق محفوظة -  <script>document.write(new Date().getFullYear()) </script>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-s-line"></i>
</div>
<!-- End Go Top Area -->

<!-- Links of JS files -->
    <!-- @if(session('locale') == 'en')  -->

<script src="{{ URL::asset('front/js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('front/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('front/js/jquery.meanmenu.js')}}"></script>
<script src="{{ URL::asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{ URL::asset('front/js/jquery.appear.js')}}"></script>
<script src="{{ URL::asset('front/js/odometer.min.js')}}"></script>
<script src="{{ URL::asset('front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ URL::asset('front/js/fancybox.min.js')}}"></script>
<script src="{{ URL::asset('front/js/jquery-ui.js')}}"></script>
<script src="{{ URL::asset('front/js/selectize.min.js')}}"></script>
<script src="{{ URL::asset('front/js/TweenMax.min.js')}}"></script>
<script src="{{ URL::asset('front/js/aos.js')}}"></script>
<script src="{{ URL::asset('front/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{ URL::asset('front/js/form-validator.min.js')}}"></script>
<script src="{{ URL::asset('front/js/contact-form-script.js')}}"></script>
<script src="{{ URL::asset('front/js/wow.min.js')}}"></script>
<script src="{{ URL::asset('front/js/main.js')}}"></script>
<!-- @else
    <script src="{{ URL::asset('assets_rtl/js/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/jquery.meanmenu.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/jquery.appear.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/odometer.min.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/fancybox.min.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/jquery-ui.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/selectize.min.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/TweenMax.min.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/aos.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/form-validator.min.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/contact-form-script.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/wow.min.js')}}"></script>
    <script src="{{ URL::asset('assets_rtl/js/main.js')}}"></script>
    @endif -->
</body>
</html>