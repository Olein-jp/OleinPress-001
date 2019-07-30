<?php
use Inc2734\WP_Customizer_Framework\Framework;

$theme_link = sprintf(
	'<a href="https://olein-design.com" target="_blank">%s</a>',
	__( 'Olein Design', 'op001' )
);

$wordpress_link = sprintf(
	'<a href="https://wordpress.org/" target="_blank">%s</a>',
	__( 'WordPress', 'op001' )
);

$theme_by = sprintf(
	__( 'Theme: OleinPress - Just Blog by %s', 'op001' ),
	$theme_link
);

$powered_by = sprintf(
	__( 'Powered by %s', 'op001' ),
	$wordpress_link
);

$copyright = $theme_by . ' ' . $powered_by;

Framework::control(
	'text',
	'op-copyright',
	[
		'transport'   => 'postMessage',
		'label'       => __( 'Copyright', 'op001' ),
		'description' => __( 'HTML available', 'op001' ),
		'default'     => $copyright,
		'type'        => 'option',
	]
);

if ( ! is_customize_preview() ) {
	return;
}

$section = Framework::get_section( 'title_tagline' );
$control = Framework::get_control( 'op-copyright' );

$control->join( $section );
$control->partial( [
	'selector' => '.p-copyright',
] );