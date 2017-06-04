<?php
/**
 * Template Name: Portfolio
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
            <span class="breadcrumb-item active"> PORTFOLIO</span>
        </nav>
    </div>
    <!-- page title -->

    <!-- PORTFOLIO SECTION -->
    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="isotope-filters pad-bottom-60">
					<!-- Filters -->
					<?php if(!is_tax()) {
						$terms = get_terms("filters");
						$count = count($terms);
							if ( $count > 0 ){ 
							
							?>
								<ul class="nav nav-tabs light-style text-center">
									<li> <a href="<?php the_permalink(); ?>" data-filter=".all" class="filter active"><?php  _e('All', 'presley'); ?></a></li>
							<?php
							
								foreach ( $terms as $term ) {
									echo '<li> <a href="<?php the_permalink(); ?>" data-filter="'.$term->slug.'" class="filter active">'. $term->name .'</a></li>';
								} 
							?>
								</ul>
							<?php
							} 
						} 
					?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- GRID-->
                    <div class="isotope-grid grid-two-column" data-gutter="0" data-columns="2">
                        <div class="grid-sizer"></div>
                        <!-- PORTFOLIO ITEM -->
						
					<?php if(have_posts()) : ?>

						<?php 
						
						$port_items = new WP_Query(array(
							'post_type' => 'portfolio',
						));
						
						while( $port_items->have_posts()) : $port_items->the_post(); ?>
						
							<div <?php post_class ('item mix'); ?>>
								<!-- IMAGE WRAPPER -->
								<div class="image-wrapper">
									<!-- IMAGE -->
									<?php if ( has_post_thumbnail()) the_post_thumbnail('portfolio-thumb'); ?>
									<!-- OVERLAY -->
									<div class="img-desc animated transform-custom-ms fadeInDown visible">
										<!-- DESCRIPTION -->
										<div class="img-title text-center">
											<!-- PROJECT TITLE-->
											<h4 class="bottom"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											<span><a href="<?php the_permalink(); ?>"><?php get_taxonomies(); ?></a></span>
											<span class="white"> , </span>
											<span><a href="<?php the_permalink(); ?>"><?php get_taxonomies(); ?></a></span>
										</div>
										<!-- /.DESCRIPTION -->
									</div>
								</div>
								<!-- /.IMAGE WRAPPER -->
							</div>
							<!-- /. PORTFOLIO ITEM -->
					
					
						<?php endwhile; ?>
					<?php endif; ?>
						
						
						
						
						
						
						
						
						
                        
                    </div>

                    <!-- button -->
                    <div class="loadmore text-center">
                        <a href="#">LOAD MORE</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.CONTAINER -->
    </section>
    <!-- PORTFOLIO SECTION -->

<?php
get_footer();
