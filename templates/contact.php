<?php
/**
 * Template Name: contact-page
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
get_template_part('templates/hero-contact');
get_header(); ?>
   	<!-- Contact us -->
    <section id="contact" class="contact">
        <!-- who-we-are -->
        <div class="container">
            <!-- content row -->
            <div class="row text-center pad-tb-40">
                <!-- col-md-4 -->
                <div class="col-md-4 animated fadeInLeft visible">
                    <h4><?php _e('E-MAIL'); ?></h4>
                    <div class="contact-details pad-tb-20">
                        <p><?php presley_contact_email(); ?></p>
                    </div>
                </div>
                <!-- end col-md-4 -->
                <!-- col-md-4 -->
                <div class="col-md-4 animated fadeInDown visible">
                    <h4><?php _e('PHONE'); ?></h4>
                    <div class="contact-details pad-tb-20">
                        <p><?php presley_contact_phone(); ?></p>
                    </div>
                </div>
                <!-- end col-md-4 -->
                <!-- col-md-4 -->
                <div class="col-md-4 animated fadeInRight visible">
                    <h4><?php _e('ADDRESS'); ?></h4>
                    <div class="contact-details pad-tb-20">
                        <p><?php presley_contact_address(); ?></p>
                    </div>
                </div>
                <!-- end col-md-4 -->

                <!-- end content row -->
                <!-- contact -->
                <div class="col-md-8 col-md-offset-2 animated zoomIn visible contact-form">
                    <!-- Form Begins -->
                    <?php echo do_shortcode( get_theme_mod( 'presley_contact_shortcode' ) ); ?>
                </div>
            </div>

        </div>
        <!-- end container -->
    </section>

<?php
get_footer();
