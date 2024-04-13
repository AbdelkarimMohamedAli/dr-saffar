
 <!doctype html>
<html lang="ar">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="keywords" content="<?php if(!empty($settings)){ $settings[0]['seo_keywords'];  }?>">
        
            <meta name="description" content="<?php if(!empty($settings)){ $settings[0]['seo_desc'];  }?>">
        
        <meta name="author" content="Eng. Mohamed Khaled Hekal">
        @if(session('locale') == 'en')

        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/remixicon.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/odometer.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/selectize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/dark.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
        @else
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/remixicon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/odometer.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/selectize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_rtl/css/dark.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_rtl/css/responsive.css') }}">
        @endif
        <?php if(!empty($settings)){ ?>
         <title>@if(session('locale') == 'en') {{ $settings[0]['title_en'] }} @else {{ $settings[0]['title'] }} @endif</title>
        <?php } ?>
<style>
    .pb-75MM {
    padding-bottom: -6px;
}
</style> 
<?php if(!empty($settings)){ ?>

        <link rel="icon"  href="{{ asset('assets/imgs/'.$settings[0]['favicon']) }}">
<?php } ?>
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="lds-spinner"> <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Navbar Area --> 
        <div class="navbar-area fixed-top" style=" <?php if(session('locale') == 'ar'){ ?> direction:rtl;<?php } ?> background: var(--white-color);
        -webkit-box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
                box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
        -webkit-animation: 500ms ease-in-out 0s normal none 1 running fadeInDown;
                animation: 500ms ease-in-out 0s normal none 1 running fadeInDown;
        -webkit-transition: var(--transition);
        transition: var(--transition);">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index">
                            <?php if(!empty($settings)){ ?>
 
                                <img style="width:80px" src="{{ asset('assets/imgs/'.$settings[0]['logo']) }}" class="white-logo" alt="image">
                                <img style="width:80px" src="{{ asset('assets/imgs/'.$settings[0]['logo']) }}" class="white-logo" alt="image">
                            <?php } ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar" style="background-color: #ffffff;
background-image: linear-gradient(0deg, #ffffff 0%, #97D9E1 100%);
">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index">
                        <?php if(!empty($settings)){ ?>
                        <img style="width:80px" src="{{ asset('assets/imgs/'.$settings[0]['logo']) }}" class="black-logo" alt="image">
                         <img style="width:80px" src="{{ asset('assets/imgs/'.$settings[0]['logo']) }}" class="white-logo" alt="image">
                        <?php } ?>
                        </a>
                        @include('front.menu') 


                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <div class="call-info">
                                       
                                    @include('front.social_icon')



                                    </div>
                                </div>

                              
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
               <!-- Empty Area -->
               <div class="easy-solutions-area pt-100 pb-75MM">
                <div class="container">
                
    
                    <div class="row justify-content-center">
                 
    
    
                    </div>
                </div>
            </div>
            <!-- Empty Area -->
@include('front.slider')
@include('front.book-appointment_section')
@include('front.why-choose_section')
@include('front.services_section')
@include('front.doctor-Area_section')
@include('front.blog')




<!-- Start Footer Area -->
<footer class="footer-area pt-100"> 
    <div class="container" <?php   if(session('locale') == 'ar'){?> dir="rtl" <?php } ?>>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <div class="widget-logo">
                        <img src="{{ asset('assets/imgs/'.$settings[0]['logo'] ) }}" class="black-logo" alt="image">
                        <img src="{{ asset('assets/imgs/'.$settings[0]['logo'] ) }}" class="white-logo" alt="image">
                    </div>
                    
                    <p style="text-align:justify">@if(session('locale') == 'en')<?php if(!empty($settings)){ ?> {{ $settings[0]['subtitle_en'] }}<?php } ?> @else {{ $settings[0]['subtitle'] }} @endif</p>

                  
                    <div class="widget-info">
                        <img src="{{ asset('assets/imgs/'. $settings[0]['dr_image'] ) }}" alt="image">
                        <h4>@if(session('locale') == 'en')<?php if(!empty($settings)){ ?> {{ $settings[0]['dr_name_en'] }}<?php } ?> @else {{ $settings[0]['dr_name'] }} @endif</h4>
                        <span><?php if(!empty($settings)){ ?> {{ $settings[0]['email'] }}<?php } ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget ps-5">
                    <h3><?php   if(session('locale') == 'en'){?> Useful Link  <?php }else{ ?>  روابط مختصرة   <?php } ?></h3>

                    <ul class="quick-links">
                        <li>
                            <a href="{{ route('about') }}"><?php   if(session('locale') == 'en'){?> About Us  <?php }else{ ?>   من نحن  <?php } ?> </a>
                        </li>
                        <li>
                            <a href="{{ route('Blogs') }}"><?php   if(session('locale') == 'en'){?> Latest-News  <?php }else{ ?>  اخر الأخبار  <?php } ?></a>
                        </li>
                        <li>
                            <a href="contact"><?php   if(session('locale') == 'en'){?> Contact Us  <?php }else{ ?>   اتصل بنا  <?php } ?></a>
                        </li>
                        <li>
                            <a href="{{ route('Services') }}"><?php   if(session('locale') == 'en'){?> Our-Services  <?php }else{ ?>   خدماتنا  <?php } ?></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>@if(session('locale') == 'en') Latest-News @else اخر الأخبار @endif</h3>
                    
                    <div class="footer-widget-blog">
                    <?php  foreach($blogs as $blog){ ?> 
                        <article class="item">
                            <a href="{{ route('medical_news.show', ['id' => $blog->id]) }}" class="thumb">
                                <img src="{{ asset('assets/imgs/'.$blog->blog_img) }}" class="fullimage">
                            </a>
                            <div class="info">
                            
                                <h4><a href="{{ route('medical_news.show', ['id' => $blog->id]) }}">@if(session('locale') == 'en') {{ $blog->blog_title_en }} @else {{ $blog->blog_title }} @endif </a></h4>
                                <span><a href="{{ route('medical_news.show', ['id' => $blog->id]) }}">@if(session('locale') == 'en') {{ $settings[0]['title_en']}} @else {{ $settings[0]['title']}} @endif</a></span>
                                 
                            </div>
                        </article>
                    <?php }?>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget ps-3">
                    <h3><?php   if(session('locale') == 'en'){?> Contact Information  <?php }else{ ?>   بيانات الإتصال  <?php } ?></h3>

                    <ul class="footer-information">
                        <li>
                            <i class="ri-phone-fill"></i>
                            <h4><a href="tel:<?php if(!empty($settings)){ ?>{{ $settings[0]['phone1']}}<?php } ?> "><?php if(!empty($settings)){ ?> {{ $settings[0]['phone1']}} <?php } ?></a></h4>
                            <span><?php   if(session('locale') == 'en'){?>  Call Today <?php }else{ ?>  اتصل الان   <?php } ?> </span>
                        </li>

                        <li>
                            <i class="ri-time-line"></i>
                            <h4>@if(session('locale') == 'en') <?php if(!empty($settings)){ ?>{{ $settings[0]['open_hours_en']}}<?php } ?>  @else {{ $settings[0]['open_hours']}} @endif</h4>
                            <span><?php   if(session('locale') == 'en'){?>Open Hour<?php }else{ ?> ساعات العمل <?php } ?></span>
                        </li>

                        <li>
                            <i class="ri-map-pin-line"></i>
                            <h4>@if(session('locale') == 'en') <?php if(!empty($settings)){ ?> {{ $settings[0]['location_en']}}<?php } ?>  @else {{ $settings[0]['location']}} @endif</h4>
                            <span><?php   if(session('locale') == 'en'){?> Our Location  <?php }else{ ?> العنوان <?php } ?></span>
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
            <?php   if(session('locale') == 'en'){?>
                Copyright @ <script>document.write(new Date().getFullYear())</script> All Rights Reserved.
            <?php }else{ ?>
                            جميع الحقوق محفوظة -  <script>document.write(new Date().getFullYear()) </script>
            <?php } ?>
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
@if(session('locale') == 'en')
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
@else
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
@endif
</body>
</html>
