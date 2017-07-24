<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package presley
 */

?>


	<div class="post-img">
				<?php 
			if(has_post_thumbnail()){
				the_post_thumbnail('blog-singular');
			}
		?> 
	</div>
	<!-- BLOG DESC -->
	<div class="blog-desc">
		<div class="pad-tb-20">
		<?php
			if ( is_singular() ) :
			the_title( '<h4>', '</h4>' );
			else :
				the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
			endif;
		?>
		</div>
			<?php
			if(!is_single())
			{
				the_excerpt();
			}
			else
			{
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'READ MORE %s <span class="meta-nav">&rarr;</span>', 'premise' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'premise' ),
					'after'  => '</div>',
				) );
			}
		?>
		<div class="read pad-top-20">
			<span class="date"><?php presley_posted_on(); ?></span>
		</div>
	</div>
	<!-- END BLOG DESC -->

