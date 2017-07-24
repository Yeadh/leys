<?php
/**
 * presley functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package presley
 */

if ( ! function_exists( 'presley_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function presley_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on presley, use a find and replace
	 * to change 'presley' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'presley', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	
	
	
	/***********************************************************************************************/
	/* Add Theme Support for Post Thumbnails */
	/***********************************************************************************************/
	if (function_exists('add_theme_support')) {
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(268, 160);
		add_image_size( 'portfolio-thumb', 540, 252, true );
		add_image_size( 'blog-thumb', 555, 250, true );
		add_image_size( 'blog-singular', 848, 370, true );
	}
		
	
	
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'presley' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'presley_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'presley_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function presley_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'presley_content_width', 640 );
}
add_action( 'after_setup_theme', 'presley_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function presley_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'presley' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'presley' ),
		'before_widget' => '<div class="input-group latest-post blog-category pad-btm b-tags blog-category blog-category blog-archives">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="sidebar-heading">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'presley_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
 function presley_scripts() {
	 wp_enqueue_style( 'presley-style', get_stylesheet_uri() );
	wp_enqueue_style( 'plugins', 	get_template_directory_uri() . '/assets/css/plugins.css', array(), '1.0' );
	wp_enqueue_style( 'style', 		get_template_directory_uri() . '/assets/css/style.css', array(), '1.0' );
	wp_enqueue_style( 'custom', 		get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0' );


	wp_enqueue_script( 'vendor', 	get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array('jquery'), '1.12.4', true );
	wp_enqueue_script( 'plugin', 	get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'portfolio', 	get_template_directory_uri() . '/assets/js/portfolio.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'main', 	get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'customizer', 	get_template_directory_uri() . '/assets/js/customizer.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'presley_scripts');


function presley_customize_css(){
    ?>
         <style type="text/css">
             .home-page-title { background-image: url(<?php echo get_theme_mod('presley_homehero_image', ''); ?>); }
             .page-template-portfolio .page-title { background-image: url(<?php echo get_theme_mod('presley_portfoliohero_image', ''); ?>); }
             .blog .page-title { background-image: url(<?php echo get_theme_mod('presley_bloghero_image', ''); ?>); }
			 
         </style>
    <?php
}
add_action( 'wp_head', 'presley_customize_css');



//post content read more
function presley_excerpt_more( $more ) {
	$coffee_post_content = explode (" ", get_the_content());
	
	$less_content = array_slice($coffee_post_content, 0, $more);
	echo implode(" ", $less_content);
    }

function presley_pegination(){
		array(
		'base'               => '%_%',
		'format'             => '?paged=%#%',
		'total'              => 1,
		'current'            => 0,
		'show_all'           => false,
		'end_size'           => 1,
		'mid_size'           => 2,
		'prev_next'          => true,
		'prev_text'          => __('« Previous'),
		'next_text'          => __('Next »'),
		'type'               => 'plain',
		'add_args'           => false,
		'add_fragment'       => '',
		'before_page_number' => '',
		'after_page_number'  => ''
	);
}

function presley_social_share(){
	  if( get_theme_mod( 'facebook_link' )  )
	  {
		echo sprintf('<li><a href="%s"><i class="fa fa-facebook"></i>Facebook</a></li>', esc_url( get_theme_mod( 'facebook_link' )  ) );
	  }
	  if( get_theme_mod( 'twitter_link' )  )
	  {
		echo sprintf('<li><a href="%s"><i class="fa fa-twitter"></i>Twitter</a></li>', esc_url( get_theme_mod( 'twitter_link' )  ) );
	  }
	  if( get_theme_mod( 'google_plus_link' )  )
	  {
		echo sprintf('<li><a href="%s"><i class="fa fa-google-plus"></i>Google+</a></li>', esc_url( get_theme_mod( 'google_plus_link' )  ) );
	  }
	  if( get_theme_mod( 'youtube_link' )  )
	  {
		echo sprintf('<li><a href="%s"><i class="fa fa-youtube"></i>Youtube</a></li>', esc_url( get_theme_mod( 'youtube_link' )  ) );
	  }
	  if( get_theme_mod( 'instagram_link' )  )
	  {
		echo sprintf('<li><a href="%s"><i class="fa fa-instagram"></i>Instagram</a></li>', esc_url( get_theme_mod( 'instagram_link' )  ) );
	  }
	  if( get_theme_mod( 'dribble_link' )  )
	  {
		echo sprintf('<li><a href="%s"><i class="fa fa-dribbble"></i>Dribbble</a></li>', esc_url( get_theme_mod( 'dribble_link' )  ) );
	  }
	  
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
add_filter('the_excerpt', function ($content){
	$post_content = explode(" ", $content);
	$less_content = array_slice($post_content, 0, 42);
	$excert =  implode(" ", $less_content);
	$excert = sprintf('<p>%s</p> <a href="%s" class="pull-right">%s</a>',$excert, get_the_permalink(),__('Read More','presley')) ;
	return $excert;	
});
	
	
//presley blog social share

function presley_blog_social_share(){
	$urlpramarater = array(
		array(
			'class'		=> 'facebook',
			'phrase' 	=> 'https://www.facebook.com/sharer.php?u={url}',
		),
		array(
			'class'		=> 'twitter',
			'phrase' 	=> 'https://twitter.com/intent/tweet?url={url}&text={title}',
		),
		
		array(
			'class'		=> 'linkedin',
			'phrase' 	=> 'https://plus.google.com/share?url={url}',
		),
		array(
			'class'		=> 'google-plus',
			'phrase' 	=> 'https://plus.google.com/share?url={url}',
		),
	);
	$permalink = urlencode( wp_get_shortlink() );
	$title =  get_the_title();
	?>
	
	<div class="social-feedback">
		<?php 
			$urlpramarater = (array) apply_filters('presley_social_urlpramarater', $urlpramarater);
			foreach( $urlpramarater as $pramarater)
			{
				$url = str_replace( array('{url}','{title}'), array($permalink, $title), $pramarater['phrase'] );
				echo sprintf('<a class="common-btn" href="%s">%s</a>', $url, $pramarater['class']);
			}
		?>
	</div><!-- .social-feedback -->
	<?php
}
	

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
require_once get_template_directory() . '/inc/functions/register-cpt.php';
require_once get_template_directory() . '/inc/functions/functions.php';
require_once get_template_directory() . '/inc/customizer/customizer.php';
require_once get_template_directory() . '/inc/customizer/functions.php';