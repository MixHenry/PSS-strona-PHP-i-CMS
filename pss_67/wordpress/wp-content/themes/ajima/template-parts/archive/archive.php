<?php
/**
 * Show the excerpt.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ajima
 * @since Ajima 1.0.0
 */
if ( absint(ajima_get_option( 'excerpt_length' )) != '0'){
    the_excerpt();
}