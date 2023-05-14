<?php
/**
 * Show the appropriate content for the Gallery post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ajima
 * @since Ajima 1.0.0
 */

 // Print the 1st gallery found.
if ( has_block( 'core/gallery', get_the_content() ) ) {
	ajima_print_first_instance_of_block( 'core/gallery', get_the_content() );
}
    if ( absint(ajima_get_option( 'excerpt_length' )) != '0'){
        the_excerpt();  
    }