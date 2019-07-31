<?php
use Inc2734\WP_Customizer_Framework\Framework;

/*
 * Control: Custom post archive title
 */
Framework::control(
	'text',
	'post-archive-title',
	[
		'label' => __( 'Post archive title', 'op001' ),
		'transport' => 'PostMessage',
		'default' => 'New Post',
	]
);

if ( ! is_customize_preview() ) {
	return;
}

/***
 * Panel: Design
 */
Framework::panel(
	'design',
	[
		'title' => __( 'Design', 'op001' ),
		'priority' => 1070,
	]
);

/**
 * Section: Titles
 */
Framework::section(
	'titles',
	[
		'title' => __( 'titles', 'op001' ),
		'priority' => 110,
	]
);

$panel   = Framework::get_panel( 'design' );
$section = Framework::get_section( 'titles' );
$control = Framework::get_control( 'post-archive-title' );
$control->join( $section )->join( $panel );
$control->partial([
	'selector'            => '.c-page-header__title',
]);