<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<?php $hosbit_redux_demo = get_option('redux_demo'); ?>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if(isset($hosbit_redux_demo['favicon']['url'])){ ?>
        <link rel="shortcut icon" href="<?php echo esc_url($hosbit_redux_demo['favicon']['url']); ?>">
    <?php }?>
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
        ?>
    <?php }?>
    <?php wp_head(); ?>
    </head>
    <body id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader-wrapper">
                <div class="spinner"></div>
            </div>
        </div>
        <!-- Preloader-end -->

        <!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div class="header-top-wrap">
                <div class="container custom-container">
                    <div class="row align-items-center">
                        <div class="col-md-4 d-none d-md-block">
                            <div class="header-top-offer">
                                <?php if(isset($hosbit_redux_demo['header_text']) && $hosbit_redux_demo['header_text'] != ''){?>
                                <p><?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['header_text']));?></p>
                                <?php } ?>
                                <?php if(isset($hosbit_redux_demo['countdown']) && $hosbit_redux_demo['countdown'] != ''){?>
                                <span class="coming-time" data-countdown="<?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['countdown']));?>"></span>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="header-top-right-list">
                                <ul>
                                    <?php if(isset($hosbit_redux_demo['header_phone']) && $hosbit_redux_demo['header_phone'] != ''){?>
                                    <li><i class="fas fa-headphones"></i><a href="<?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['link_phone']));?>"><?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['header_phone']));?></a></li>
                                    <?php } ?>
                                    <?php if(isset($hosbit_redux_demo['header_email']) && $hosbit_redux_demo['header_email'] != ''){?>
                                    <li><i class="far fa-envelope"></i><a href="<?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['link_email']));?>"><?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['header_email']));?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="<?php echo esc_url(home_url('/')); ?>">
                                        <?php if(isset($hosbit_redux_demo['logo']['url']) && $hosbit_redux_demo['logo']['url'] != ''){ ?>
                                            <img src="<?php echo esc_url($hosbit_redux_demo['logo']['url']); ?>" alt="Logo">
                                        <?php }else{ ?>
                                            <img src="<?php echo get_template_directory_uri();?>/img/logo/logo.png" alt="Logo">
                                        <?php } ?>
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <?php 
                                          wp_nav_menu( 
                                          array( 
                                                'theme_location' => 'primary',
                                                'container' => '',
                                                'menu_class' => '', 
                                                'menu_id' => '',
                                                'menu'            => '',
                                                'container_class' => '',
                                                'container_id'    => '',
                                                'echo'            => true,
                                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                                'walker'            => new hosbit_wp_bootstrap_navwalker(),
                                                'before'          => '',
                                                'after'           => '',
                                                'link_before'     => '',
                                                'link_after'      => '',
                                                'items_wrap'      => '<ul  class="navigation %2$s">%3$s</ul>',
                                                'depth'           => 0,        
                                            )
                                         ); ?>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                            <?php if(isset($hosbit_redux_demo['header_button']) && $hosbit_redux_demo['header_button'] != ''){?>
                                            <li class="header-btn"><a href="<?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['header_link_button']));?>" class="btn"><i class="fas fa-unlock-alt"></i> <?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['header_button']));?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="menu-backdrop"></div>
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo">
                                        <a href="<?php echo esc_url(home_url('/')); ?>">
                                        <?php if(isset($hosbit_redux_demo['sidebar_logo']['url']) && $hosbit_redux_demo['sidebar_logo']['url'] != ''){ ?>
                                            <img src="<?php echo esc_url($hosbit_redux_demo['sidebar_logo']['url']); ?>" alt="Logo">
                                        <?php }else{ ?>
                                            <img src="<?php echo get_template_directory_uri();?>/img/logo/w_logo.png" alt="Logo">
                                        <?php } ?>
                                        </a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                </nav>
                            </div>
                            <!-- End Mobile Menu -->
                            <!-- Modal Search -->
                            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form>
                                            <input type="search" name="s" placeholder="Search here...">
                                            <button><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->