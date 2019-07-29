<?php
use Inc2734\WP_Customizer_Framework\Framework;

/*
 * Control : site header layout
 */
Framework::control(
	'radio',
	'op-footer-col-number',
	[
		'label' => __( 'Number of footer widget column','op001' ),
		'default' => '3',
		'description' => __( 'Only view of desktop PC', 'op001' ),
		'choices' => array(
			'2' => __( '2 columns', 'op001' ),
			'3' => __( '3 columns', 'op001' ),
			'4' => __( '4 columns', 'op001' ),
		),
	]
);

if ( ! is_customize_preview() ) {
	return;
}

/***
 * Panel: Layout
 */
Framework::panel(
	'layout',
	[
		'title' => __( 'Layout', 'op001' ),
		'priority' => 1010,
	]
);

/**
 * Section: Site header
 */
Framework::section(
	'site-footer',
	[
		'title' => __( 'Site footer', 'op001' ),
		'description' => __( 'Customize layout of site footer area', 'op001' ),
		'priority' => 130,
	]
);

$panel   = Framework::get_panel( 'layout' );
$section = Framework::get_section( 'site-footer' );
$control = Framework::get_control( 'op-footer-col-number' );
$control->join( $section )->join( $panel );