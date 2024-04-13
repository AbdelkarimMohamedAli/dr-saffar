  <!-- Start Main Slides Area -->
  <div class="home-slides owl-carousel owl-theme">
  <!-- item-bg2 -->
       
<?php  foreach($sliders as $slider){ ?>  
    
            <div class="main-slides-item"  style="background-image: url({{ asset('assets/imgs/'.$slider->slider_image) }});">
                <div class="container">
                    <div class="main-slides-content" data-speed="0.06" data-revert="true">
                        <span data-aos="fade-right" data-aos-delay="30" data-aos-duration="300">@if(session('locale') == 'en') {{ $slider->slider_content1 }} @else {{ $slider->slider_content1_en }} @endif</span>
                        <h1 data-aos="fade-right" data-aos-delay="40" data-aos-duration="400">@if(session('locale') == 'en') {{ $slider->slider_content2 }} @else {{ $slider->slider_content2_en }} @endif</h1>
                        <p data-aos="fade-right" data-aos-delay="50" data-aos-duration="500">@if(session('locale') == 'en') {{ $slider->slider_content3 }} @else {{ $slider->slider_content3_en }} @endif</p>
                        
                        <div class="slides-btn" data-aos="fade-right" data-aos-delay="60" data-aos-duration="600">
                            <a href="#" class="default-btn">@if(session('locale') == 'en') Contact Now @else احجز الان @endif</a>
                        </div>
                        
                    </div>
                </div>
            </div>

<?php }?>  

        </div>
        <!-- End Main Slides Area -->
        
        <!-- Empty Area -->
        <div class="easy-solutions-area pt-100 pb-75">
            <div class="container">
            

                <div class="row justify-content-center">
             


                </div>
            </div>
        </div>
        <!-- Empty Area -->