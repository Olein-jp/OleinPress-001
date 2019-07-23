<?php
/**
 * custom posts pagination
 */
function op001_custom_the_posts_pagination( $template ) {
	$template = '
	<nav class="p-posts-pagination %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="p-posts-pagination__list">%3$s</div>
	</nav>';
	return $template;
}
add_filter( 'navigation_markup_template', 'op001_custom_the_posts_pagination' );