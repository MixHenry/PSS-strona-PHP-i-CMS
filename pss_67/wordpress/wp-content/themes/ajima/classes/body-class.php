<?php
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ajima_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
    $header_style = ajima_get_option('header_style');
    $classes[] = ' ajima-'.$header_style;
    // Get the color mode of the site.
    $enable_dark_mode = ajima_get_option( 'enable_dark_mode' );
    $enable_logo_transparent_bg = ajima_get_option( 'enable_logo_transparent_bg' );
    if ( $enable_logo_transparent_bg ) {
        $classes[] = 'ajima-transparent-logo';
    } 
    if ( $enable_dark_mode ) {
        $classes[] = 'ajima-dark-mode';
    } else {
        $classes[] = 'ajima-light-mode';
    }

	// Get appropriate class for the sidebar layout to work
	$page_layout = ajima_get_page_layout();
    if('no-sidebar' != $page_layout ){
        $classes[] = 'has-sidebar '.esc_attr($page_layout);
    }else{
        $classes[] = esc_attr($page_layout);
    }

	return $classes;
}
add_filter( 'body_class', 'ajima_body_classes' );
