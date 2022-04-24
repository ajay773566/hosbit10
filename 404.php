<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
    $hosbit_redux_demo = get_option('redux_demo');
    get_header(); 
?> 
<main>

    <!-- breadcrumb-area -->
    <?php if(isset($hosbit_redux_demo['404_image']['url']) && $hosbit_redux_demo['404_image']['url'] != ''){?>
    <section class="breadcrumb-area error-page breadcrumb-bg" data-background="<?php echo esc_url($hosbit_redux_demo['404_image']['url']); ?>">
    <?php }else{?> 
    <section class="breadcrumb-area error-page breadcrumb-bg" data-background="<?php echo get_template_directory_uri();?>/img/bg/breadcrumb_bg.jpg">
    <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2><?php if(isset($hosbit_redux_demo['404_title'])){?>
                            <?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['404_title']));?>
                            <?php }else{?>
                            <?php echo esc_html__( 'Error Page', 'hosbit' );
                            }
                            ?>
                        </h2>
                        <h3>
                          <?php if(isset($hosbit_redux_demo['404_subtitle'])){?>
                          <?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['404_subtitle']));?>
                          <?php }else{?>
                          <?php echo esc_html__( 'Oops! The Page not found.', 'hosbit' );
                          }
                          ?>
                        </h3>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn">
                          <span></span>
                          <?php if(isset($hosbit_redux_demo['404_button'])){?>
                          <?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['404_button']));?>
                          <?php }else{?>
                          <?php echo esc_html__( 'Back To Home', 'hosbit' );
                          }
                          ?>
                          <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape alltuchtopdown"><img src="<?php echo get_template_directory_uri();?>/img/images/breadcrumb_roket.png" alt=""></div>
    </section>
    <!-- breadcrumb-area-end -->
</main>
<?php
  get_footer();
?> 