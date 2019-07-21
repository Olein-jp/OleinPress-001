<?php
/**
 * oleinpress-001 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package oleinpress-001
 */

if ( ! function_exists( 'op001_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function op001_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on oleinpress-001, use a find and replace
		 * to change 'op001' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'op001', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'global-menu' => esc_html__( 'Global Menu', 'op001' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'op001_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 700,
			'width'       => 150,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'op001_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function op001_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'op001_content_width', 640 );
}
add_action( 'after_setup_theme', 'op001_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function op001_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'op001' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'op001' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'op001' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'op001' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="c-widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'op001_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function op001_scripts() {
	wp_enqueue_style( 'op001-style', get_template_directory_uri() . '/assets/css/style.min.css' );

	wp_enqueue_script( 'op001-script', get_template_directory_uri() . '/assets/js/script.min.js', array( 'jquery' ), '20190718', true );

	wp_enqueue_style( 'op001-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700&display=swap' );

	wp_enqueue_style( 'op001-fontawesome', get_template_directory_uri() . '/assets/packages/fontawesome/css/all.min.css' );

	wp_enqueue_script( 'op001-superfish', get_template_directory_uri() . '/assets/packages/superfish/js/superfish.min.js', array( 'jquery' ), '1.7.10', true );

	wp_enqueue_script( 'op001-slick-js', get_template_directory_uri() . '/assets/packages/slick/slick.min.js', array( 'jquery' ), '1.8.1', true );

	wp_enqueue_style( 'op001-slick-css', get_template_directory_uri() . '/assets/packages/slick/slick.css' );

	wp_enqueue_style( 'op001-slick-theme-css', get_template_directory_uri() . '/assets/packages/slick/slick-theme.css' );

//	wp_enqueue_script( 'op001-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

//	wp_enqueue_script( 'op001-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'op001_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load composer autoload.php
 */
require get_template_directory() . '/vendor/autoload.php';

/**
 * custom posts pagination
 */
function op001_custom_the_posts_pagination( $template ) {
	$template = '
	<nav class="p-posts-pagination %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="p-posts-pagination__list">%3$s</div>
	</nav>';
	return $template;
}
add_filter( 'navigation_markup_template', 'op001_custom_the_posts_pagination' );