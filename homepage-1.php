<?php
/**
 * Template Name: Home-1
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
    <div class="home-page-title">
		<div class="overlay"></div>
        <div class="container">
        <nav class="text-left animated fadeInLeft visible">
            <h1 class="white">HELLO, WELCOME TO PRESLEY</h1>
            <h3 class="pad-top-20 white">MINIMAL PORTFOLIO THEME</h3>
            <h4 class="white">Learn how to balance your city job with nature </h4>
            <div class="readmore pad-top-40">
                <a class="slide-btn btn-hover" href="portfolio-masonry.html">READ MORE</a>
            </div>
        </nav>
        </div>
    </div>
    <!-- page title -->


    <!-- PORTFOLIO SECTION -->
    <section id="projects" class="masonry">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="isotope-filters pad-bottom-60">
                        <ul class="nav nav-tabs light-style text-center">
                        <!-- NAV-->
                            <li><a href="#" data-filter=".all" class="filter active">All</a></li>
                            <li><a href="#" data-filter=".design" class="filter">Design</a></li>
                            <li><a href="#" data-filter=".identity" class="filter">Identity</a></li>
                            <li><a href="#" data-filter=".web" class="filter">Web</a></li>
                            <li><a href="#" data-filter=".photography" class="filter">Photography</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- GRID-->
                    <div class="isotope-grid grid-three-column" data-gutter="20" data-columns="3">
                        <div class="grid-sizer"></div>
                        <!-- PORTFOLIO ITEM -->
                        <div class="item all design web">
                            <!-- IMAGE WRAPPER -->
                            <div class="image-wrapper">
                                    <div class="img-title text-center">
                                        <!-- PROJECT TITLE-->
                                        <a href="portfolio-single.html"><i class="ion-ios-plus-outline fa-4x"></i></a>
                                    </div>
                                <!-- IMAGE -->
                                <a href="portfolio-single.html"><img class="wrapper-scale-in img-responsive hvr" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/grid/1.jpg" alt="" width="366" height="469" /></a>
                                <!-- OVERLAY -->
                                <div class="img-title-desc">
                                    <!-- DESCRIPTION -->
                                    <div class="portfolio-title title-hvr pad-20 animated transform-custom-ms fadeInUp visible">
                                        <h4 class="margin-none"><a href="portfolio-single.html">PORTFOLIO TITLE</a></h4>
                                        <span><a href="portfolio-single.html">Design</a></span>
                                        <span> , </span>
                                        <span><a href="portfolio-single.html">Development</a></span>
                                    </div>
                                    <!-- /.DESCRIPTION -->
                                </div>

                            </div>
                            <!-- /.IMAGE WRAPPER -->
                          
                        </div>
                        <!-- /. PORTFOLIO ITEM -->

                        <!-- PORTFOLIO ITEM -->
                        <div class="item all identity web">
                            <!-- IMAGE WRAPPER -->
                            <div class="image-wrapper">
                            		<div class="img-title text-center">
                                        <!-- PROJECT TITLE-->
                                        <a href="portfolio-single.html"><i class="ion-ios-plus-outline fa-4x"></i></a>
                                    </div>
                                <!-- IMAGE -->
                                <a href="portfolio-single.html"><img class="wrapper-scale-in img-responsive hvr" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/grid/2.jpg" alt="" width="366" height="469" /></a>
                                <!-- OVERLAY -->
                                <div class="img-title-desc">
                                    <!-- DESCRIPTION -->
                                    <div class="portfolio-title title-hvr pad-20 animated transform-custom-ms fadeInUp visible">
                                        <h4 class="margin-none"><a href="portfolio-single.html">PORTFOLIO TITLE</a></h4>
                                        <span><a href="portfolio-single.html">Design</a></span>
                                        <span> , </span>
                                        <span><a href="portfolio-single.html">Development</a></span>
                                    </div>
                                    <!-- /.DESCRIPTION -->
                                </div>

                            </div>
                            <!-- /.IMAGE WRAPPER -->
                        </div>
                        <!-- /. PORTFOLIO ITEM -->
                        <!-- PORTFOLIO ITEM -->
                        <div class="item all design identity photography">
                            <!-- IMAGE WRAPPER -->
                            <div class="image-wrapper">
                            		<div class="img-title text-center">
                                        <!-- PROJECT TITLE-->
                                        <a href="portfolio-single.html"><i class="ion-ios-plus-outline fa-4x"></i></a>
                                    </div>
                                <!-- IMAGE -->
                                <a href="portfolio-single.html"><img class="wrapper-scale-in img-responsive hvr" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/grid/3.jpg" alt="" width="366" height="469" /></a>
                                <!-- OVERLAY -->
                                <div class="img-title-desc">
                                    <!-- DESCRIPTION -->
                                    <div class="portfolio-title title-hvr pad-20 animated transform-custom-ms fadeInUp visible">
                                        <h4 class="margin-none"><a href="portfolio-single.html">PORTFOLIO TITLE</a></h4>
                                        <span><a href="portfolio-single.html">Design</a></span>
                                        <span> , </span>
                                        <span><a href="portfolio-single.html">Development</a></span>
                                    </div>
                                    <!-- /.DESCRIPTION -->
                                </div>

                            </div>
                            <!-- /.IMAGE WRAPPER -->
                        </div>
                        <!-- /. PORTFOLIO ITEM -->
                        <!-- PORTFOLIO ITEM -->
                        <div class="item all design">
                            <!-- IMAGE WRAPPER -->
                            <div class="image-wrapper">
                            		<div class="img-title text-center">
                                        <!-- PROJECT TITLE-->
                                        <a href="portfolio-single.html"><i class="ion-ios-plus-outline fa-4x"></i></a>
                                    </div>
                                <!-- IMAGE -->
                                <a href="portfolio-single.html"><img class="wrapper-scale-in img-responsive hvr" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/grid/4.jpg" alt="" width="366" height="469" /></a>
                                <!-- OVERLAY -->
                                <div class="img-title-desc">
                                    <!-- DESCRIPTION -->
                                    <div class="portfolio-title title-hvr pad-20 animated transform-custom-ms fadeInUp visible">
                                        <h4 class="margin-none"><a href="portfolio-single.html">PORTFOLIO TITLE</a></h4>
                                        <span><a href="portfolio-single.html">Design</a></span>
                                        <span> , </span>
                                        <span><a href="portfolio-single.html">Development</a></span>
                                    </div>
                                    <!-- /.DESCRIPTION -->
                                </div>

                            </div>
                            <!-- /.IMAGE WRAPPER -->
                        </div>
                        <!-- /. PORTFOLIO ITEM -->
                        <!-- PORTFOLIO ITEM -->
                        <div class="item all identity design">
                            <!-- IMAGE WRAPPER -->
                            <div class="image-wrapper">
                            		<div class="img-title text-center">
                                        <!-- PROJECT TITLE-->
                                        <a href="portfolio-single.html"><i class="ion-ios-plus-outline fa-4x"></i></a>
                                    </div>
                                <!-- IMAGE -->
                                <a href="portfolio-single.html"><img class="wrapper-scale-in img-responsive hvr" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/grid/5.jpg" alt="" width="366" height="469" /></a>
                                <!-- OVERLAY -->
                                <div class="img-title-desc">
                                    <!-- DESCRIPTION -->
                                    <div class="portfolio-title title-hvr pad-20 animated transform-custom-ms fadeInUp visible">
                                        <h4 class="margin-none"><a href="portfolio-single.html">PORTFOLIO TITLE</a></h4>
                                        <span><a href="portfolio-single.html">Design</a></span>
                                        <span> , </span>
                                        <span><a href="portfolio-single.html">Development</a></span>
                                    </div>
                                    <!-- /.DESCRIPTION -->
                                </div>

                            </div>
                            <!-- /.IMAGE WRAPPER -->
                        </div>
                        <!-- PORTFOLIO ITEM -->
                        <div class="item all design">
                            <!-- IMAGE WRAPPER -->
                            <div class="image-wrapper">
                            		<div class="img-title text-center">
                                        <!-- PROJECT TITLE-->
                                        <a href="portfolio-single.html"><i class="ion-ios-plus-outline fa-4x"></i></a>
                                    </div>
                                <!-- IMAGE -->
                                <a href="portfolio-single.html"><img class="wrapper-scale-in img-responsive hvr" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/grid/6.jpg" alt="" width="366" height="469" /></a>
                                <!-- OVERLAY -->
                                <div class="img-title-desc">
                                    <!-- DESCRIPTION -->
                                    <div class="portfolio-title title-hvr pad-20 animated transform-custom-ms fadeInUp visible">
                                        <h4 class="margin-none"><a href="portfolio-single.html">PORTFOLIO TITLE</a></h4>
                                        <span><a href="portfolio-single.html">Design</a></span>
                                        <span> , </span>
                                        <span><a href="portfolio-single.html">Development</a></span>
                                    </div>
                                    <!-- /.DESCRIPTION -->
                                </div>

                            </div>
                            <!-- /.IMAGE WRAPPER -->
                        </div>
                        <!-- /. PORTFOLIO ITEM -->
                        <!-- PORTFOLIO ITEM -->
                        <div class="item all design">
                            <!-- IMAGE WRAPPER -->
                            <div class="image-wrapper">
                            		<div class="img-title text-center">
                                        <!-- PROJECT TITLE-->
                                        <a href="portfolio-single.html"><i class="ion-ios-plus-outline fa-4x"></i></a>
                                    </div>
                                <!-- IMAGE -->
                                <a href="portfolio-single.html"><img class="wrapper-scale-in img-responsive hvr" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/grid/7.jpg" alt="" width="366" height="469" /></a>
                                <!-- OVERLAY -->
                                <div class="img-title-desc">
                                    <!-- DESCRIPTION -->
                                    <div class="portfolio-title title-hvr pad-20 animated transform-custom-ms fadeInUp visible">
                                        <h4 class="margin-none"><a href="portfolio-single.html">PORTFOLIO TITLE</a></h4>
                                        <span><a href="portfolio-single.html">Design</a></span>
                                        <span> , </span>
                                        <span><a href="portfolio-single.html">Development</a></span>
                                    </div>
                                    <!-- /.DESCRIPTION -->
                                </div>

                            </div>
                            <!-- /.IMAGE WRAPPER -->
                        </div>
                        <!-- /. PORTFOLIO ITEM -->
                        <!-- PORTFOLIO ITEM -->
                        <div class="item all design">
                            <!-- IMAGE WRAPPER -->
                            <div class="image-wrapper">
                            		<div class="img-title text-center">
                                        <!-- PROJECT TITLE-->
                                        <a href="portfolio-single.html"><i class="ion-ios-plus-outline fa-4x"></i></a>
                                    </div>
                                <!-- IMAGE -->
                                <a href="portfolio-single.html"><img class="wrapper-scale-in img-responsive hvr" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/grid/8.jpg" alt="" width="366" height="469" /></a>
                                <!-- OVERLAY -->
                                <div class="img-title-desc">
                                    <!-- DESCRIPTION -->
                                    <div class="portfolio-title title-hvr pad-20 animated transform-custom-ms fadeInUp visible">
                                        <h4 class="margin-none"><a href="portfolio-single.html">PORTFOLIO TITLE</a></h4>
                                        <span><a href="portfolio-single.html">Design</a></span>
                                        <span> , </span>
                                        <span><a href="portfolio-single.html">Development</a></span>
                                    </div>
                                    <!-- /.DESCRIPTION -->
                                </div>

                            </div>
                            <!-- /.IMAGE WRAPPER -->
                        </div>
                        <!-- /. PORTFOLIO ITEM -->
                        <!-- PORTFOLIO ITEM -->
                        <div class="item all web photography">
                            <!-- IMAGE WRAPPER -->
                            <div class="image-wrapper">
                            		<div class="img-title text-center">
                                        <!-- PROJECT TITLE-->
                                        <a href="portfolio-single.html"><i class="ion-ios-plus-outline fa-4x"></i></a>
                                    </div>
                                <!-- IMAGE -->
                                <a href="portfolio-single.html"><img class="wrapper-scale-in img-responsive hvr" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/grid/9.jpg" alt="" width="366" height="469" /></a>
                                <!-- OVERLAY -->
                                <div class="img-title-desc">
                                    <!-- DESCRIPTION -->
                                    <div class="portfolio-title title-hvr pad-20 animated transform-custom-ms fadeInUp visible">
                                        <h4 class="margin-none"><a href="portfolio-single.html">PORTFOLIO TITLE</a></h4>
                                        <span><a href="portfolio-single.html">Design</a></span>
                                        <span> , </span>
                                        <span><a href="portfolio-single.html">Development</a></span>
                                    </div>
                                    <!-- /.DESCRIPTION -->
                                </div>

                            </div>
                            <!-- /.IMAGE WRAPPER -->
                        </div>
                        <!-- /. PORTFOLIO ITEM -->
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

    <!-- about section -->
    <section id="about-us" class="about-us pad-tb-40">
        <!-- custom -->
        <div class="container custom-about">
            <!-- row -->
            <div class="row">
                <!-- col 6 -->
                <div class="col-md-6 abt-left animated fadeInLeft visible">
                    <div class="about-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about-us.png" class="img-responsive" alt="" title="" width="290" height="329">
                    </div>
                </div>
                <!-- col-6 -->
                <div class="col-md-6 abt-right animated">
                    <div class="about-content">
                        <div class="title-heading pad-tb-30">
                            <h3 class="upper">I am a Passionate Designer</h3>
                            <h5>WE TRY TO PROVIDE BEST SERVICE</h5>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                    </div>
                    <div class="readmore pad-top-40">
                        <a class="btn-hover" href="blog-single.html">READ MORE</a>
                    </div>
                </div>

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end about section -->
	
    <!-- team SECTION -->
    <section class="team animated fadeInUp visible">
        <!-- CONTAINER -->
        <div class="container">
            <div class="text-center pad-bottom-40">
                <h3>OUR TEAM</h3>
                <h5>OUR AWESOME TEAM MEMBERS</h5>
            </div>
            <div class="row">
                <div class="col-md-12 team-members">
                    <!-- CAROUSEL -->
                    <div class="owl-carousel" data-items="1" data-margin="40" data-loop="true" data-merge="true" data-nav="false" data-dots="false" data-stagepadding="" data-mobile="1" data-tablet="2" data-desktopsmall="3" data-desktop="3" data-autoplay="true" data-delay="4000">

                        <!-- ITEM -->
                        <div class="item custom-item">
                            <!-- img wrapper -->
                            <div class="image-wrapper overlay-darker overlay-slidein-left typo-light">
                                <!-- IMAGE -->
                                <img class="wrapper-scale-in img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/team/1.jpg" alt="" width="380" height="450">
                                <!-- OVERLAY -->
                                <div class="overlay-dark">
                                    <!-- DESCRIPTION -->
                                    <div class="img-desc slide-icons animated transform-custom-ms fadeInUp visible text-center">
                                        <!-- social icons-->
                                        <span><a href="#"><i class="fa fa-facebook"></i></a></span>
                                        <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                                        <span><a href="#"><i class="fa fa-dribbble"></i></a></span>
                                        <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                                        <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
                                    </div>
                                    <!-- /.DESCRIPTION -->
                                </div>
                            </div>
                            <!-- end img wrapper -->
                            <!-- description -->
                            <div class="team-member text-center">
                                <h4>Michel Austin</h4>
                                <h5>Managing Director</h5>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- ITEM -->
                        <div class="item">
                            <!-- img wrapper -->
                            <div class="image-wrapper overlay-darker overlay-slidein-left typo-light">
                                <!-- IMAGE -->
                                <img class="wrapper-scale-in img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/team/2.jpg" alt="" width="380" height="450">
                                <!-- OVERLAY -->
                                <div class="overlay-dark">
                                    <!-- DESCRIPTION -->
                                    <div class="img-desc slide-icons animated transform-custom-ms fadeInUp visible text-center">
                                        <!-- social icons-->
                                        <span><a href="#"><i class="fa fa-facebook"></i></a></span>
                                        <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                                        <span><a href="#"><i class="fa fa-dribbble"></i></a></span>
                                        <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                                        <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
                                    </div>
                                    <!-- /.DESCRIPTION -->
                                </div>
                            </div>
                            <!-- end img wrapper -->
                            <!-- description -->
                            <div class="team-member text-center">
                                <h4>Michel Austin</h4>
                                <h5>Managing Director</h5>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- ITEM -->
                        <div class="item">
                            <!-- img wrapper -->
                            <div class="image-wrapper overlay-darker overlay-slidein-left typo-light">
                                <!-- IMAGE -->
                                <img class="wrapper-scale-in img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/team/3.jpg" alt="" width="380" height="450">
                                <!-- OVERLAY -->
                                <div class="overlay-dark">
                                    <!-- DESCRIPTION -->
                                    <div class="img-desc slide-icons animated transform-custom-ms fadeInUp visible text-center">
                                        <!-- social icons-->
                                        <span><a href="#"><i class="fa fa-facebook"></i></a></span>
                                        <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                                        <span><a href="#"><i class="fa fa-dribbble"></i></a></span>
                                        <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                                        <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
                                    </div>
                                    <!-- /.DESCRIPTION -->
                                </div>
                            </div>
                            <!-- end img wrapper -->
                            <!-- description -->
                            <div class="team-member text-center">
                                <h4>Michel Austin</h4>
                                <h5>Managing Director</h5>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- ITEM -->
                        <div class="item">
                            <!-- img wrapper -->
                            <div class="image-wrapper overlay-darker overlay-slidein-left typo-light">
                                <!-- IMAGE -->
                                <img class="wrapper-scale-in img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/team/4.jpg" alt="" width="380" height="450">
                                <!-- OVERLAY -->
                                <div class="overlay-dark">
                                    <!-- DESCRIPTION -->
                                    <div class="img-desc slide-icons animated transform-custom-ms fadeInUp visible text-center">
                                        <!-- social icons-->
                                        <span><a href="#"><i class="fa fa-facebook"></i></a></span>
                                        <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                                        <span><a href="#"><i class="fa fa-dribbble"></i></a></span>
                                        <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                                        <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
                                    </div>
                                    <!-- /.DESCRIPTION -->
                                </div>
                            </div>
                            <!-- end img wrapper -->
                            <!-- description -->
                            <div class="team-member text-center">
                                <h4>Michel Austin</h4>
                                <h5>Managing Director</h5>
                            </div>
                        </div>
                        <!-- end item -->
                        <!-- ITEM -->
                        <div class="item">
                            <!-- img wrapper -->
                            <div class="image-wrapper overlay-darker overlay-slidein-left typo-light">
                                <!-- IMAGE -->
                                <img class="wrapper-scale-in img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/team/5.jpg" alt="" width="380" height="450">
                                <!-- OVERLAY -->
                                <div class="overlay-dark">
                                    <!-- DESCRIPTION -->
                                    <div class="img-desc slide-icons animated transform-custom-ms fadeInUp visible text-center">
                                        <!-- social icons-->
                                        <span><a href="#"><i class="fa fa-facebook"></i></a></span>
                                        <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                                        <span><a href="#"><i class="fa fa-dribbble"></i></a></span>
                                        <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                                        <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
                                    </div>
                                    <!-- /.DESCRIPTION -->
                                </div>
                            </div>
                            <!-- end img wrapper -->
                            <!-- description -->
                            <div class="team-member text-center">
                                <h4>Michel Austin</h4>
                                <h5>Managing Director</h5>
                            </div>
                        </div>
                        <!-- end item -->
                        <!-- ITEM -->
                        <div class="item">
                            <!-- img wrapper -->
                            <div class="image-wrapper overlay-darker overlay-slidein-left typo-light">
                                <!-- IMAGE -->
                                <img class="wrapper-scale-in img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/team/6.jpg" alt="" width="380" height="450">
                                <!-- OVERLAY -->
                                <div class="overlay-dark">
                                    <!-- DESCRIPTION -->
                                    <div class="img-desc slide-icons animated transform-custom-ms fadeInUp visible text-center">
                                        <!-- social icons-->
                                        <span><a href="#"><i class="fa fa-facebook"></i></a></span>
                                        <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                                        <span><a href="#"><i class="fa fa-dribbble"></i></a></span>
                                        <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                                        <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
                                    </div>
                                    <!-- /.DESCRIPTION -->
                                </div>
                            </div>
                            <!-- end img wrapper -->
                            <!-- description -->
                            <div class="team-member text-center">
                                <h4>Michel Austin</h4>
                                <h5>Managing Director</h5>
                            </div>
                        </div>
                        <!-- end item -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team SECTION -->

    <!-- Contact us -->
    <section id="contact" class="subscriber-form grey-bg pad-tb-70">
        <!-- who-we-are -->
        <div class="container">
			<div class="text-center pad-bottom-30">
                <h3>NEWSLETTER</h3>
                <h5>SUBSCRIBE FOR WEEKLY NEWSLETTER</h5>
            </div>
			<!-- subscribe form starts -->
			<div class="col-md-offset-3 form-row col-md-6 col-md-offset-3">
				<!-- Form Begins -->
				<div class="news-form">
						<form name="bootstrap-form" id="bootstrap-form" method="post" action="http://catchpixel.com/html/presley/php/contact-form.php">
						<!-- form field -->
						<div class="input-email form-group">
							<input type="email" name="contact_email" class="input-email form-control" placeholder="Email *" />
							<span class="input-group-btn text-center pad-top-20"><button class="btn btn-lg btn-default btn-hover" type="submit">SUBSCRIBE</button></span>
						</div>
						</form>
					</div>
			</div>
        </div>
        <!-- end container -->
    </section>
    <!-- contact section -->
    
    <!-- testimonial -->
    <section id="testimonial" class="testimonial-white-bg cs-testimonial">
        <div class="container custom-testimonial text-center animated fadeInUp visible">
            <!-- CAROUSEL -->
            <div class="col-md-offset-2 col-md-8">
                <div class="owl-carousel nav-bottom top-bullet dots-dark dots-outer dots-mini" data-items="1" data-margin="40" data-loop="true" data-merge="true" data-nav="false" data-dots="true" data-stagepadding="" data-mobile="1" data-tablet="1" data-desktopsmall="1" data-desktop="1" data-autoplay="true" data-delay="60000">
                    <!-- TESTIMONIAL -->
                    <div class="item client-says">
                        <div class="quote">
                            <!-- IMG -->
                            <div class="testimonial-img pad-bottom-20">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/testimonial/1.jpg" class="img-responsive img-circle" width="85" height="85" alt="">
                            </div>
                            <!-- IMG -->
                            <div class="quote-text">
                                <!-- TEXT -->
                                <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna nunc, rhoncus sit amet nisl id, consequat accumsan nisl. Cras tristique est id velit vehicula, nec lobortis felis interdum. "</p>
                            </div>
                        </div>
                    </div>
                    <!-- TESTIMONIAL -->
                    <div class="item client-says">
                        <div class="quote">
                            <!-- IMG -->
                            <div class="testimonial-img pad-bottom-20">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/testimonial/2.jpg" class="img-responsive img-circle" width="85" height="85" alt="">
                            </div>
                            <!-- IMG -->
                            <div class="quote-text">
                                <!-- TEXT -->
                                <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna nunc, rhoncus sit amet nisl id, consequat accumsan nisl. Cras tristique est id velit vehicula, nec lobortis felis interdum. "</p>
                            </div>
                        </div>
                    </div>
                    <!-- TESTIMONIAL -->
                    <div class="item client-says">
                        <div class="quote">
                            <!-- IMG -->
                            <div class="testimonial-img pad-bottom-20">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/testimonial/3.jpg" class="img-responsive img-circle" width="85" height="85" alt="">
                            </div>
                            <!-- IMG -->
                            <div class="quote-text">
                                <!-- TEXT -->
                                <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna nunc, rhoncus sit amet nisl id, consequat accumsan nisl. Cras tristique est id velit vehicula, nec lobortis felis interdum. "</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. CAROUSEL -->
            </div>
        </div>
    </section>
    <!-- end testimonial -->


<?php
get_footer();
