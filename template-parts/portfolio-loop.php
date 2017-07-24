<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package presley
 */

?>
	<?php 
		$presley_port_item = new WP_Query(array(
			'post_type' => 'presley_portfolio',
			'posts_per_page' => -1
		));
	?>
	<?php while($presley_port_item->have_posts()) : $presley_port_item->the_post();?>
		<div class="item 
		<?php
			$presley_portitem_class = get_the_terms(get_the_id(), 'presley_portfolio_cat');
			foreach ($presley_portitem_class as $presley_portitem){
				echo $presley_portitem->slug;
			}
		?>
		">
			<div class="image-wrapper">
				<!-- Image -->
				<?php the_post_thumbnail('wrapper-scale-in img-responsive'); ?>
				
				<!-- Overla -->
				<div class="img-desc animated transform-custom-ms fadeInDown visible">
					<div class="img-title text-center">
						<h4 class="bottom"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<span><a href="<?php the_permalink(); ?>"><?php echo $presley_portitem->slug; ?></a></span>
					</div>
				</div>
			</div><!-- .image-wrapper -->
		</div>
	<?php endwhile; ?>
	
	
	
