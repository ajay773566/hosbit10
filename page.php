<?php
/**
 * The Template for displaying all single posts
 */
 $hosbit_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
    while (have_posts()): the_post();
?>
<main>
  <!-- breadcrumb-area-start -->
  <?php if(isset($hosbit_redux_demo['services_details_banner_image']['url']) && $hosbit_redux_demo['services_details_banner_image']['url'] != ''){?>
  <div class="breadcrumb-area pt-230 pb-240" style="background-image:url(<?php echo esc_url($hosbit_redux_demo['services_details_banner_image']['url']); ?>)">
  <?php }else{?> 
  <div class="breadcrumb-area pt-230 pb-240" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/img/bg/bg-10.jpg)">
  <?php } ?>
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="breadcrumb-text text-center">
                      <h1><?php the_title(); ?></h1>
                      <ul class="breadcrumb-menu">
                          <li>  <a href="<?php echo esc_url(home_url('/')); ?>">
                                <?php if(isset($hosbit_redux_demo['home_text'])){?>
                                <?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['home_text']));?>
                                <?php }else{?>
                                <?php echo esc_html__( 'Home', 'hosbit' );
                                }
                                ?></a>
                          </li>
                          <li><span><?php the_title(); ?></span>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- breadcrumb-area-end -->  
<!-- blog-area start -->
<div class="blog-area pt-120 pb-120">
    <div class="container">
        <div class="row">
          <div class="col-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            <div class="blog-wrapper blog-details">
              <div class="blog-thumb">
                <a href="<?php the_permalink();?>">
                  <?php if ( has_post_thumbnail() ) { ?>
                  <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"  />
                  <?php } ?>
                </a>
              </div>
              <div class="blog-content">
                  <?php the_content(); ?>
                  <?php wp_link_pages( array(
                  'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'hosbit' ),
                  'after'       => '</div>',
                  'link_before' => '<span class="page-number">',
                  'link_after'  => '</span>',
                  ) ); ?>
              </div>
              <div class="next-prev-post clearfix">
                <?php previous_post_link('%link',wp_specialchars_decode(esc_html__( '<i class="ion-arrow-left-c"></i> Previous Post','hosbit'),ENT_QUOTES), true); ?>
                <div class='right'><?php next_post_link('%link',wp_specialchars_decode(esc_html__('Next Post <i class="ion-arrow-right-c"></i>','hosbit'),ENT_QUOTES), true); ?></div>
              </div>
             <?php           
                if ( comments_open() || get_comments_number() ) {
                  comments_template();
                }
                ?>
            </div>        
          </div>
    </div>
  </div>
</div>
</main>
  <?php endwhile; ?>

  <!-- blog-area end -->
 <?php get_footer();?>