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

Framework::control(
	'number',
	'auto-play-speed',
	[
		'label' => __( 'Auto play speed', 'op001' ),
		'description' => __( 'You can set play speed of slider changing to next image', 'op001' ),
		'priority' => 190,
		'default' => '3000',
		'input_attrs' => [
			'step' => 100,
		],
	]
);

Framework::control(
	'number',
	'speed',
	[
		'label' => __( 'During speed', 'op001' ),
		'description' => __( 'You can set during speed of slider changing to next image', 'op001' ),
		'priority' => 210,
		'default' => '300',
		'input_attrs' => [
			'step' => 100,
		],
	]
);

if ( ! is_customize_preview() ) {
	return;
}

/**
 * Section: slider
 */
Framework::section(
	'section-slider',
	[
		'title' => __( 'Slider', 'op001' ),
		'description' => __( 'Setting for image slider', 'op001' ),
		'priority' => 1050,
	]
);

$section = Framework::get_section( 'section-slider' );
$control = Framework::get_control( 'slider-image-01' );
$control->join( $section );

$section = Framework::get_section( 'section-slider' );
$control = Framework::get_control( 'slider-image-02' );
$control->join( $section );

$section = Framework::get_section( 'section-slider' );
$control = Framework::get_control( 'slider-image-03' );
$control->join( $section );

$section = Framework::get_section( 'section-slider' );
$control = Framework::get_control( 'auto-play-speed' );
$control->join( $section );

$section = Framework::get_section( 'section-slider' );
$control = Framework::get_control( 'speed' );
$control->join( $section );
