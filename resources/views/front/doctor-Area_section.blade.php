   <!-- Start Healthcare Doctor Area -->
   <div class="healthcare-doctor-area ptb-100"<?php if(Cookie::get('locale') == 'ar'){ ?> direction:rtl;<?php } ?>>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="healthcare-doctor-content" data-speed="0.05" data-revert="true">
                        <span> <?php if(Cookie::get('locale') == 'en' && !empty($doctor_section) ){ ?>
                                    {{ $doctor_section[0]['section_title_en'] }}
                            <?php  }elseif(Cookie::get('locale') == 'ar' && !empty($doctor_section)){ ?>
                                {{ $doctor_section[0]['section_title']}}
                             <?php } ?> 
                        </span>
                        <h3> <?php if(Cookie::get('locale') == 'en' && !empty($doctor_section) ){ ?>
                                    {{ $doctor_section[0]['section_sub_en'] }}
                            <?php  }elseif(Cookie::get('locale') == 'ar' && !empty($doctor_section)){ ?>
                                {{ $doctor_section[0]['section_sub']}}
                             <?php } ?> 
                        </h3>
                        <p> <?php if(Cookie::get('locale') == 'en' && !empty($doctor_section) ){ ?>
                                    {{ $doctor_section[0]['section_desc_en'] }}
                            <?php  }elseif(Cookie::get('locale') == 'ar' && !empty($doctor_section)){ ?>
                                {{ $doctor_section[0]['section_desc']}}
                             <?php } ?> 
                        </p>

                            <div class="healthcare-btn">
                                <a href="{{ route('contact') }}" class="default-btn"><?php   if(Cookie::get('locale') == 'en'){?> Contact Us  <?php }else{ ?> اتصل بنا <?php } ?></a>
                            </div>

                            <div class="healthcare-stethoscope">
                            <?php if(!empty($doctor_section)){ ?>
                                <img  style="width:200px; opacity:0.2" src="{{ asset('assets/imgs/'.$doctor_section[0]['section_vector_img'] ) }}" alt="image">
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="healthcare-doctor-image" data-speed="0.05" data-revert="true">
                        <?php if(!empty($doctor_section)){ ?>
                            <img src="{{ asset('assets/imgs/'.$doctor_section[0]['section_dr_img']) }}" alt="image">
                            <?php } ?>
                            <div class="circle-pattern"></div>

                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Healthcare Doctor Area -->
