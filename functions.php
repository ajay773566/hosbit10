<?php
$hosbit_redux_demo = get_option('redux_demo');

//Custom fields:
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/framework/class-ocdi-importer.php';

//Theme Set up:
function hosbit_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
  remove_filter ('the_content', 'wpautop');
	add_theme_support( 'custom-background' );
	$lang = get_template_directory_uri() . '/languages';
  load_theme_textdomain('hosbit', $lang);
  add_theme_support( 'post-thumbnails' );
  // Adds RSS feed links to <head> for posts and comments.
  add_theme_support( 'automatic-feed-links' );
  // Switches default core markup for search form, comment form, and comments
  // to output valid HTML5.
  add_theme_support( "title-tag" );
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary' =>  esc_html__( 'Primary Navigation Menu.', 'hosbit' ),
	) );
    // This theme uses its own gallery styles.
}
add_action( 'after_setup_theme', 'hosbit_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;

function hosbit_theme_scripts_styles() {
	$hosbit_redux_demo = get_option('redux_demo');
	$protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.min.css');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/css/magnific-popup.css');
    wp_enqueue_style( 'fontawesome-all', get_template_directory_uri().'/css/fontawesome-all.min.css');
    wp_enqueue_style( 'nice-select', get_template_directory_uri().'/css/nice-select.css');
    wp_enqueue_style( 'hosbit-flaticon', get_template_directory_uri().'/css/flaticon.css');
    wp_enqueue_style( 'odometer', get_template_directory_uri().'/css/odometer.css');
    wp_enqueue_style( 'slick', get_template_directory_uri().'/css/slick.css');
    wp_enqueue_style( 'hosbit-default', get_template_directory_uri().'/css/default.css');
    wp_enqueue_style( 'hosbit-style', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style( 'hosbit-responsive', get_template_directory_uri().'/css/responsive.css');
    wp_enqueue_style( 'hosbit-css', get_stylesheet_uri(), array(), '2020-12-29' );

    if(isset($hosbit_redux_demo['chosen-color']) && $hosbit_redux_demo['chosen-color']==1){
    wp_enqueue_style( 'color', get_template_directory_uri().'/framework/color.php');
    }    
    if(isset($hosbit_redux_demo['support-rtl']) && $hosbit_redux_demo['support-rtl']==1){
    wp_enqueue_style( 'support-rtl', get_template_directory_uri().'/rtl.css');
    }
    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
  //Javascript
    wp_enqueue_script("jquery", get_template_directory_uri()."/js/vendor/jquery-3.5.0.min.js",array(),false,true);
    wp_enqueue_script("popper", get_template_directory_uri()."/js/popper.min.js",array(),false,true);   
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("isotope-pkgd", get_template_directory_uri()."/js/isotope.pkgd.min.js",array(),false,true);
    wp_enqueue_script("imagesloaded-pkgd", get_template_directory_uri()."/js/imagesloaded.pkgd.min.js",array(),false,true);
    wp_enqueue_script("jquery-magnific-popup", get_template_directory_uri()."/js/jquery.magnific-popup.min.js",array(),false,true);
    wp_enqueue_script("jquery-nice-select", get_template_directory_uri()."/js/jquery.nice-select.min.js",array(),false,true);
    wp_enqueue_script("jquery-odometer", get_template_directory_uri()."/js/jquery.odometer.min.js",array(),false,true);
    wp_enqueue_script("jquery-countdown", get_template_directory_uri()."/js/jquery.countdown.min.js",array(),false,true);
    wp_enqueue_script("jquery-appear", get_template_directory_uri()."/js/jquery.appear.js",array(),false,true);
    wp_enqueue_script("slick", get_template_directory_uri()."/js/slick.min.js",array(),false,true);
    wp_enqueue_script("hosbit-ajax-form", get_template_directory_uri()."/js/ajax-form.js",array(),false,true);
    wp_enqueue_script("wow", get_template_directory_uri()."/js/wow.min.js",array(),false,true);
    wp_enqueue_script("hosbit-plugins", get_template_directory_uri()."/js/plugins.js",array(),false,true);
    wp_enqueue_script("hosbit-search-domain", get_template_directory_uri()."/js/search-domain.js",array(),false,true);
    wp_enqueue_script("hosbit-main", get_template_directory_uri()."/js/main.js",array(),false,true);
}
    
add_action( 'wp_enqueue_scripts', 'hosbit_theme_scripts_styles' );
//Custom Excerpt Function
function hosbit_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}  

add_filter('user_contactmethods', 'my_user_contactmethods');  
               
function my_user_contactmethods($user_contactmethods){  
  
  $user_contactmethods['facebook'] = 'Facebook Link';  
  $user_contactmethods['twitter'] = 'Twitter Link';
  $user_contactmethods['instagram'] = 'Instagram Link';  
  
  return $user_contactmethods;  
} 

// Widget Sidebar
function hosbit_widgets_init() {
   register_sidebar( array(
    'name'          => esc_html__( 'Primary Sidebar', 'hosbit' ),
    'id'            => 'sidebar-1',        
        'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'hosbit' ),        
        'before_widget' => '<div id="%1$s" class="widget mb-30  %2$s" >',        
        'after_widget'  => '</div>',        
        'before_title'  => '<h3 class="widget-title">',        
        'after_title'   => '</h3>'
    ) );

    register_sidebar( array(
    'name'          => esc_html__( 'Footer One Widget 1', 'hosbit' ),
    'id'            => 'footer-area-1',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'hosbit' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' <div class="fw-title mb-25"><h4 class="title">',
    'after_title'   => ' </h4></div>',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer One Widget 2', 'hosbit' ),
    'id'            => 'footer-area-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'hosbit' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' <div class="fw-title mb-25"><h4 class="title">',
    'after_title'   => ' </h4></div>',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer One Widget 3', 'hosbit' ),
    'id'            => 'footer-area-3',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'hosbit' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' <div class="fw-title mb-25"><h4 class="title">',
    'after_title'   => ' </h4></div>',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer One Widget 4', 'hosbit' ),
    'id'            => 'footer-area-4',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'hosbit' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' <div class="fw-title mb-25"><h4 class="title">',
    'after_title'   => ' </h4></div>',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Two Widget 1', 'hosbit' ),
    'id'            => 'footer-area-11',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'hosbit' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' <div class="fw-title fw-title-two mb-25"><h4 class="title">',
    'after_title'   => ' </h4></div>',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Two Widget 2', 'hosbit' ),
    'id'            => 'footer-area-22',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'hosbit' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' <div class="fw-title fw-title-two mb-25"><h4 class="title">',
    'after_title'   => ' </h4></div>',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Two Widget 3', 'hosbit' ),
    'id'            => 'footer-area-33',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'hosbit' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' <div class="fw-title fw-title-two mb-25"><h4 class="title">',
    'after_title'   => ' </h4></div>',
  ) );
}
add_action( 'widgets_init', 'hosbit_widgets_init' );

//function tag widgets
function hosbit_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'hosbit_tag_cloud_widget' );
function hosbit_excerpt() {
  $hosbit_redux_demo = get_option('redux_demo');
  if(isset($hosbit_redux_demo['blog_excerpt'])){
    $limit = $hosbit_redux_demo['blog_excerpt'];
  }else{
    $limit = 30;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function hosbit2_excerpt() {
  $hosbit_redux_demo = get_option('redux_demo');
  if(isset($hosbit_redux_demo['blog_excerpt_2'])){
    $limit = $hosbit_redux_demo['blog_excerpt_2'];
  }else{
    $limit = 30;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function hosbit_pagination($pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
    'base'      => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
    'format'    => '',
    'current'     => max( 1, get_query_var('paged') ),
    'total'     => $pages,
    'prev_text' => wp_specialchars_decode(esc_html__( '<i class = "fa fa-angle-double-left"></i>', 'hosbit' ),ENT_QUOTES),
    'next_text' => wp_specialchars_decode(esc_html__( '<i class = "fa fa-angle-double-right"></i>', 'hosbit' ),ENT_QUOTES),
    'type'      => 'list',
    'end_size'    => 3,
    'mid_size'    => 3
);
    $return =  paginate_links( $pagination );
  echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );
}

function hosbit_search_form( $form ) {
    $form = '
    <form  method="get" action="' . esc_url(home_url('/')) . '"> 
      <input type="text"  placeholder="'.esc_attr__('Search', 'hosbit').'" value="' . get_search_query() . '" name="s" > 
      <button type="submit"><span class="icon fa fa-search"></span></button>
    </form>
  	';
    return $form;
}
add_filter( 'get_search_form', 'hosbit_search_form' );
//Custom comment List:

 
// Comment Form
function hosbit_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>
    <?php if(get_avatar($comment,$size='98' )!=''){?>
    <li>
        <div class="single-comment">
            <div class="comment-avatar-img">
                <?php echo get_avatar($comment,$size='98' ); ?>
            </div>
            <div class="comment-text">
                <div class="comment-avatar-info">
                    <h5><?php printf( get_comment_author_link()) ?> <i class="far fa-clock"></i><span class="comment-date"><?php the_time(get_option( 'date_format' ));?></span></h5>
                    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
                <?php comment_text() ?>
            </div>
        </div>
    </li>
    <?php }else{?>
    <li>
        <div class="single-comment">
            <div class="comment-text">
                <div class="comment-avatar-info">
                    <h5><?php printf( get_comment_author_link()) ?> <span class="comment-date"><?php the_time(get_option( 'date_format' ));?></span></h5>
                    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
                <?php comment_text() ?>
            </div>
        </div>
    </li>
<?php }?>

<?php
}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'hosbit_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 

 
function hosbit_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
      array(
            'name'      => esc_html__( 'One Click Demo Import', 'hosbit' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Classic Editor', 'hosbit' ),
            'slug'      => 'classic-editor',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Widget Importer & Exporter', 'hosbit' ),
            'slug'      => 'widget-importer-&-exporter',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Contact Form 7', 'hosbit' ),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'WP Maximum Execution Time Exceeded', 'hosbit' ),
            'slug'      => 'wp-maximum-execution-time-exceeded',
            'required'  => true,
        ), 
      array(
            'name'                     => esc_html__( 'Elementor', 'hosbit' ),
            'slug'                     => 'elementor',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/elementor.zip',
        ),
      array(
            'name'                     => esc_html__( 'Hosbit Common', 'hosbit' ),
            'slug'                     => 'hosbit-common',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/hosbit-common.zip',
        ),
      array(
            'name'                     => esc_html__( 'Hosbit Elementor', 'hosbit' ),
            'slug'                     => 'hosbit-elementor',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/hosbit-elementor.zip',
        ),
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'hosbit' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'hosbit' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'hosbit' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'hosbit' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'hosbit' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'hosbit' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'hosbit' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'hosbit' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'hosbit' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'hosbit' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'hosbit' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'hosbit' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'hosbit' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'hosbit' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'hosbit' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'hosbit' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'hosbit' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}



?>