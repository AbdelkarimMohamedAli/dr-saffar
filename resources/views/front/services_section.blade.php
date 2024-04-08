   <!-- Start Services Area -->
   <div class="services-area pt-100 pb-75">
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
                                <img src="{{ asset('assets/images/services/shape-1.png') }}" alt="image">
                            </div>
                        </div>
                    </div>

                <?php  } ?>

                </div>
              <center>   <div class="why-choose-btn">
                    <a href="#services" class="default-btn">clickAll</a> 
                </div></center>
            </div>
        </div>
        <!-- End Services Area -->