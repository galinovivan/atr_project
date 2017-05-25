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



/**
 * styles
 */
function arh_project_scripts() {
	wp_enqueue_style( 'arh-project-style', get_template_directory_uri() . '/assets/css/style.css' );

	wp_enqueue_script('jquery_custom', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js');
	wp_enqueue_script('jquery_forms', get_template_directory_uri() . '/libs/jquery-form/jquery-form.js');
	wp_enqueue_script('bootstrap_custom', get_template_directory_uri() .
        '/libs/bootstrap-sass/assets/javascripts/bootstrap.min.js');
	wp_enqueue_script('slick_script', get_template_directory_uri() . '/libs/slick/js/slick.min.js');

	wp_localize_script('jquery_custom', 'ajax_var',
		array(
			'url' => admin_url('admin-ajax.php')
		));
}
add_action( 'wp_enqueue_scripts', 'arh_project_scripts' );

add_action('wp_ajax_nopriv_login_me', 'loginMe');
function loginMe() {
	require_once dirname(__FILE__) . '/login.php';
}

add_action('wp_ajax_logout_me', 'logoutMe');

function logoutMe() {
	require_once dirname(__FILE__) . '/logout.php';
}

add_action('wp_ajax_nopriv_register_me', 'registerMe');


function registerMe() {
	require_once dirname(__FILE__) . '/register.php';
}

function set_html_content_type() {
	return 'text/html';
}

function updateUserUrl($userId, $url) {
	wp_update_user(array('ID' => $userId, 'user_url' => $url));
}
/**
 * Implement the Custom Header feature.
 */
//

add_filter('show_admin_bar', '__return_false');



function js_variables(){
	$variables = array (
		'ajax_url' => admin_url('admin-ajax.php'),
		'is_mobile' => wp_is_mobile()

	);
	echo(
	'<script type="text/javascript">window.wp_data = ' .
        json_encode($variables) .
        ';</script>'
    );
}

/**
 *	Ввозвращает дату регистрацию пользователя
 * 	@param $userId
 *	 @return string date
 */
function getUserRegistered($userId, $dateFormat = 'd.m') {
	$userData = get_userdata($userId);
	$registerDate = $userData->user_registered;



	$registerDate = strtotime($registerDate);
	$registerDate = date($dateFormat, $registerDate);
	return $registerDate;
}


add_action('wp_head','js_variables');

require get_template_directory() . '/function/update_user.php';

require get_template_directory() . '/function/judge.php';

require get_template_directory() . '/function/partners.php';

require get_template_directory() . '/function/projects.php';

require get_template_directory() . '/function/articles.php';

require get_template_directory() . '/function/contact-form.php';

require get_template_directory() . '/function/reg_setting.php';


require get_template_directory() . '/function/language.php';



