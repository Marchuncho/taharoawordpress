<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'slideshow'		=> __( 'Tamaño del slideshow' ),
		'custom_logo'	=> __( 'Tamaño personalizado del logo' )
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'slideshow', 800, 600, true );			// Personalización del tamaño del slideshow
	add_image_size( 'custom_logo', 800, 600, true );		// Personalización del tamaño del logo
  add_image_size( 'cardinicio', 348, 523, true );
  add_image_size( 'galery', 350, 160, true );
  add_image_size( 'clases', 447, 240, true );

	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}
