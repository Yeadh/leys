<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package presley
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="col-md-3 blog-sidebar animated fadeInRight visible">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
 </div>
                <!-- end sidebar col-3 -->

