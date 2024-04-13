
<!doctype html>
<html lang="ar">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="keywords" content="{{ $settings[0]['seo_keywords'] }}"> 
        <meta name="description" content="{{ $settings[0]['seo_desc'] }}">

        
        <meta name="author" content="Eng. Mohamed Khaled Hekal">
        <link rel="stylesheet" href="sss">

        <!-- Links of CSS files -->
        <!-- @if(session('locale') == 'en') -->

        

        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{asset('front/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/selectize.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/navbar.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/dark.css')}}">
		<link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
        
  
         <title>{{ $settings[0]['title'] }}</title>
         
<style>
    .pb-75MM {
    padding-bottom: -6px;
}
</style>
        
        <link rel="icon"  href="assets/imgs/{{ $settings[0]['favicon'] }}">

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
        <div class="navbar-area fixed-top" style="<?php   if(session('locale') == 'ar'){?>direction:rtl; <?php } ?> background: var(--white-color);
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
                                <img style="width:80px" src="assets/imgs/{{ $settings[0]['logo'] }}" class="white-logo" alt="image">
                                <img style="width:80px" src="assets/imgs/{{ $settings[0]['logo'] }}" class="white-logo" alt="image">
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
                        <img style="width:80px" src="assets/imgs/{{ $settings[0]['logo'] }}" class="black-logo" alt="image">
                                <img style="width:80px" src="assets/imgs/{{ $settings[0]['logo'] }}" class="white-logo" alt="image">
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

</body>
</html>


