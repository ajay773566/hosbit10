<?php
     $hosbit_redux_demo = get_option('redux_demo');
     get_header(); 
?>
<main>

  <!-- breadcrumb-area -->
  <?php if(isset($hosbit_redux_demo['blog_banner_image']['url']) && $hosbit_redux_demo['blog_banner_image']['url'] != ''){?>
  <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo esc_url($hosbit_redux_demo['blog_banner_image']['url']); ?>">
  <?php }else{?> 
  <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo get_template_directory_uri();?>/img/bg/breadcrumb_bg.jpg">
  <?php } ?>
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb-content text-center">
                      <h2><?php printf( esc_html__( 'Tag : %s', 'hosbit' ), single_tag_title( '', false ) ); ?>
                      </h2>
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                <?php if(isset($hosbit_redux_demo['home_text'])){?>
                                <?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['home_text']));?>
                                <?php }else{?>
                                <?php echo esc_html__( 'Home', 'hosbit' );}?>
                                </a>
                              </li>
                              <li class="breadcrumb-item active" aria-current="page">
                                <?php echo esc_html__( 'Tags', 'hosbit' );?>
                              </li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
      <div class="breadcrumb-shape alltuchtopdown"><img src="<?php echo get_template_directory_uri();?>/img/images/breadcrumb_roket.png" alt=""></div>
  </section>
  <!-- breadcrumb-area-end -->
  <!-- Blog -->
  <section class="blog-area pt-100 pb-100">
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8">
            
            <?php  
            while (have_posts()): the_post(); ?>
            <?php $single_facebook = get_post_meta(get_the_ID(),'_cmb_single_facebook', true); ?>
            <?php $single_twitter = get_post_meta(get_the_ID(),'_cmb_single_twitter', true); ?>
            <?php $single_pinterest = get_post_meta(get_the_ID(),'_cmb_single_pinterest', true); ?>
            <div class="blog--post mb-60">
                <div class="blog--post--thumb position-relative mb-35">
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt=""></a>
                    <span class="blog-post-date"><?php the_time(get_option( 'date_format' ));?></span>
                </div>
                <div class="blog--post--content">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="blog--post--meta">
                        <ul>
                            <li><i class="far fa-user"></i>By <?php the_author_posts_link(); ?></a></li>
                            <li><i class="far fa-comments"></i><?php comments_number( esc_html__('0 Comments' , 'hosbit') , esc_html__('1 Comment' , 'hosbit' ), esc_html__('% Comments' , 'hosbit')); ?></li>
                            <li><i class="fas fa-tags"></i>
                              <?php 
                                // Show all category for post
                                $i = 1; foreach((get_the_category()) as $category) { 
                                if ($i == 1){echo ''; }else {echo ' , ';}
                                    echo '<a href="'.get_category_link($category->cat_ID).'" title="'.$category->category_nicename . '" >'.$category->category_nicename . ' '.'</a>'; 
                                    $i++;
                               } ?>
                            </li>
                        </ul>
                    </div>
                    <p><?php if(isset($hosbit_redux_demo['blog_excerpt'])){?>
                      <?php echo esc_attr(hosbit_excerpt($hosbit_redux_demo['blog_excerpt'])); ?>
                      <?php }else{?>
                      <?php echo esc_attr(hosbit_excerpt(40)); 
                      }
                      ?>
                    </p>
                    <div class="blog--post--bottom">
                        <a href="<?php the_permalink(); ?>">
                          <?php if(isset($hosbit_redux_demo['read_more'])){?>
                          <?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['read_more']));?>
                          <?php }else{?>
                          <?php echo esc_html__( 'Read More', 'hosbit' );
                          }
                          ?> <span>+</span>
                        </a>
                        <div class="blog-post-share">
                          <?php if($single_facebook !='') { ?>
                          <a href="<?php echo esc_url($single_facebook); ?>"><i class="fab fa-facebook-square"></i></a>
                          <?php } ?>
                          <?php if($single_twitter !='') { ?>
                          <a href="<?php echo esc_url($single_twitter); ?>"><i class="fab fa-twitter-square"></i></a>
                          <?php } ?>
                          <?php if($single_pinterest !='') { ?>
                          <a href="<?php echo esc_url($single_pinterest); ?>"><i class="fab fa-pinterest-square"></i></a>
                          <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <div class="pagination-wrap mt-50">
                <?php hosbit_pagination();?>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-10">
          <aside class="blog-sidebar">
            <?php get_sidebar(); ?>
          </aside>
        </div>
      </div>
    </div>
  </div>
  <!-- Blog End -->

  </main>
  <!-- Main End -->
<?php
    get_footer();
?>