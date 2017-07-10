<?php
/**
 * mySite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mySite
 */

if ( ! function_exists( 'mysite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mysite_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on mySite, use a find and replace
	 * to change 'mysite' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mysite', get_template_directory() . '/languages' );

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
		'main_menu' => esc_html__( 'Main Menu', 'mysite' ),
		'social_links' => esc_html__('Social Links', 'mysite'),
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
	add_theme_support( 'custom-background', apply_filters( 'mysite_custom_background_args', array(
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
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'mysite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mysite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mysite_content_width', 640 );
}
add_action( 'after_setup_theme', 'mysite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mysite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mysite' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mysite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mysite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mysite_scripts() {
	// some other stylesheets
	//ie8_css
	wp_enqueue_style ('ie8_css', get_stylesheet_directory_uri() . '/assets/css/ie8.css', array(), '', '');
	// load the above script only if it is IE 9
	wp_style_add_data( 'ie8_css', 'conditional', 'lte IE 8' );
	//fontawesome_css
	wp_enqueue_style ('fontawesome_css', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css', array('ie8_css'), '', '');
	//theme stylesheet
	wp_enqueue_style( 'mysite-style', get_stylesheet_uri(), array('fontawesome_css', 'ie8_css'), '', '');


	wp_enqueue_script( 'mysite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mysite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	//custom theme js files
	// html5shiv_js
	// load this script in the header
	wp_enqueue_script ('html5shiv_js', get_template_directory_uri() . '/assets/js/ie/html5shiv.js', array(), '', false);
	// load above script only if lower than IE 9
	wp_script_add_data( 'html5shiv_js', 'conditional', 'lt IE 9' );
	// scrollzer_js
	wp_enqueue_script ('scrollzer_js', get_template_directory_uri() . '/assets/js/jquery.scrollzer.min.js', array('jquery'), '', true);
	//scrolly_js
	wp_enqueue_script ('scrolly_js', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array('scrollzer_js'), '', true);
	//skel_js
	wp_enqueue_script ('skel_js', get_template_directory_uri() . '/assets/js/skel.min.js', array('scrolly_js'), '', true);
	//util_js
	wp_enqueue_script ('util_js', get_template_directory_uri() . '/assets/js/util.js', array('skel_js'), '', true);
	// respond_js
	wp_enqueue_script ('respond_js', get_template_directory_uri() . '/assets/js/ie/respond.min.js', array('util_js'), '', true);
	// load this script in an conditional tag
	wp_script_add_data( 'respond_js', 'conditional', 'lt IE 9' );
	// main_js
	wp_enqueue_script ('main_js', get_template_directory_uri() . '/assets/js/main.js', array ('util_js'), '', true);
}
add_action( 'wp_enqueue_scripts', 'mysite_scripts' );

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
require get_template_directory() . '/inc/jetpack.php';
