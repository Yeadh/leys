<?php
/**
 * Template Name: About
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
            <h3>HELLO, WELCOME TO PRESLEY</h3>
            <a class="breadcrumb-item" href="index.html">HOME // </a>
            <span class="breadcrumb-item active"> ABOUT US</span>
        </nav>
    </div>
    <!-- page title -->

    <!-- about section -->
    <section id="about-section" class="about-section">
        <!-- custom -->
        <div class="container">

            <div class="text-center">
                <div class="about-content">
                    <div class="title-heading pad-bottom-40 animated fadeInUp visible">
                        <h3>ABOUT US</h3>
                        <h5>WE TRY TO PROVIDE BEST SERVICE</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p>
                </div>
            </div>

            <!-- row -->
            <div class="row about-row">
                <!-- col-md-6 -->
                <div class="col-md-6 animated fadeInLeft visible">
                    <div class="about-img pad-bottom-20">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about-page.jpg" class="img-responsive" alt="" title="" width="555" height="359">
                    </div>
                </div>
                <!--end col-md-6 -->

                <!-- col-md-6 -->
                <div class="col-md-6 what-we-do animated fadeInRight visible">
                    <h3>WHAT WE DO?</h3>
                    <div class="row">
                        <!-- COL 6 -->
                        <div class="col-sm-6 we-do">
                            <div class="work-header">
                                <i class="icon-circle-compass"></i>
                                <h4>DESIGN</h4>
                            </div>
                            <div class="we-do-content pad-top-15">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <!-- END COL 6 -->
                        <!-- COL 6 -->
                        <div class="col-sm-6 we-do">
                            <div class="work-header">
                                <i class="icon-desktop"></i>
                                <h4>DEVELOPMENT</h4>
                            </div>
                            <!-- end heading -->
                            <div class="we-do-content pad-top-15">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <!-- END COL 6 -->
                        <!-- COL 6 -->
                        <div class="col-sm-6 we-do">
                            <div class="work-header">
                                <i class="icon-basic_anchor"></i>
                                <h4>UNLIMITED FEATURES</h4>
                            </div>
                            <div class="we-do-content pad-top-15">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <!-- END COL 6 -->
                        <!-- COL 6 -->
                        <div class="col-sm-6 we-do">
                            <div class="work-header">
                                <i class="icon-document"></i>
                                <h4>FRIENDLY SUPPORT</h4>
                            </div>
                            <div class="we-do-content pad-top-15">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <!-- END COL 6 -->
                    </div>
                </div>
                <!--end col-md-6 -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end about section -->

    <!-- counter section -->
    <section id="counter" class="counter">
        <div class="container">
            <div class="row">
                <!-- custom counter -->
                <div class="col-md-3 counter-grid animated fadeInLeft visible">
                    <div class="count-inner dark text-center white">
                        <i class="icon-briefcase2"></i>
                        <div class="count-num">
                            <div class="count">500</div>
                            <h4 class="white">PROJECT DONE</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 counter-grid animated fadeInUp visible">
                    <div class="count-inner dark text-center white">
                        <i class="icon-user"></i>
                        <div class="count-num">
                            <div class="count">100</div>
                            <h4 class="white">HAPPY CLIENTS</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 counter-grid animated fadeInDown visible">
                    <div class="count-inner dark text-center white">
                        <i class="icon-hourglass"></i>
                        <div class="count-num">
                            <div class="count">1000</div>
                            <h4 class="white">HOURS WORK</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 counter-grid animated fadeInRight visible">
                    <div class="count-inner dark text-center white">
                        <i class="icon-trophy"></i>
                        <div class="count-num">
                            <div class="count">100</div>
                            <h4 class="white">AWARDS</h4>
                        </div>
                    </div>
                </div>
                <!-- end custom counter -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end counter section -->

    <!-- team -->
    <!-- FEATURED SECTION -->
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
                                <img class="wrapper-scale-in img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/team/1.jpg" alt="" title="team-img" width="380" height="450">
                                <!-- OVERLAY -->
                                <div class="overlay-dark">
                                    <!-- DESCRIPTION -->
                                    <div class="img-desc slide-icons animated transform-custom-ms zoomIn visible text-center">
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
                                <img class="wrapper-scale-in img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/team/2.jpg" alt="" title="team-img" width="380" height="450">
                                <!-- OVERLAY -->
                                <div class="overlay-dark">
                                    <!-- DESCRIPTION -->
                                    <div class="img-desc slide-icons animated transform-custom-ms zoomIn visible text-center">
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
                                <img class="wrapper-scale-in img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/team/3.jpg" alt="" title="team-img" width="380" height="450">
                                <!-- OVERLAY -->
                                <div class="overlay-dark">
                                    <!-- DESCRIPTION -->
                                    <div class="img-desc slide-icons animated transform-custom-ms zoomIn visible text-center">
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
                                <img class="wrapper-scale-in img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/team/4.jpg" alt="" title="team-img" width="380" height="450">
                                <!-- OVERLAY -->
                                <div class="overlay-dark">
                                    <!-- DESCRIPTION -->
                                    <div class="img-desc slide-icons animated transform-custom-ms zoomIn visible text-center">
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
                                <img class="wrapper-scale-in img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/team/5.jpg" alt="" title="team-img" width="380" height="450">
                                <!-- OVERLAY -->
                                <div class="overlay-dark">
                                    <!-- DESCRIPTION -->
                                    <div class="img-desc slide-icons animated transform-custom-ms zoomIn visible text-center">
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
                                <img class="wrapper-scale-in img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/team/6.jpg" alt="" title="team-img" width="380" height="450">
                                <!-- OVERLAY -->
                                <div class="overlay-dark">
                                    <!-- DESCRIPTION -->
                                    <div class="img-desc slide-icons animated transform-custom-ms zoomIn visible text-center">
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
    <!-- FEATURED SECTION -->
    <!-- end team -->

    <!-- client section -->
    <section class="client-section" id="client-section">

        <div id="clients" class="animated fadeInLeft visible">
            <div class="container">
                <!-- heading -->
                <div class="title-heading text-center pad-bottom-40">
                    <h3>HAPPY CLIENT</h3>
                    <h5>THEY GIVE UP THEIR FEEDBACK</h5>
                </div>
                <!-- end heading -->
                <div class="col-md-12">
                    <!-- CAROUSEL -->
                    <div class="owl-carousel nav-bottom top-bullet dots-dark dots-mini" data-items="2" data-margin="40" data-loop="true" data-merge="true" data-nav="false" data-dots="false" data-stagepadding="" data-mobile="3" data-tablet="4" data-desktopsmall="5" data-desktop="6" data-autoplay="true" data-delay="4000">
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/1.png" alt="" class="img-responsive" width="200" height="150"></div>

                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/2.png" alt="" class="img-responsive" width="200" height="150"></div>

                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/3.png" alt="" class="img-responsive" width="200" height="150"></div>

                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/4.png" alt="" class="img-responsive" width="200" height="150"></div>

                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/5.png" alt="" class="img-responsive" width="200" height="150"></div>

                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/6.png" alt="" class="img-responsive" width="200" height="150"></div>

                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/7.png" alt="" class="img-responsive" width="200" height="150"></div>

                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/8.png" alt="" class="img-responsive" width="200" height="150"></div>

                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/9.png" alt="" class="img-responsive" width="200" height="150"></div>
                        
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/10.png" alt="" class="img-responsive" width="200" height="150"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client section -->
    <!-- instagram section -->

        <!-- testimonial -->
    <section class="testimonial-white-bg">
        <div class="container">
        	<div class="title-heading text-center pad-bottom-40">
                <h3>INSTAGRAM FEEDS</h3>
                 <h5>YOU CAN FOLLOW US ON INSTAGRAM</h5>
            </div>
        	<div class="instagram">
				<a href="<?php echo get_template_directory_uri(); ?>/img/instagram/01.jpg" data-source="http://500px.com/photo/32736307" title="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/instagram/01.jpg" alt="">
				</a>
				<a href="<?php echo get_template_directory_uri(); ?>/img/instagram/02.jpg" data-source="http://500px.com/photo/32736307" title="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/instagram/02.jpg" alt="">
				</a>
				<a href="<?php echo get_template_directory_uri(); ?>/img/instagram/03.jpg" data-source="http://500px.com/photo/32736307" title="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/instagram/03.jpg" alt="">
				</a>
				<a href="<?php echo get_template_directory_uri(); ?>/img/instagram/04.jpg" data-source="http://500px.com/photo/32736307" title="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/instagram/04.jpg" alt="">
				</a>
				<a href="<?php echo get_template_directory_uri(); ?>/img/instagram/05.jpg" data-source="http://500px.com/photo/32736307" title="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/instagram/05.jpg" alt="">
				</a>
        	</div>
        </div>
    </section>
    <!-- end testimonial -->

<?php
get_footer();
