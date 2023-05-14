<?php
/**
 * Show the appropriate content for the Video post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ajima
 * @since Ajima 1.0.0
 */

$content = get_the_content();

if ( has_block( 'core/video', $content ) ) {
	ajima_print_first_instance_of_block( 'core/video', $content );
} elseif ( has_block( 'core/embed', $content ) ) {
	ajima_print_first_instance_of_block( 'core/embed', $content );
} else {
	ajima_print_first_instance_of_block( 'core-embed/*', $content );
}

// Add the excerpt.
if ( absint(ajima_get_option( 'excerpt_length' )) != '0'){
    the_excerpt();
}