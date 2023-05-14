<?php
/**
 * Displays progressbar
 *
 * @package Ajima
 */

$show_progressbar = ajima_get_option( 'show_progressbar' );

if ( $show_progressbar ) :
	$progressbar_position = ajima_get_option( 'progressbar_position' );
	echo '<div id="ajima-progress-bar" class="theme-progress-bar ' . esc_attr( $progressbar_position ) . '"></div>';
endif;
