<?php
$updater = new Inc2734\WP_GitHub_Theme_Updater\Bootstrap( get_template(), 'Olein-jp', 'oleinpress-001' );

add_filter(
	'inc2734_github_theme_updater_request_url',
	function( $url, $user_name, $repository ) {
		if ( 'Olein-jp' === $user_name && 'oleinpress-001' === $repository ) {
			return 'https://op.olein-design.com/op-webhooks/001/response.json';
		}
		return $url;
	},
	10,
	3
);