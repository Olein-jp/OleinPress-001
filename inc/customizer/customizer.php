<?php
//use Inc2734\WP_Customizer_Framework\Framework;
/*
 * Remove default panel
 */
add_action( 'customize_register', 'op_remove_default_customizer_section' );
function op_remove_default_customizer_section( $wp_customize ) {
	// remove colors
	$wp_customize->remove_section('colors');
	// remove header image
	$wp_customize->remove_section('header_image');
	// remove display header text control
	$wp_customize->remove_control('display_header_text');
}

/**
 * Layout
 */
require get_template_directory() . '/inc/customizer/customizer-layout.php';

/**
 * Theme option
 */
require get_template_directory() . '/inc/customizer/customizer-slider.php';

/**
 * title tagline
 */
require get_template_directory() . '/inc/customizer/customizer-title-tagline.php';