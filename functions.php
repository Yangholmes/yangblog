<?php

/**
 * [add_action description]
 * @var [type]
 */
function yangholmesSetup () {
  // Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		'widgets' => array(
			// Place three core-defined widgets in the sidebar area.
			'sidebar-1' => array(
				'text_business_info',
				'search',
				'text_about',
			)
    )
  );
  add_theme_support( 'starter-content', $starter_content );
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

/**
 * Filter the excerpt length to 100 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function yangholmesExcerptLength() {
    return 10;
}
add_filter( 'excerpt_length', 'yangholmesExcerptLength');
/**
 * Filter the ex
 * @return [type] [description]
 */
function yangholmesExcerptMore() {
    return '...';
}
add_filter( 'excerpt_more', 'yangholmesExcerptMore' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function yangholmes_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'sidebar', 'Yangholmes' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'Yangholmes' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'yangholmes_widgets_init' );
