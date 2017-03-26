<?php
/**
 * Arh project functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Arh_project
 */

if ( ! function_exists( 'arh_project_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function arh_project_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Arh project, use a find and replace
	 * to change 'arh-project' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'arh-project', get_template_directory() . '/languages' );

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
		'menu_1' => esc_html__( 'one', 'arh-project' ),
        'menu_2' => esc_html__('Two', 'arh-project-2'),
        'menu_3' => esc_html__('three', 'arh_project-3'),
        'menu_4' => esc_html__('four', 'arh_project-4')
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
	add_theme_support( 'custom-background', apply_filters( 'arh_project_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'arh_project_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function arh_project_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'arh_project_content_width', 640 );
}
add_action( 'after_setup_theme', 'arh_project_content_width', 0 );


/**
 * styles
 */
function arh_project_scripts() {
	wp_enqueue_style( 'arh-project-style', get_template_directory_uri() . '/assets/css/style.css' );

	wp_enqueue_script('jquery_custom', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js');
	wp_enqueue_script('bootstrap_custom', get_template_directory_uri() .
        '/libs/bootstrap-sass/assets/javascripts/bootstrap.min.js');
	wp_enqueue_script('slick_script', get_template_directory_uri() . '/libs/slick/js/slick.min.js');

}
add_action( 'wp_enqueue_scripts', 'arh_project_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/function/posts.php';

