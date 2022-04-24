<?php
/*
 * Template Name: Contact
 * Description: A Page Template with a Page Builder design.
 */
$hosbit_redux_demo = get_option('redux_demo');
    get_header(); ?>
	<!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo get_template_directory_uri();?>/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2>Contact Us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-shape alltuchtopdown"><img src="<?php echo get_template_directory_uri();?>/img/images/breadcrumb_roket.png" alt=""></div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact-area pt-100 pb-100" data-background="<?php echo get_template_directory_uri();?>/img/bg/contact_bg.jpg">
            <div class="container">
                <div class="contact-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="contact-info-wrap" data-background="<?php echo get_template_directory_uri();?>/img/bg/contact_info_bg.jpg">
                                <h4 class="title">Contact Info</h4>
                                <div class="contact-info-list">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Find Location</h5>
                                                <span>Walking Park, Angeles, NY</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Our Mail</h5>
                                                <span>information@info.com</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Contact Number</h5>
                                                <span>+02 5458 6598 523</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="contact-info-bottom mt-30">
                                    <a href="#" class="btn">Get free Quote</a>
                                    <ul class="contact-social">
                                        <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="pin"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#" class="lik"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-form-wrap">
                                <div class="section-title text-left mb-40">
                                    <span class="sub-title">contact us</span>
                                    <h2 class="title">Leave a Message</h2>
                                </div>
                                <?php echo do_shortcode('[contact-form-7 id="76" title="Contact Form"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

        <!-- map -->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96873.5474755642!2d-74.01503745232617!3d40.645353095083614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24416947c2109%3A0x82765c7404007886!2zQnJvb2tseW4sIFRp4buDdSBiYW5nIE5ldyBZb3JrLCBIb2EgS-G7sw!5e0!3m2!1svi!2s!4v1609900932197!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!-- map-end -->

    </main>
    <!-- main-area-end -->

<?php
    get_footer();
?>