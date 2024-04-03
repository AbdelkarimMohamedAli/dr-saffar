
 <!doctype html>
<html lang="ar">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php echo $row_settings['seo_desc']; ?>">
        <meta name="keywords" content="<?php echo $row_settings['seo_keywords']; ?>">
        
        <meta name="author" content="Eng. Mohamed Khaled Hekal">
        <!-- Links of CSS files -->
        @if(session('locale') == 'en')


        <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
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
        @else

        <link rel="stylesheet" href="{{asset('assets_rtl/css/bootstrap.rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_rtl/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('assets_rtl/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_rtl/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('assets_rtl/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{asset('assets_rtl/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_rtl/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_rtl/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_rtl/css/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_rtl/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_rtl/css/fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_rtl/css/selectize.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_rtl/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets_rtl/css/navbar.css')}}">
        <link rel="stylesheet" href="{{asset('assets_rtl/css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('assets_rtl/css/dark.css')}}">
		<link rel="stylesheet" href="{{asset('assets_rtl/css/responsive.css')}}">
		<link rel="stylesheet" href="{{asset('assets_rtl/css/rtl.css')}}">
         @endif
  
		<title><?php echo $row_settings['title']; ?></title>
<style>
    .pb-75MM {
    padding-bottom: -6px;
}
</style>
        <link rel="icon"  href="assets/images/<?php echo $row_settings['favicon']; ?>">
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
                                <img style="width:80px" src="assets/images/<?php echo $row_settings['logo']; ?>" class="black-logo" alt="image">
                                <img style="width:80px" src="assets/images/<?php echo $row_settings['logo']; ?>" class="white-logo" alt="image">
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
                        <img style="width:80px" src="assets/images/<?php echo $row_settings['logo']; ?>" class="black-logo" alt="image">
                                <img style="width:80px" src="assets/images/<?php echo $row_settings['logo']; ?>" class="white-logo" alt="image">
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