<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package presley
 */

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Pressionate">
  <!-- Favicon Icon -->
    <link rel="icon" href="img/favicon.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Rajdhani:300,400,500,600,700" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Start Preloader -->
  <!-- <div id="p-preloader">
    <div class="p-preloader-wave"></div>
  </div>
  <!-- End Preloader -->
  
    <!-- Start Site Header -->
    <header class="site-header">
      <div class="container header-wrap">
          <div class="site-branding">
            <!-- For Image Logo -->
            <!-- <a href="index.html" class="custom-logo-link">
              <img src="img/logo.png" alt="" class="custom-logo">
            </a> -->
            <!-- For Site Title -->
            <span class="site-title">
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() && function_exists( 'the_custom_logo' ) ) {
						
							printf('<a href="%s" class="custom-logo-link">', home_url());
							the_custom_logo();
							printf('</a>');
					
					}
					 else 
					{
						printf('<a href="%s">%s</a>', home_url(), esc_attr( get_bloginfo( 'name' ) ));
					}
					
				?>
            </span>
          </div>
          <nav class="primary-nav">
            <?php 
					wp_nav_menu( array( 
						'theme_location' => 'primary',
						'menu_class'	 => 'primary-nav'
					) );  
				?>
          </nav>
      </div><!-- .header-wrap -->
    </header>
    <!-- End Site Header -->
