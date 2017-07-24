	 <!-- Portfolio Section -->
    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="isotope-filters pad-bottom-60">
                        <!-- nav-->
                        <ul class="nav nav-tabs light-style text-center">
								<li><a href="#" data-filter="*" class="filter active">All</a></li>
							<?php 
								$presley_cat_list = get_terms('presley_portfolio_cat');
								
								foreach ($presley_cat_list as $presley_cat) :
							?>
								<li><a href="<?php the_permalink(); ?>" data-filter=".<?php echo $presley_cat->slug; ?>" class="filter"><?php echo $presley_cat->name; ?></a></li>
							<?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Grid-->
                    <div class="isotope-grid grid-two-column" data-gutter="0" data-columns="2">
                        <div class="grid-sizer"></div>
                        <!-- Portfolio Item -->
                        <?php get_template_part('template-parts/portfolio', 'loop'); ?>
                        <!-- End Portfolio Item -->
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </section>