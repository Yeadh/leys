<?php

//	Hero page breadcrumb
function the_breadcrumb() {
	global $post;
	if (!is_home()) {
		echo '<a class="breadcrumb-item" href="';
		echo get_option('home');
		echo '">';
		echo 'Home //';
		echo '</a>';
		if (is_category() || is_single()) {
			echo '<a class="breadcrumb-item">';
			the_category(' </a><a class="separator"> / </a><a> ');
			if (is_single()) {
				echo '</a><a class="separator"> / </a><a>';
				the_title();
				echo '</a>';
			}
		} 
		elseif (is_page()) {
			if($post->post_parent){
				$anc = get_post_ancestors( $post->ID );
				$title = get_the_title();
				foreach ( $anc as $ancestor ) {
					$output = '<span class="breadcrumb-item active"><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></span> <li class="separator">/</li>';
				}
				echo $output;
				echo '<strong title="'.$title.'"> '.$title.'</strong>';
			} else {
				echo '<span class="breadcrumb-item active"><strong> '.get_the_title().'</strong></span>';
			}
		}
	}
	elseif (is_tag()) {single_tag_title();}
	elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
	elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
	elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
	elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
	elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
}