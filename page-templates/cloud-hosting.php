<?php
/*
 * Template Name: CLoud Hosting
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
                                <h2>Cloud Hosting</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Cloud Hosting</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-shape alltuchtopdown"><img src="<?php echo get_template_directory_uri();?>/img/images/breadcrumb_roket.png" alt=""></div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- cloud-hosting-area -->
            <section class="cloud-hosting-area pt-100 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span class="sub-title">ALWAYS IN THE RIGHT</span>
                                <h2 class="title">Marketing For Everyone</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="faq-img">
                                <img src="<?php echo get_template_directory_uri();?>/img/images/faq_img.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cloud-hosting-list">
                                <ul>
                                    <li>
                                        <div class="cloud-hosting-icon">
                                            <img src="<?php echo get_template_directory_uri();?>/img/icon/cloud_hosting_icon01.png" alt="">
                                        </div>
                                        <div class="cloud-hosting-content">
                                            <h4>Flexible, Easy Control Panel</h4>
                                            <p>Hosting services that fit your needs. Do you run a profes- sional business personal WordPress website? Get the best deals
                                            with eliability and security.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cloud-hosting-icon">
                                            <img src="<?php echo get_template_directory_uri();?>/img/icon/cloud_hosting_icon02.png" alt="">
                                        </div>
                                        <div class="cloud-hosting-content">
                                            <h4>Search Engine Optimization</h4>
                                            <p>Hosting services that fit your needs. Do you run a profes- sional business personal WordPress website? Get the best deals
                                            with eliability and security.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cloud-hosting-icon">
                                            <img src="<?php echo get_template_directory_uri();?>/img/icon/cloud_hosting_icon03.png" alt="">
                                        </div>
                                        <div class="cloud-hosting-content">
                                            <h4>Undeterred Bandwidth</h4>
                                            <p>Hosting services that fit your needs. Do you run a profes- sional business personal WordPress website? Get the best deals
                                            with eliability and security.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- cloud-hosting-area-end -->

            <!-- package-pricing-area -->
            <section class="package-pricing-area package-pricing-bg package-pricing-2" data-background="<?php echo get_template_directory_uri();?>/img/bg/pack_pricing_bg.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span class="sub-title">our pricing plans</span>
                                <h2 class="title">Pricing Package Comparison</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="package-pricing-box">
                                <table class="table table-hover table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="pack-pricing-tab">
                                                <div class="pack-pricing-head">
                                                    <div class="icon"><i class="flaticon-sparkler"></i></div>
                                                    <div class="pak-price-box-title">Make Your Flexible Pricing Plan</div>
                                                    <div class="pricing-tab">
                                                        <span class="tab-btn monthly_tab_title">Monthly</span>
                                                        <span class="pricing-tab-switcher"></span>
                                                        <span class="tab-btn annual_tab_title">Yearly</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <th scope="col" class="pack-price-info pricing-amount">
                                                <span class="pack-sub-title">Basic</span>
                                                <span class="pack-price-offer">Limited time offer</span>
                                                <div class="price annual_price">$29.95<span>/mo</span></div>
                                                <div class="price monthly_price">$19.95<span>/mo</span></div>
                                                <a href="<?php echo esc_url(home_url('/')); ?>?page_id=47" class="btn pack-price-btn"><span>+</span>purchase now</a>
                                            </th>
                                            <th scope="col" class="pack-price-info pricing-amount">
                                                <span class="pack-sub-title">Standard</span>
                                                <span class="pack-price-offer">Limited time offer</span>
                                                <div class="price annual_price">$59.95<span>/mo</span></div>
                                                <div class="price monthly_price">$39.95<span>/mo</span></div>
                                                <a href="<?php echo esc_url(home_url('/')); ?>?page_id=47" class="btn pack-price-btn"><span>+</span>purchase now</a>
                                            </th>
                                            <th scope="col" class="pack-price-info pricing-amount">
                                                <span class="pack-sub-title">Ultimate</span>
                                                <span class="pack-price-offer">Limited time offer</span>
                                                <div class="price annual_price">$199.95<span>/mo</span></div>
                                                <div class="price monthly_price">$99.95<span>/mo</span></div>
                                                <a href="<?php echo esc_url(home_url('/')); ?>?page_id=47" class="btn pack-price-btn"><span>+</span>purchase now</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="col">Website</th>
                                            <td>1 Website</td>
                                            <td>1 Website</td>
                                            <td>1 Website</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address</th>
                                            <td>1 Email</td>
                                            <td>1 Email</td>
                                            <td>1 Email</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Limited Bandwidth</th>
                                            <td>(100 GB)</td>
                                            <td>(100 GB)</td>
                                            <td>(100 GB)</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Certificate</th>
                                            <td>Free SSL</td>
                                            <td>Free SSL</td>
                                            <td>Free SSL</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">support</th>
                                            <td>24/7 support</td>
                                            <td>24/7 support</td>
                                            <td>24/7 support</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Speed Cache</th>
                                            <td>LiteSpeed Cache</td>
                                            <td>LiteSpeed Cache</td>
                                            <td>LiteSpeed Cache</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Guarantee</th>
                                            <td>99.9% Uptime</td>
                                            <td>99.9% Uptime</td>
                                            <td>99.9% Uptime</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Management</th>
                                            <td>DNS</td>
                                            <td>DNS</td>
                                            <td>DNS</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Backups</th>
                                            <td>Daily</td>
                                            <td>Daily</td>
                                            <td>Daily</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- package-pricing-area-end -->

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

            <!-- testimonial-area -->
            <section class="testimonial-area gray-dark-bg testimonial-bg pt-100 pb-100" data-background="<?php echo get_template_directory_uri();?>/img/bg/testimonial_bg.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span class="sub-title">customer testimonials</span>
                                <h2 class="title">Client’s Review for Happy Customer?</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row testimonial-active">
                        <div class="col-xl-6">
                            <div class="testimonial-item">
                                <div class="testimonial-thumb">
                                    <img src="<?php echo get_template_directory_uri();?>/img/images/testimonial_avatar01.png" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <h5>Thomas Harrison</h5>
                                    <p><span>Fully-Managed SSD</span> Shared Hosting optimal solution for fast reliaunkwn printer.</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testi-quote">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial-item">
                                <div class="testimonial-thumb">
                                    <img src="<?php echo get_template_directory_uri();?>/img/images/testimonial_avatar02.png" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <h5>Thomas Harrison</h5>
                                    <p><span>Fully-Managed SSD</span> Shared Hosting optimal solution for fast reliaunkwn printer.</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testi-quote">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial-item">
                                <div class="testimonial-thumb">
                                    <img src="<?php echo get_template_directory_uri();?>/img/images/testimonial_avatar01.png" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <h5>Donald Kiran</h5>
                                    <p><span>Fully-Managed SSD</span> Shared Hosting optimal solution for fast reliaunkwn printer.</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testi-quote">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

        </main>
        <!-- main-area-end -->

<?php
    get_footer();
?>