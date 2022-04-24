<?php $hosbit_redux_demo = get_option('redux_demo');?> 
    <!-- footer-area -->
    <footer class="footer-style-two">
        <div class="footer-top-wrap dark-bg pt-90 pb-40">
            <div class="container">
                <div class="footer-newsletter">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-5">
                            <div class="newsletter-title">
                                <?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['form_title']));?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <?php echo do_shortcode('[contact-form-7 id="3" title="Subscribe Form 1"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-logo mb-40">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                <?php if(isset($hosbit_redux_demo['footer_logo_2']['url']) && $hosbit_redux_demo['footer_logo_2']['url'] != ''){ ?>
                                    <img src="<?php echo esc_url($hosbit_redux_demo['footer_logo_2']['url']); ?>" alt="Logo">
                                <?php }else{ ?>
                                    <img src="<?php echo get_template_directory_uri();?>/img/logo/w_logo.png" alt="Logo">
                                <?php } ?>
                                </a>
                            </div>
                            <div class="fw-address">
                                <ul>
                                    <li class="phone">
                                        <?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['phone']));?>
                                    </li>
                                    <li class="address">
                                        <p><?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['address']));?></p>
                                    </li>
                                </ul>
                                <?php if(isset($hosbit_redux_demo['footer_button']) && $hosbit_redux_demo['footer_button'] != ''){?>
                                <a href="<?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['footer_link_button']));?>" class="btn green-btn"><i class="fas fa-map-marker-alt"></i> 
                                    <?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['footer_button']));?>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <?php if ( is_active_sidebar( 'footer-area-11' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-11' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget mb-50">
                            <?php if ( is_active_sidebar( 'footer-area-22' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-22' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <?php if ( is_active_sidebar( 'footer-area-33' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-area-33' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap-two">
            <div class="container">
                <div class="row align-items-center">
                    <?php if(isset($hosbit_redux_demo['footer_text_1']) && $hosbit_redux_demo['footer_text_1'] != ''){?>
                    <div class="col-md-8">
                        <div class="copyright-text">
                            <p><?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['footer_text_1']));?></p>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(isset($hosbit_redux_demo['payment_image']['url']) && $hosbit_redux_demo['payment_image']['url'] != ''){ ?>
                    <div class="col-md-4">
                        <div class="payment-method-img">
                            <img src="<?php echo esc_url($hosbit_redux_demo['payment_image']['url']); ?>" alt="">
                        </div>
                    </div>
                    <?php }else{ ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
    <?php wp_footer(); ?>
</body>
</html>