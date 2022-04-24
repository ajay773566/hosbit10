<?php
/*
 * Template Name: WHMCS
 * Description: A Page Template with a Page Builder design.
 */
$hosbit_redux_demo = get_option('redux_demo');
    get_header(); ?>
	<!-- main-area -->
    <main>

        <!-- whmcs-area -->
        <section class="whmcs-area whmcs-bg" data-background="<?php echo get_template_directory_uri();?>/img/bg/whmcs_bg.jpg">
            <div class="container custom-container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-7 col-lg-6 order-0 order-lg-2">
                        <div class="whmcs-img">
                            <img src="<?php echo get_template_directory_uri();?>/img/images/whmcs_img.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="whmcs-content">
                            <h2>Own Whmcs Start Web Hosting</h2>
                            <p>Up to 90% Web Hosting Plans + Whmcs The deal ends in $ 4.99 per month</p>
                            <div class="coming-time" data-countdown="2021/2/11"></div>
                            <a href="<?php echo esc_url(home_url('/')); ?>?page_id=49" class="btn"><span>+</span> discover more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="whmcs-gear"><img src="<?php echo get_template_directory_uri();?>/img/images/whmcs_gear.png" alt=""></div>
            <div class="whmcs-rocket alltuchtopdown"><img src="<?php echo get_template_directory_uri();?>/img/images/whmcs_roket.png" alt=""></div>
        </section>
        <!-- whmcs-area-end -->

        <!-- brand-area -->
        <div class="brand-area gradient-bg">
            <div class="container">
                <div class="row brand-active">
                    <div class="col-xl-2">
                        <div class="brand-item text-center">
                            <img src="<?php echo get_template_directory_uri();?>/img/brand/brand_logo01.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="brand-item text-center">
                            <img src="<?php echo get_template_directory_uri();?>/img/brand/brand_logo02.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="brand-item text-center">
                            <img src="<?php echo get_template_directory_uri();?>/img/brand/brand_logo03.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="brand-item text-center">
                            <img src="<?php echo get_template_directory_uri();?>/img/brand/brand_logo04.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="brand-item text-center">
                            <img src="<?php echo get_template_directory_uri();?>/img/brand/brand_logo05.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="brand-item text-center">
                            <img src="<?php echo get_template_directory_uri();?>/img/brand/brand_logo03.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- pricing-area -->
        <section class="pricing-area gray-bg position-relative pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pricing-box-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="web-hosting-tab" data-toggle="tab" href="#web-hosting" role="tab" aria-controls="web-hosting"
                                        aria-selected="true">Web Hosting</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="website-builder-tab" data-toggle="tab" href="#website-builder" role="tab" aria-controls="website-builder"
                                        aria-selected="false">Website Builder</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="online-store-tab" data-toggle="tab" href="#online-store" role="tab" aria-controls="online-store"
                                        aria-selected="false">Online Stores</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="web-hosting" role="tabpanel" aria-labelledby="web-hosting-tab">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-9">
                                <div class="section-title text-center mb-70">
                                    <span class="sub-title">ALWAYS IN THE RIGHT</span>
                                    <h2 class="title">Choose Your Web Hosting Plan</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row pricing-box-wrap justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="pricing-box mb-30">
                                    <div class="pricing-head">
                                        <h6>STARTER</h6>
                                        <div class="pricing-icon services-icon">
                                            <i class="flaticon-hosting"></i>
                                        </div>
                                    </div>
                                    <div class="pricing-list mb-30">
                                        <h5>features</h5>
                                        <ul>
                                            <li>3 Websites</li>
                                            <li>24/7 Live Support</li>
                                            <li>Easy Website Builder</li>
                                            <li>Weekly Backspace</li>
                                        </ul>
                                    </div>
                                    <div class="price mb-20">
                                        <h2>$12.95<span>/mo</span></h2>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="<?php echo esc_url(home_url('/')); ?>?page_id=45" class="btn"><span>+</span> Get started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="pricing-box mb-30">
                                    <div class="pricing-head">
                                        <h6>PROFESSIONAL</h6>
                                        <div class="pricing-icon services-icon">
                                            <i class="flaticon-hosting"></i>
                                        </div>
                                    </div>
                                    <div class="pricing-list mb-30">
                                        <h5>features</h5>
                                        <ul>
                                            <li>3 Websites</li>
                                            <li>24/7 Live Support</li>
                                            <li>Easy Website Builder</li>
                                            <li>Weekly Backspace</li>
                                        </ul>
                                    </div>
                                    <div class="price mb-20">
                                        <h2>$19.99<span>/mo</span></h2>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="<?php echo esc_url(home_url('/')); ?>?page_id=45" class="btn"><span>+</span> Get started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="pricing-box mb-30">
                                    <div class="pricing-head">
                                        <h6>Business</h6>
                                        <div class="pricing-icon services-icon">
                                            <i class="flaticon-hosting"></i>
                                        </div>
                                    </div>
                                    <div class="pricing-list mb-30">
                                        <h5>features</h5>
                                        <ul>
                                            <li>3 Websites</li>
                                            <li>24/7 Live Support</li>
                                            <li>Easy Website Builder</li>
                                            <li>Weekly Backspace</li>
                                        </ul>
                                    </div>
                                    <div class="price mb-20">
                                        <h2>$29.99<span>/mo</span></h2>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="<?php echo esc_url(home_url('/')); ?>?page_id=45" class="btn"><span>+</span> Get started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="website-builder" role="tabpanel" aria-labelledby="website-builder-tab">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-9">
                                <div class="section-title text-center mb-70">
                                    <span class="sub-title">ALWAYS IN THE RIGHT</span>
                                    <h2 class="title">Choose Your website builder</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row pricing-box-wrap justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="pricing-box mb-30">
                                    <div class="pricing-head">
                                        <h6>STARTER</h6>
                                        <div class="pricing-icon services-icon">
                                            <i class="flaticon-hosting"></i>
                                        </div>
                                    </div>
                                    <div class="pricing-list mb-30">
                                        <h5>features</h5>
                                        <ul>
                                            <li>3 Websites</li>
                                            <li>24/7 Live Support</li>
                                            <li>Easy Website Builder</li>
                                            <li>Weekly Backspace</li>
                                        </ul>
                                    </div>
                                    <div class="price mb-20">
                                        <h2>$12.95<span>/mo</span></h2>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="<?php echo esc_url(home_url('/')); ?>?page_id=45" class="btn"><span>+</span> Get started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="pricing-box mb-30">
                                    <div class="pricing-head">
                                        <h6>PROFESSIONAL</h6>
                                        <div class="pricing-icon services-icon">
                                            <i class="flaticon-hosting"></i>
                                        </div>
                                    </div>
                                    <div class="pricing-list mb-30">
                                        <h5>features</h5>
                                        <ul>
                                            <li>3 Websites</li>
                                            <li>24/7 Live Support</li>
                                            <li>Easy Website Builder</li>
                                            <li>Weekly Backspace</li>
                                        </ul>
                                    </div>
                                    <div class="price mb-20">
                                        <h2>$19.99<span>/mo</span></h2>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="<?php echo esc_url(home_url('/')); ?>?page_id=45" class="btn"><span>+</span> Get started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="pricing-box mb-30">
                                    <div class="pricing-head">
                                        <h6>Business</h6>
                                        <div class="pricing-icon services-icon">
                                            <i class="flaticon-hosting"></i>
                                        </div>
                                    </div>
                                    <div class="pricing-list mb-30">
                                        <h5>features</h5>
                                        <ul>
                                            <li>3 Websites</li>
                                            <li>24/7 Live Support</li>
                                            <li>Easy Website Builder</li>
                                            <li>Weekly Backspace</li>
                                        </ul>
                                    </div>
                                    <div class="price mb-20">
                                        <h2>$29.99<span>/mo</span></h2>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="<?php echo esc_url(home_url('/')); ?>?page_id=45" class="btn"><span>+</span> Get started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="online-store" role="tabpanel" aria-labelledby="online-store-tab">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-9">
                                <div class="section-title text-center mb-70">
                                    <span class="sub-title">ALWAYS IN THE RIGHT</span>
                                    <h2 class="title">Choose Your online store</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row pricing-box-wrap justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="pricing-box mb-30">
                                    <div class="pricing-head">
                                        <h6>STARTER</h6>
                                        <div class="pricing-icon services-icon">
                                            <i class="flaticon-hosting"></i>
                                        </div>
                                    </div>
                                    <div class="pricing-list mb-30">
                                        <h5>features</h5>
                                        <ul>
                                            <li>3 Websites</li>
                                            <li>24/7 Live Support</li>
                                            <li>Easy Website Builder</li>
                                            <li>Weekly Backspace</li>
                                        </ul>
                                    </div>
                                    <div class="price mb-20">
                                        <h2>$12.95<span>/mo</span></h2>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="<?php echo esc_url(home_url('/')); ?>?page_id=45" class="btn"><span>+</span> Get started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="pricing-box mb-30">
                                    <div class="pricing-head">
                                        <h6>PROFESSIONAL</h6>
                                        <div class="pricing-icon services-icon">
                                            <i class="flaticon-hosting"></i>
                                        </div>
                                    </div>
                                    <div class="pricing-list mb-30">
                                        <h5>features</h5>
                                        <ul>
                                            <li>3 Websites</li>
                                            <li>24/7 Live Support</li>
                                            <li>Easy Website Builder</li>
                                            <li>Weekly Backspace</li>
                                        </ul>
                                    </div>
                                    <div class="price mb-20">
                                        <h2>$19.99<span>/mo</span></h2>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="<?php echo esc_url(home_url('/')); ?>?page_id=45" class="btn"><span>+</span> Get started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="pricing-box mb-30">
                                    <div class="pricing-head">
                                        <h6>Business</h6>
                                        <div class="pricing-icon services-icon">
                                            <i class="flaticon-hosting"></i>
                                        </div>
                                    </div>
                                    <div class="pricing-list mb-30">
                                        <h5>features</h5>
                                        <ul>
                                            <li>3 Websites</li>
                                            <li>24/7 Live Support</li>
                                            <li>Easy Website Builder</li>
                                            <li>Weekly Backspace</li>
                                        </ul>
                                    </div>
                                    <div class="price mb-20">
                                        <h2>$29.99<span>/mo</span></h2>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="<?php echo esc_url(home_url('/')); ?>?page_id=45" class="btn"><span>+</span> Get started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-area-end -->

        <!-- exclusive-services-area -->
        <section class="exclusive-service es-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title white-title text-center mb-70">
                            <span class="sub-title">ALWAYS IN THE RIGHT</span>
                            <h2 class="title">Marketing For Everyone</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="services-item exclusive-services-item mb-30">
                            <div class="services-icon">
                                <i class="flaticon-support"></i>
                            </div>
                            <div class="services-content">
                                <h4><a href="<?php echo esc_url(home_url('/')); ?>?p=28">24/7 Expert Support</a></h4>
                                <p>Everything you need WordPress is Super
                                    powered Hosting, 24/7 Live Support
                                    Management tools</p>
                                <a href="<?php echo esc_url(home_url('/')); ?>?p=28" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="services-item exclusive-services-item mb-30">
                            <div class="services-icon">
                                <i class="flaticon-money-bag"></i>
                            </div>
                            <div class="services-content">
                                <h4><a href="<?php echo esc_url(home_url('/')); ?>?p=26">Money-back Guarantee</a></h4>
                                <p>Everything you need WordPress is Super
                                    powered Hosting, 24/7 Live Support
                                    Management tools</p>
                                <a href="<?php echo esc_url(home_url('/')); ?>?p=26" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="services-item exclusive-services-item mb-30">
                            <div class="services-icon">
                                <i class="flaticon-cloud-storage"></i>
                            </div>
                            <div class="services-content">
                                <h4><a href="<?php echo esc_url(home_url('/')); ?>?p=24">100% Uptime Guaranteed</a></h4>
                                <p>Everything you need WordPress is Super
                                    powered Hosting, 24/7 Live Support
                                    Management tools</p>
                                <a href="<?php echo esc_url(home_url('/')); ?>?p=24" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="exclusive-services-shape"><img src="<?php echo get_template_directory_uri();?>/img/images/services_circle_shape.png" alt=""></div>
        </section>
        <!-- exclusive-services-area-end -->

        <!-- faq-area -->
        <section class="faq-area pt-100 pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq-img">
                            <img src="<?php echo get_template_directory_uri();?>/img/images/faq_img.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title text-left mb-40">
                            <span class="sub-title">faq help</span>
                            <h2 class="title">Frequently Asked Questions</h2>
                        </div>
                        <div class="faq-wrap">
                            <div class="faq-set">
                                <a class="active" href="#">How do I get started with web hosting? <i
                                        class="fas fa-angle-down"></i></a>
                                <div class="content" style="display: block;">
                                    <p>Hosting services that fit your needs. Do you run a professional business personal
                                        WordPress website? Get the best deals
                                        with eliability and security. Select the best domain hosting plan for you from Shared,
                                        WordPress, VPS Hosting</p>
                                </div>
                            </div>
                            <div class="faq-set">
                                <a href="#">How do I get started with web hosting? <i class="fas fa-angle-up"></i></a>
                                <div class="content">
                                    <p>Hosting services that fit your needs. Do you run a professional business personal
                                        WordPress website? Get the best deals
                                        with eliability and security. Select the best domain hosting plan for you from Shared,
                                        WordPress, VPS Hosting</p>
                                </div>
                            </div>
                            <div class="faq-set">
                                <a href="#">Known as Questions and Answers? <i class="fas fa-angle-up"></i></a>
                                <div class="content">
                                    <p>Hosting services that fit your needs. Do you run a professional business personal
                                        WordPress website? Get the best deals
                                        with eliability and security. Select the best domain hosting plan for you from Shared,
                                        WordPress, VPS Hosting</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-area-end -->

        <!-- domain-search-area -->
        <div class="domain-search-area domain-search-two pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="domain-search-inner mt-0">
                            <div class="domain-search-img">
                                <img src="<?php echo get_template_directory_uri();?>/img/images/domain_search_img.png" alt="">
                            </div>
                            <div class="domain-search-form-wrap">
                                <form action="#" class="domain-search-form">
                                    <div class="form-grp">
                                        <input type="text" placeholder="Search Your Domain">
                                    </div>
                                    <select name="name" class="selected">
                                        <option value="">. studio</option>
                                        <option value="">. com</option>
                                        <option value="">. me</option>
                                        <option value="">. net</option>
                                        <option value="">. info</option>
                                        <option value="">. biz</option>
                                    </select>
                                    <button class="btn">Search...</button>
                                </form>
                                <div class="domain-list">
                                    <ul>
                                        <li>.com<span>$6.39</span></li>
                                        <li>.me<span>$3.49</span></li>
                                        <li>.net<span>$8.39</span></li>
                                        <li>.info<span>$6.39</span></li>
                                        <li>.studio<span>$6.39</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- domain-search-area-end -->

    </main>
    <!-- main-area-end -->
<?php
    get_footer();
?>