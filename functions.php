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
		add_image_size( 'portfolio-thumb', 540, 252, true );
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
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'presley_widgets_init' );










/**
 * theme support
 */

add_theme_support( 'custom-logo' );


/**
 * Enqueue scripts and styles.
 */
 function presley_scripts() {
	 wp_enqueue_style( 'presley-style', get_stylesheet_uri() );
	wp_enqueue_style( 'plugins', 	get_template_directory_uri() . '/css/plugins.css', array(), '1.0' );
	wp_enqueue_style( 'style', 		get_template_directory_uri() . '/css/style.css', array(), '1.0' );
	wp_enqueue_style( 'custom', 		get_template_directory_uri() . '/css/custom.css', array(), '1.0' );


	
	wp_enqueue_script( 'vendor', 	get_template_directory_uri() . '/js/vendor/jquery-1.12.4.min.js', array('jquery'), '1.12.4', true );
	wp_enqueue_script( 'plugin', 	get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'portfolio', 	get_template_directory_uri() . '/js/portfolio.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'main', 	get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'presley_scripts');


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

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/**
	 * Custom post type for portfolio.
	 *
	 */
	function presley_register_post_type() {
		register_post_type( 'portfolio',
		array(
		  'labels' => array(
			'name' => __( 'Portfolio', 'presley'  ),
			'singular_name' => __( 'Portfolio', 'presley'  ),
			'add_new' => ('Add New Portfolio'),
		  ),
		  'public' => true,
		  'supports' => array( 'title', 'editor', 'thumbnail',),
		  'has_archive' => true,
		)
	  );
	  
			// Add Categorys for portfolio
		$labels = array(
			'name'              => _x( 'Filters', 'taxonomy general name', 'presley' ),
			'singular_name'     => _x( 'Filter', 'taxonomy singular name', 'presley' ),
			'search_items'      => __( 'Search Filter', 'presley' ),
			'all_items'         => __( 'All Filter', 'presley' ),
			'parent_item'       => __( 'Parent Filter', 'presley' ),
			'parent_item_colon' => __( 'Parent Filter:', 'presley' ),
			'edit_item'         => __( 'Edit Filter', 'presley' ),
			'update_item'       => __( 'Update Filter', 'presley' ),
			'add_new_item'      => __( 'Add New Filter', 'presley' ),
			'new_item_name'     => __( 'New Filter Name', 'presley' ),
			'menu_name'         => __( 'Filter', 'presley' ),
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'portfolio-Filter' ),
		);
		register_taxonomy( 'filters', array( 'portfolio' ), $args );
	  
	}
	add_action( 'init', 'presley_register_post_type' );

	/*
	* Adds terms from a custom taxonomy to post_class
	*/
	add_filter( 'post_class', 'presley_filter_post_class', 10, 3 );
			function presley_filter_post_class( $classes, $class, $ID ) {
			$taxonomy = 'filters';
			$terms = get_the_terms( (int) $ID, $taxonomy );
			if( !empty( $terms ) ) {
				foreach( (array) $terms as $order => $term ) {
					if( !in_array( $term->slug, $classes ) ) {
					$classes[] = $term->slug;
					}
				}
			}
			return $classes;
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
