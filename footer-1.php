<?php $hosbit_redux_demo = get_option('redux_demo');?> 
    <!-- footer-area -->
    <footer class="black-bg pb-35">
        <div class="footer-top-wrap pt-85 pb-35">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="footer-widget mb-50">
                            <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-1' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="footer-widget mb-50">
                            <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-2' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="footer-widget mb-50">
                            <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-3' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="footer-widget mb-50">
                            <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-4' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-overlay-icon"><img src="<?php echo get_template_directory_uri();?>/img/icon/footer_icon.png" alt=""></div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-5">
                        <div class="copyright-left-wrap">
                            <div class="logo">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                <?php if(isset($hosbit_redux_demo['footer_logo']['url']) && $hosbit_redux_demo['footer_logo']['url'] != ''){ ?>
                                    <img src="<?php echo esc_url($hosbit_redux_demo['footer_logo']['url']); ?>" alt="Logo">
                                <?php }else{ ?>
                                    <img src="<?php echo get_template_directory_uri();?>/img/logo/w_logo.png" alt="Logo">
                                <?php } ?>
                                </a>
                            </div>
                            <div class="copyright-social">
                                <ul>
                                    <?php if(isset($hosbit_redux_demo['facebook']) && $hosbit_redux_demo['facebook'] != ''){?>
                                    <li><a href="<?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['facebook']));?>"><i class="fab fa-facebook-square"></i></a></li>
                                    <?php } ?>
                                    <?php if(isset($hosbit_redux_demo['twitter']) && $hosbit_redux_demo['twitter'] != ''){?>
                                    <li><a href="<?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['twitter']));?>"><i class="fab fa-twitter"></i></a></li>
                                    <?php } ?>
                                    <?php if(isset($hosbit_redux_demo['pinterest']) && $hosbit_redux_demo['pinterest'] != ''){?>
                                    <li><a href="<?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['pinterest']));?>"><i class="fab fa-pinterest-square"></i></a></li>
                                    <?php } ?>
                                    <?php if(isset($hosbit_redux_demo['youtube']) && $hosbit_redux_demo['youtube'] != ''){?>
                                    <li><a href="<?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['youtube']));?>"><i class="fab fa-youtube"></i></a></li>
                                    <?php } ?>
                                    <?php if(isset($hosbit_redux_demo['instagram']) && $hosbit_redux_demo['instagram'] != ''){?>
                                    <li><a href="<?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['instagram']));?>"><i class="fab fa-instagram"></i></a></li>
                                    <?php } ?>
                                    <?php if(isset($hosbit_redux_demo['snapchat']) && $hosbit_redux_demo['snapchat'] != ''){?>
                                    <li><a href="<?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['snapchat']));?>"><i class="fab fa-snapchat-ghost"></i></a></li>
                                    <?php } ?>
                                    <?php if(isset($hosbit_redux_demo['linkedin']) && $hosbit_redux_demo['linkedin'] != ''){?>
                                    <li><a href="<?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['linkedin']));?>"><i class="fab fa-linkedin-in"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($hosbit_redux_demo['footer_text']) && $hosbit_redux_demo['footer_text'] != ''){?>
                    <div class="col-xl-6 col-lg-7">
                        <div class="copyright-text">
                            <p><?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['footer_text']));?>  </p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
    <?php wp_footer(); ?>
</body>
</html>