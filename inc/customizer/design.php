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
	'text',
	[
		'title' => __( 'Text', 'op001' ),
		'priority' => 110,
	]
);

$panel   = Framework::get_panel( 'design' );
$section = Framework::get_section( 'text' );
$control = Framework::get_control( 'post-archive-title' );
$control->join( $section )->join( $panel );