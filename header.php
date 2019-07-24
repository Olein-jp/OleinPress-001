<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oleinpress-001
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="l-site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'op001' ); ?></a>

	<header id="masthead" class="l-site-header">
		<div class="p-site-branding c-container">
			<?php
			if ( get_custom_logo() ) {
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="p-site-title"><?php the_custom_logo(); ?></h1>
				<?php else: ?>
					<p class="p-site-title"><?php the_custom_logo(); ?></p>
			<?php
				endif;
			} else {
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="p-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
												rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				else :
					?>
					<p class="p-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
											   rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;
			}
			?>
			<?php
			$op001_description = get_bloginfo( 'description', 'display' );
			if ( $op001_description || is_customize_preview() ) :
				?>
				<p class="p-site-description"><?php echo $op001_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>
		<button class="p-hamburger hamburger hamburger--squeeze" type="button" aria-label="Menu" aria-controls="navigation">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
		</button>
		<div class="p-global-menu-wrap c-container">
			<?php
			wp_nav_menu( array(
				'theme_location'  => 'global-menu',
				'menu_id'         => 'global-menu',
				'menu_class'      => 'p-global-menu__list',
				'container'       => 'nav',
				'container_id'    => 'navigation',
				'container_class' => 'p-global-menu',
			) );
			?>
		</div><!-- #site-navigation -->
	</header><!-- #masthead -->
	<?php if ( is_home() ) : ?>
	<div class="p-slider">
		<div class="p-slider__item">
			<img src="<?php echo get_template_directory_uri() . '/assets/images/sample-image-01.jpg'; ?>" alt="" class="p-slider__image">
		</div>
	</div>
	<?php endif; ?>

	<?php
	if ( ! is_home() ) {
		get_template_part( 'template-parts/breadcrumbs' );
	} ?>

	<div id="content" class="l-site-content <?php op001_container_switch(); ?>">
