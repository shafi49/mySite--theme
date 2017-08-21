<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package mySite
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function mysite_body_classes( $classes ) {
	// add a class bg_graphic to the body
	$classes[] = 'bg_graphic';
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// add a 'front-page' class to the front-page
	if ( is_front_page() ) {
		$classes[] = 'front-page';
	}

	return $classes;
}
add_filter( 'body_class', 'mysite_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function mysite_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'mysite_pingback_header' );
