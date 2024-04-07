
 
 <!-- Start Page Banner Area -->
     <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content" data-speed="0.06" data-revert="true">
                    <h2 data-aos="fade-right" data-aos-delay="30" data-aos-duration="300">Latest-News</h2>

                    <ul data-aos="fade-right" data-aos-delay="70" data-aos-duration="700">
                        <li>
                            <a href="index"><?php echo $lang['menu-home']; ?></a>
                        </li>
                        <li>Latest-News</li>
                    </ul>
                </div>

                <div class="page-banner-image" data-speed="0.08" data-revert="true">
                
                    <img src="{{ asset('assets/imgs/'.$blog->blog_img) }}" data-aos="fade-left" data-aos-delay="80" data-aos-duration="800" alt="image">
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
                                    <img src="{{ asset('assets/imgs/'.$blog->blog_img) }}" alt="image">

                                    <div class="date" >
                                        <span style="border-radius:100% !important;">{{ $blog->blog_date }}</span>
                                    </div>
                                </div>
    
                                <ul class="entry-meta">
                                    <li>{{ asset('assets/imgs/'.$blog->dr_image) }}
                                        <img src="{{ asset('assets/imgs/'.$setting[0]['dr_image']) }}" alt="image">
                                        <a href="#">{{ $setting[0]['title']}}</a>
                                    </li>
                                    
                                    
                                </ul>

                                <h3>{{ $blog->blog_title_en }}</h3>

                                <p style="text-align:justify;">{{ $blog->blog_desc_en }}</p>
 
                            </div>
 
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area">
                            

                          

                            <div class="widget widget_medip_posts_thumb">
                                <h3 class="widget-title">Top-Medical-News</h3>

                            
 
                                <?php  foreach($blogs as $blog){ ?> 
                                    <article class="item">
                                        <a href="{{ route('medical_news.show', ['id' => $blog->id]) }}" class="thumb">
                                            <span class="fullimage bg3" role="img"></span>
                                        </a>
                                        <div class="info">
                                            <h4><a href="{{ route('medical_news.show', ['id' => $blog->id]) }}">{{ $blog->blog_title_en }}</a></h4>
                                            <span><a href="{{ route('medical_news.show', ['id' => $blog->id]) }}">{{ $setting[0]['title']}}</a></span>
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


          

