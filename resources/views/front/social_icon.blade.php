<div class="contact-social-information"> 
                            <ul class="social">
                            
                                <li>
                                    <a href="https://wa.me/<?php if(!empty($settings)){ ?> {{ $settings[0]['whatsapp']}} <?php } ?>" target="_blank">
                                        <i class="ri-whatsapp-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:<?php if(!empty($settings)){ ?> {{ $settings[0]['phone1']}} <?php } ?>" target="_blank">
                                        <i class="ri-phone-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php if(!empty($settings)){ ?> {{ $settings[0]['facebook']}} <?php } ?>" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php if(!empty($settings)){ ?> {{ $settings[0]['twitter']}} <?php } ?>" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php if(!empty($settings)){ ?> {{ $settings[0]['instagram']}} <?php } ?>" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php if(!empty($settings)){ ?> {{ $settings[0]['linkedin']}} <?php } ?>" target="_blank">
                                        <i class="ri-linkedin-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>