<?php
/**
 * Yangholmes: Customizer
 *
 * @package WordPress
 * @subpackage Yangholmes
 * @since 1.0
 */

 /**
  * Add postMessage support for site title and description for the Theme Customizer.
  *
  * @param WP_Customize_Manager $wp_customize Theme Customizer object.
  */
function yangholmesCustomizeRegister( $wp_customize ) {
  $wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';

  $wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'yangholmesCustomizePartialBlogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'yangholmesCustomizePartialBlogdescription',
	) );
}
add_action( 'customize_register', 'yangholmesCustomizeRegister' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Yangholmes 1.0
 * @see yangholmesCustomizeRegister()
 *
 * @return void
 */
function yangholmesCustomizePartialBlogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Yangholmes 1.0
 * @see yangholmesCustomizeRegister()
 *
 * @return void
 */
function yangholmesCustomizePartialBlogdescription() {
	bloginfo( 'description' );
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function yangholmesCustomizePreviewJs() {
	wp_enqueue_script( 'yangholmes-customize-preview', get_theme_file_uri( '/assets/js/customize-preview.js' ), array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'yangholmesCustomizePreviewJs' );
/**
 * Load dynamic logic for the customizer controls area.
 */
function yangholmesPanelsJs() {
	wp_enqueue_script( 'yangholmes-customize-controls', get_theme_file_uri( '/assets/js/customize-controls.js' ), array(), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'yangholmesPanelsJs' );
