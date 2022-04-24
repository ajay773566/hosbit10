<?php
/*
 * Template Name: Home 2
 * Description: A Page Template with a Page Builder design.
 */
$hosbit_redux_demo = get_option('redux_demo');
    get_header('2'); ?>
	<main class="home2">
        <?php if (have_posts()){ ?>
             <?php while (have_posts()) : the_post()?>
                <?php the_content(); ?>
             <?php endwhile; ?>
          <?php }else {
           echo esc_html__( 'Page Canvas For Page Builder', 'hosbit' );
        }?>
    </main>
<?php
    get_footer('2');
?>