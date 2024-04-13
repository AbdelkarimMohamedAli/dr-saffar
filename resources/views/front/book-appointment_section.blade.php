  <!-- Start Book Appointment Area -->
  <div class="book-appointment-area"<?php   if(Cookie::get('locale') == 'ar'){?> dir="rtl" <?php } ?>>
            <div class="container">
                <div class="book-appointment-inner-box ptb-100">
                    <div class="row align-items-center">
                     
                        <div class="col-lg- col-md-12">
                            
                            <form class="book-appointment-form">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="book-appointment-btn" style="background-color: rgba(64, 116, 172, 0.6); 
                                        color: rgba(64, 116, 172, 0.6);">
                                          <center>   <h2 style="color:white;">@if(Cookie::get('locale') == 'en') <?php if(!empty($banner_section)){ ?> {{ $banner_section[0]['title_en'] }} <?php } ?> @else <?php if(!empty($banner_section)){ ?> {{ $banner_section[0]['title'] }}<?php } ?> @endif</h2></center>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Book Appointment Area -->
 