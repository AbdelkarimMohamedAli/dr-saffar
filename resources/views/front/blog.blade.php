        <!-- Start Blog Area -->
        <div class="blog-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span><?php   if(session('locale') == 'en'){?> Latest-News  <?php }else{ ?>  اخر الأخبار  <?php } ?></span>
                    <h2><?php   if(session('locale') == 'en'){?> Keep Up With Our Most Recent Medical News  <?php }else{ ?>  مواكبة أحدث الأخبار الطبية لدينا  <?php } ?></h2>
                </div>
                    <div class="blog-slides owl-carousel owl-theme">
                    @foreach($blogs as $blog)
                        <div class="blog-card-item">
                            <div class="image">
                                <a href="{{ route('medical_news.show', ['id' => $blog->id]) }}"><img src="{{ asset('assets/imgs/'.$blog->blog_img) }}" alt="image"></a>
                                <div class="date">
                                    <span>{{ $blog->blog_date }}</span>
                                </div>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="{{ route('medical_news.show', ['id' => $blog->id]) }}"><?php   if(session('locale') == 'en'){?> {{ $blog->blog_title_en }}  <?php }else{ ?> {{ $blog->blog_title }} <?php } ?></a>
                                </h3>
                                <p><?php   if(session('locale') == 'en'){?> {{ $blog->blog_subtitle_en }}  <?php }else{ ?> {{ $blog->blog_subtitle }} <?php } ?>.</p>
                                <a href="{{ route('medical_news.show', ['id' => $blog->id]) }}" class="blog-btn"><?php   if(session('locale') == 'en'){?> Read-More  <?php }else{ ?> اقرا أكثر <?php } ?></a>
                            </div>
                        </div>
                   @endforeach
                    </div>
            </div>

            <div class="blog-shape-1" data-speed="0.09" data-revert="true">
                <img src="{{ asset('assets_rtl/images/blog/shape-1.png') }}" alt="image">
                
            </div>

            
        </div>
        <!-- End Blog Area -->
