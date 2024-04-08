   <!-- Start Healthcare Doctor Area -->
   <div class="healthcare-doctor-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="healthcare-doctor-content" data-speed="0.05" data-revert="true">
                        
                            <span>{{ $doctor_section[0]['section_title_en']}}</span>
                            <h3>{{ $doctor_section[0]['section_sub_en']}}</h3>
                            <p>{{ $doctor_section[0]['section_desc_en']}}</p>

                            <div class="healthcare-btn">
                                <a href="#" class="default-btn">Contact Us</a>
                            </div>

                            <div class="healthcare-stethoscope">
                                <img  style="width:200px; opacity:0.2" src="{{ asset('assets/imgs/'.$doctor_section[0]['section_vector_img'] ) }}" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="healthcare-doctor-image" data-speed="0.05" data-revert="true">
                            <img src="{{ asset('assets/imgs/'.$doctor_section[0]['section_dr_img'] ) }}" alt="image">

                            <div class="circle-pattern"></div>

                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Healthcare Doctor Area -->
