<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package presley
 */

?>

<div id="post-<?php the_ID(); ?>" class="col-md-6 blog-grid animated fadeInRight visible">
	<div class="post-img">
		<?php the_post_thumbnail(); ?>
	</div>
	<!-- BLOG DESC -->
	<div class="blog-desc">
		<div class="pad-tb-20">
			
				<?php
					if ( is_single() ) :
						the_title( '<h4>', '</h4>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
				?>
			<span><a href="<?php the_permalink(); ?>">Design</a>, </span>
			<span><a href="<?php the_permalink(); ?>"> Development</a></span>
		</div>
			<?php presley_excerpt_more(40); ?>
			<!-- button -->
		<div class="read pad-top-20">
			<span class="date">
			<?php 
				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php presley_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif;
			?>
		</span>
			<a class="pull-right" href="<?php the_permalink(); ?>">READ MORE<i class="ion-ios-arrow-thin-right fa-1x"></i></a>
		</div>
	</div>
</div>

