<?php

/**
 * [add_action description]
 * @var [type]
 */
function yangholmesSetup () {

}
add_action( 'after_setup_theme', 'yangholmesSetup' );


/**
 * load custom stylesheet
 * @var [type]
 */
function yangholmesStyle () {
  wp_enqueue_style( 'yangholme-style', get_stylesheet_uri() ); // call wp_enqueue_style. Scripts and styles should not be registered or enqueued until the wp_enqueue_scripts, admin_enqueue_scripts, or login_enqueue_scripts hooks.
  wp_enqueue_style( 'font-awesome', get_theme_file_uri( '/assets/font/font-awesome-4.7.0/css/font-awesome.min.css' ) );
}
add_action( 'wp_enqueue_scripts', 'yangholmesStyle' );

/**
 * load custom script
 *
 */
function yangholmesScript () {
  wp_enqueue_script('jquery');
  wp_enqueue_script('universal-script', get_theme_file_uri( '/assets/js/universal.js') );
}
add_action( 'wp_enqueue_scripts', 'yangholmesScript' );
