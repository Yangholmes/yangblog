<?php
/**
 * Additional features to allow styling of the templates
 *
 * @package WordPress
 * @subpackage Yangholmes
 * @since 1.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function yangholmesBodyClasses( $classes ) {
  // Add class if we're viewing the Customizer for easier styling of theme options.
	if ( is_customize_preview() ) {
		$classes[] = 'yangholmesBustCizer';
	}

  // Add a class if there is a custom header.
  if ( has_header_image() ) {
    $classes[] = 'has-header-image';
  }

  // Add class if sidebar is used.
  if ( is_active_sidebar( 'sidebar-left' ) && ! is_page() ) {
    $classes[] = 'has-sidebar';
  }
}
add_filter( 'body_class', 'yangholmesBodyClasses' );
