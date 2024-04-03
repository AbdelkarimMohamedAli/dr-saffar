

<!-- Start Footer Area -->
<footer class="footer-area pt-100">
    <div class="container"  <?php   if(session('locale') == 'ar'){?> dir="rtl" <?php } ?>>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <div class="widget-logo">
                        <img src="assets/images/<?php echo $row_settings['logo']; ?>" class="black-logo" alt="image">
                        <img src="assets/images/<?php echo $row_settings['logo']; ?>" class="white-logo" alt="image">
                    </div>
                    
                    <p style="text-align:justify"><?php echo $row_settings['subtitle']; ?></p>

                  
                    <div class="widget-info">
                        <img src="assets/images/doctors-details/<?php echo $row_settings['dr_image']; ?>" alt="image">
                        <h4><?php echo $row_settings['dr_name']; ?></h4>
                        <span><?php echo $row_settings['email']; ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget ps-5">
                    <h3><?php   if(session('locale') == 'en'){?> Useful Link  <?php }else{ ?>  روابط مختصرة   <?php } ?></h3>

                    <ul class="quick-links">
                        <li>
                            <a href="about"><?php   if(session('locale') == 'en'){?> About Us  <?php }else{ ?>   من نحن  <?php } ?> </a>
                        </li>
                        <li>
                            <a href="medical"><?php echo $lang['Latest-News']; ?></a>
                        </li>
                        <li>
                            <a href="contact"><?php   if(session('locale') == 'en'){?> Contact Us  <?php }else{ ?>   اتصل بنا  <?php } ?> </a>
                        </li>
                        <li>
                            <a href="services"><?php echo $lang['Our-Services']; ?></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3><?php echo $lang['Latest-News']; ?></h3>
                    
                    <div class="footer-widget-blog">
                    <?php  foreach($result_blog as $blogrow){ ?> 
                        <article class="item">
                            <a href="medical_news?id=<?php echo $blogrow['id']; ?>&<?php echo $blogrow['blog_title']; ?>" class="thumb">
                                
                                <img src="assets/images/blog/<?php echo $blogrow['blog_img']; ?>" class="fullimage">
                            </a>
                            <div class="info">
                                <h4><a href="medical_news?id=<?php echo $blogrow['id']; ?>&<?php echo $blogrow['blog_title']; ?>"><?php echo $blogrow['blog_title']; ?></a></h4>
                                <span><a href="medical_news?id=<?php echo $blogrow['id']; ?>&<?php echo $blogrow['blog_title']; ?>">By Dr.Alsaffar</a></span>
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
                            <h4><a href="tel:<?php echo $row_settings['phone1']; ?>"><?php echo $row_settings['phone1']; ?></a></h4>
                            <span> <?php   if(session('locale') == 'en'){?>  Call Today <?php }else{ ?>  اتصل الان   <?php } ?>  </span>
                        </li>

                        <li>
                            <i class="ri-time-line"></i>
                            <h4><?php echo $row_settings['open_hours']; ?></h4>
                            <span><?php   if(session('locale') == 'en'){?>Open Hour<?php }else{ ?> ساعات العمل <?php } ?></span>
                        </li>

                        <li>
                            <i class="ri-map-pin-line"></i>
                            <h4><?php echo $row_settings['location']; ?></h4>
                            <span> <?php   if(session('locale') == 'en'){?> Our Location  <?php }else{ ?> العنوان <?php } ?> </span>
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
<?php   if(session('locale') == 'en'){?>

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

<?php }else{ ?>
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
<?php } ?>    
</body>
</html>