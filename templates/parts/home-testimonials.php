
<!-- Start Testimonial -->
<?php if( have_posts('presley_testimonials')): ?>
<section class="testimonial-1 pad-tb-70">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="home-testimonial">
				<?php 
					$presley_testimonial = new WP_Query(array(
						'post_type' => 'presley_testimonials',
						'posts_per_page' => -1
					));
				?>
				<?php while($presley_testimonial->have_posts()) : $presley_testimonial->the_post();?>
					<div class="single-testimonial">“<?php the_content(); ?>”</div>
				<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<!-- End testimonial -->