<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package presley
 */

get_header(); ?>
 <!-- page title -->
    <div class="page-title">
        <div class="overlay"></div>
        <nav class="text-center animated fadeInUp visible">
            <h3>HERE IS OUR LATEST WORKS</h3>
            <a class="breadcrumb-item" href="index.html">HOME // </a>
            <span class="breadcrumb-item active"> BLOG </span>
        </nav>
    </div>
    <!-- page title -->
<!-- blog -->
    <section id="blog" class="blog-grid-section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
                
            </div>
            <div class="blog-buttons text-center">
				<?php echo presley_pegination( ); ?>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

	

<?php
get_footer();
