        <!-- Start Blog Area -->
        <div class="blog-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>Latest News</span>
                    <h2>Keep Up With Our Most Recent Medical News</h2>
                </div>
                <?php  foreach($blogs as $blog){ ?>    
                    <div class="blog-slides owl-carousel owl-theme">
                        <div class="blog-card-item">
                            <div class="image">
                                <a href="{{ route('medical_news.show', ['id' => $blog->id]) }}"><img src="{{ asset('assets/imgs/'.$blog->blog_img) }}" alt="image"></a>
                                <div class="date">
                                    <span>{{ $blog->blog_date }}</span>
                                </div>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="{{ route('medical_news.show', ['id' => $blog->id]) }}">{{ $blog->blog_title }}</a>
                                </h3>
                                <p>{{ $blog->blog_subtitle }}.</p>
                                <a href="{{ route('medical_news.show', ['id' => $blog->id]) }}" class="blog-btn">Read-More</a>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>

            <div class="blog-shape-1" data-speed="0.09" data-revert="true">
                <img src="{{ asset('assets/images/blog/shape-1.png') }}" alt="image">
                
            </div>

            <center>   <div class="why-choose-btn">
                    <a href="#" class="default-btn">clickAll</a> 
                </div></center>
        </div>
        <!-- End Blog Area -->
