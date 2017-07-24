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
<?php  get_template_part('templates/hero-home'); ?>
<?php  get_template_part('templates/parts/home-portfolio'); ?>
<?php  get_template_part('templates/parts/home-about'); ?>
<?php  get_template_part('templates/parts/home-testimonials'); ?>



<?php
get_footer();
