
      <!-- Start Page Banner Area -->
      <div class="page-banner-area" >
            <div class="container">
                <div class="page-banner-content" data-speed="0.06" data-revert="true">
                    <h2 data-aos="fade-right" data-aos-delay="30" data-aos-duration="300">Services </h2>

                    <ul data-aos="fade-right" data-aos-delay="70" data-aos-duration="700">
                        <li>
                            <a href="index">menu-home</a>
                        </li>
                        <li>Our-Services</li>
                    </ul>
                </div>

                <div class="page-banner-image" data-speed="0.08" data-revert="true">
                    <img src="assets/images/page-banner/banner-1.png" data-aos="fade-left" data-aos-delay="80" data-aos-duration="800" alt="image">
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->
        
        <!-- Start Blog Area -->
        <div class="blog-area-with-color ptb-100">
            <div class="container">
                <div class="section-title">
                <span>Our-Services </span>
                    <h2>services-subtitle</h2>
                </div>

                <div class="row justify-content-center">
                  
                
                
                <?php  foreach($services as $service){ ?> 
                
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-card">
                        <div class="image">
                            <img src="{{ asset('assets/imgs/'.$service->services_icon) }}" alt="image">
                        </div>

                        <div class="content">
                            <h3>

                                <a href="{{ route('services_details.show', ['id' => $service->id]) }}">{{ $service->services_title_en }}</a>
                            </h3>
                            <p>{{ $service->services_subtitle_en }}</p>
                            <a href="{{ route('services_details.show', ['id' => $service->id]) }}" class="services-btn">Read-More</a>
                        </div>

                        <div class="services-shape-1">
                            <img src="assets/images/services/shape-1.png" alt="image">
                        </div>
                    </div>
                </div>

            <?php  } ?>
             
     
 
                </div>
            </div>
        </div>
        <!-- End Blog Area -->

 