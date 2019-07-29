<?php
use Inc2734\WP_Customizer_Framework\Framework;

/*
 * Control : Slider image(s)
 */
Framework::control(
	'image',
	'slider-image-01',
	[
		'label' => __( 'Slider image 1','op001' ),
		'priority' => 130,
	]
);

Framework::control(
	'image',
	'slider-image-02',
	[
		'label' => __( 'Slider image 2','op001' ),
		'priority' => 150,
	]
);

Framework::control(
	'image',
	'slider-image-03',
	[
		'label' => __( 'Slider image 3','op001' ),
		'priority' => 170,
	]
);

if ( ! is_customize_preview() ) {
	return;
}

/***
 * Panel: Layout
 */
Framework::panel(
	'panel-option',
	[
		'title' => __( 'Theme options', 'op001' ),
		'priority' => 1020,
	]
);

/**
 * Section: Site header
 */
Framework::section(
	'section-slider',
	[
		'title' => __( 'Slider', 'op001' ),
		'description' => __( 'Setting for image slider', 'op001' ),
		'priority' => 130,
	]
);

$panel   = Framework::get_panel( 'panel-option' );
$section = Framework::get_section( 'section-slider' );
$control = Framework::get_control( 'slider-image-01' );
$control->join( $section )->join( $panel );

$panel   = Framework::get_panel( 'panel-option' );
$section = Framework::get_section( 'section-slider' );
$control = Framework::get_control( 'slider-image-02' );
$control->join( $section )->join( $panel );

$panel   = Framework::get_panel( 'panel-option' );
$section = Framework::get_section( 'section-slider' );
$control = Framework::get_control( 'slider-image-03' );
$control->join( $section )->join( $panel );