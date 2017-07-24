<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package presley
 */
get_template_part('templates/hero');
get_header(); ?>

<section id="blog-single">
        <!-- container -->
        <div class="container">
		<div class="row">
                <!-- start col-9 -->
		<div class="col-md-9 animated fadeInLeft visible">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'singular' );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->
</section>

<?php
get_footer();
