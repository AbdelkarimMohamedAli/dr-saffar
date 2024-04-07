
 
 <!-- Start Page Banner Area -->
     <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content" data-speed="0.06" data-revert="true">
                    <h2 data-aos="fade-right" data-aos-delay="30" data-aos-duration="300">Our-Services</h2>

                    <ul data-aos="fade-right" data-aos-delay="70" data-aos-duration="700">
                        <li>
                            <a href="index">menu-home</a>
                        </li>
                        <li>Our-Services</li>
                    </ul>
                </div>

                <div class="page-banner-image" data-speed="0.08" data-revert="true">
                    <img src="assets/images/page-banner/banner-2.png" data-aos="fade-left" data-aos-delay="80" data-aos-duration="800" alt="image">
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->
        

        <!-- Start Blog Details Area -->
        <div class="blog-details-area ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details-desc">
                            <div class="article-content">
                                <div class="article-image">
                                    <img src="{{ asset('assets/imgs/'.$service->services_img) }}" alt="image">
                                     
                                </div>
    
                                <h3> {{ $service->services_title_en }}</h3>
                                

                                <p style="text-align:justify;">{{ $service->services_desc_en }}</p>
 
                            </div>
 
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area">
                            

                          

                            <div class="widget widget_medip_posts_thumb">
                                <h3 class="widget-title">Our-Services</h3>

                            
 
                                <?php  foreach($services as $service){ ?> 
                                    <article class="item">

                                        <a href="{{ route('services_details.show', ['id' => $service->id]) }}" class="thumb">
                                            <span class="fullimage bg3" role="img"></span>
                                            <img src="{{ asset('assets/imgs/'.$service->services_img) }}" alt="image"></a>
                                        </a>
                                        <div class="info">
                                            <h4><a href="{{ route('services_details.show', ['id' => $service->id]) }}">{{ $service->services_title_en }}</a></h4>
                                        </div>
                                    </article>
                                <?php } ?>

                            </div>
                        
                            
                        </aside>
                    </div>
                 
                </div>
            </div>

            
        </div>
        <!-- End Blog Details Area -->

        