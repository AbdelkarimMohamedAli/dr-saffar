<div class="contact-social-information"> 
                            <ul class="social">
                                <?php if(!empty($row_settings['whatsapp'])){?>
                                <li>
                                    <a href="https://wa.me/<?php echo $row_settings['whatsapp'] ?>" target="_blank">
                                        <i class="ri-whatsapp-fill"></i>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if(!empty($row_settings['phone1'])){?>
                                <li>
                                    <a href="tel:<?php echo $row_settings['phone1'] ?>" target="_blank">
                                        <i class="ri-phone-fill"></i>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if(!empty($row_settings['facebook'])){?>
                                <li>
                                    <a href="<?php echo $row_settings['facebook'] ?>" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if(!empty($row_settings['twitter'])){?>
                                <li>
                                    <a href="<?php echo $row_settings['twitter'] ?>" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if(!empty($row_settings['instagram'])){?>
                                <li>
                                    <a href="<?php echo $row_settings['instagram'] ?>" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if(!empty($row_settings['linkedin'])){?>
                                <li>
                                    <a href="<?php echo $row_settings['linkedin'] ?>" target="_blank">
                                        <i class="ri-linkedin-line"></i>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if(!empty($row_settings['youtube'])){?>
                                <li>
                                    <a href="<?php echo $row_settings['youtube'] ?>" target="_blank">
                                        <i class="ri-youtube-fill"></i>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if(!empty($row_settings['snapchat'])){?>
                                <li>
                                    <a href="<?php echo $row_settings['snapchat'] ?>" target="_blank">
                                        <i class="ri-snapchat-fill"></i>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if(!empty($row_settings['map'])){?>
                                <li>
                                    <a href="<?php echo $row_settings['map'] ?>" target="_blank">
                                        <i class="ri-map-fill"></i>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>