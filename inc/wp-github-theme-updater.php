<?php
$updater = new Inc2734\WP_GitHub_Theme_Updater\Bootstrap(
	get_template(),
	'Olein-jp',
	'oleinpress-001'
);

add_filter(
	'inc2734_github_theme_updater_zip_url_Olein-jp/oleinpress-001',
	function( $url ) {
		if ( 0 !== strpos( $url, 'https://op.olein-design.com/' ) ) {
			return false;
		}
		return $url;
	}
);

add_filter(
	'inc2734_github_theme_updater_request_url_Olein-jp/oleinpress-001',
	function( $url ) {
		return 'https://op.olein-design.com/op-webhooks/001/response.json';
	}
);