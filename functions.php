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
}
add_action( 'wp_enqueue_scripts', 'yangholmesStyle' );
