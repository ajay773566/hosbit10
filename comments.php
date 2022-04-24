<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

  <?php if ( have_comments() ) : ?>
      <div class="blog-comment mb-60">
        <h3 class="widget-title"><?php comments_number( esc_html__('0 Comments', 'hosbit'), esc_html__('1 Comment', 'hosbit'), esc_html__('% Comments', 'hosbit') ); ?></h3>
        <ul>
          <?php wp_list_comments('callback=hosbit_theme_comment'); ?> 
        </ul>
      </div>
          <!-- START PAGINATION -->
      <?php
          if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
      ?>
      <div class="pagination_area">
           <nav>
                <ul class="pagination">
                     <li> <?php paginate_comments_links( 
                    array(
                    'prev_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-left"></i>', 'hosbit' ),ENT_QUOTES),
                    'next_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-right"></i>', 'hosbit' ),ENT_QUOTES),
                    ));  ?>
                      </li>
                </ul>
           </nav>
      </div>
    <?php endif; ?>
    <!-- END PAGINATION --> 
  <?php endif; ?>                    
  <?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => 'contacts-form',        
                'class_form' => 'conatct-post-form',                         
                'title_reply'=> esc_html__( 'Leave a comment', 'hosbit' ),
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' =>   ' <div class ="row"> <div class="col-md-6">
                                      <input type="text" name="author" placeholder="'.esc_attr__('Your Name*', 'hosbit').' " required="required" data-error="Name is required.">
                                    </div>',
                    'email' =>    ' <div class="col-md-6">
                                      <input type="email" name="email" placeholder="'.esc_attr__('Your Email*', 'hosbit').'" required="required" data-error="Email is required.">
                                    </div>
                                    </div>',

                ) ),   
                'comment_field' => '<div class ="row"><div class = "col-md-12">
                                      <textarea name="comment" id="comment-message" '.$aria_req.' placeholder="'.esc_attr__('Write a comment...', 'hosbit').'" required="required" data-error="Please,leave us a message."></textarea>
                                    </div></div>',                
                'label_submit' => esc_html__( 'Post a comment', 'hosbit' ),
                'comment_notes_before' => '',
                'comment_notes_after' => '',               
        )
  ?>

  <?php if ( comments_open() ) : ?>
    <?php comment_form($comment_args); ?>
  <?php endif; ?> 