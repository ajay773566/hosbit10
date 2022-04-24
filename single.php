<?php
   $hosbit_redux_demo = get_option('redux_demo');
   get_header(); 
?>
<?php 
    while (have_posts()): the_post();
?>
<?php $single_facebook = get_post_meta(get_the_ID(),'_cmb_single_facebook', true); ?>
<?php $single_twitter = get_post_meta(get_the_ID(),'_cmb_single_twitter', true); ?>
<?php $single_pinterest = get_post_meta(get_the_ID(),'_cmb_single_pinterest', true); ?>
<?php $single_linkedin = get_post_meta(get_the_ID(),'_cmb_single_linkedin', true); ?>
<?php $single_snapchat = get_post_meta(get_the_ID(),'_cmb_single_snapchat', true); ?>
<?php $facebook_user = get_the_author_meta('facebook');?>
<?php $twitter_user = get_the_author_meta('twitter');?>
<?php $instagram_user = get_the_author_meta('instagram');?>
<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <?php if(isset($hosbit_redux_demo['blog_details_banner_image']['url']) && $hosbit_redux_demo['blog_details_banner_image']['url'] != ''){?>
    <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo esc_url($hosbit_redux_demo['blog_details_banner_image']['url']); ?>">
    <?php }else{?> 
    <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo get_template_directory_uri();?>/img/bg/breadcrumb_bg.jpg">
    <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2><?php if(isset($hosbit_redux_demo['blog_details_title'])){?>
                            <?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['blog_details_title']));?>
                            <?php }else{?>
                            <?php echo esc_html__( 'news details', 'hosbit' );}?>
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
                                  <?php if(isset($hosbit_redux_demo['blog_details_title'])){?>
                                  <?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['blog_details_title']));?>
                                  <?php }else{?>
                                  <?php echo esc_html__( 'news details', 'hosbit' );}?>
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

    <!-- blog-details-area -->
    <section class="blog-details-area pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="blog--post">
                        <?php if ( has_post_thumbnail() ) { ?>
                        <div class="blog--post--thumb position-relative mb-35">
                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
                            <span class="blog-post-date"><?php the_time(get_option( 'date_format' ));?></span>
                        </div>
                        <?php } ?>
                        <div class="blog--post--content blog-details-content">
                            <h4><?php the_title(); ?></h4>
                            <div class="blog--post--meta">
                                <ul>
                                    <li><i class="far fa-user"></i> <?php the_author_posts_link(); ?></a></li>
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
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                            <div class="blog--post--bottom">
                                <div class="related-tag">
                                    <h5><?php if(isset($hosbit_redux_demo['blog_tags'])){?>
                                        <?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['blog_tags']));?>
                                        <?php }else{?>
                                        <?php echo esc_html__( 'Releted Tags : ', 'hosbit' );
                                        }
                                        ?></h5>
                                    <ul>
                                        <?php echo get_the_tag_list('<li>','</li><li>','</li>'); ?>
                                    </ul>
                                </div>
                                <div class="social-share">
                                    <h5><?php if(isset($hosbit_redux_demo['blog_share'])){?>
                                        <?php echo wp_specialchars_decode(esc_attr($hosbit_redux_demo['blog_share']));?>
                                        <?php }else{?>
                                        <?php echo esc_html__( 'Social Share: ', 'hosbit' );
                                        }
                                        ?> 
                                    </h5>
                                    <div class="blog-post-share">
                                        <ul>
                                          <?php if($single_facebook !='') { ?>
                                          <li><a href="<?php echo esc_url($single_facebook); ?>"><i class="fab fa-facebook-square"></i></a></li>
                                          <?php } ?>
                                          <?php if($single_twitter !='') { ?>
                                          <li><a href="<?php echo esc_url($single_twitter); ?>"><i class="fab fa-twitter-square"></i></a></li>
                                          <?php } ?>
                                          <?php if($single_snapchat !='') { ?>
                                          <li><a href="<?php echo esc_url($single_snapchat); ?>"><i class="fab fa-snapchat-square"></i></a></li>
                                          <?php } ?>
                                          <?php if($single_pinterest !='') { ?>
                                          <li><a href="<?php echo esc_url($single_pinterest); ?>"><i class="fab fa-pinterest-square"></i></a></li>
                                          <?php } ?>
                                          <?php if($single_linkedin !='') { ?>
                                          <li><a href="<?php echo esc_url($single_linkedin); ?>"><i class="fab fa-linkedin"></i></a></li>
                                          <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="avatar-post mt-50 mb-90">
                        <div class="post-avatar-img">
                            <?php echo get_avatar(get_the_author_meta('user_email'),$size='166', $default='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=166' );?>
                        </div>
                        <div class="post-avatar-content">
                            <span>Written by</span>
                            <h5><?php the_author_posts_link(); ?></h5>
                            <p><?php echo get_the_author_meta('description');?></p>
                            <ul>
                              <?php if($facebook_user !='') { ?>
                              <li><a href="<?php echo esc_url($facebook_user); ?>"><i class="fab fa-facebook-f"></i></a></li>
                              <?php } ?>
                              <?php if($twitter_user !='') { ?>
                              <li><a href="<?php echo esc_url($twitter_user); ?>"><i class="fab fa-twitter"></i></a></li>
                              <?php } ?>
                              <?php if($instagram_user !='') { ?>
                              <li><a href="<?php echo esc_url($instagram_user); ?>"><i class="fab fa-instagram"></i></a></li>
                              <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <?php comments_template(); ?>
                </div>
                <div class="col-lg-4 col-md-10">
                    <aside class="blog-sidebar">
                        <?php get_sidebar();?>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->

</main>
<!-- main-area-end -->
<?php endwhile; ?>
<?php
    get_footer();
?>