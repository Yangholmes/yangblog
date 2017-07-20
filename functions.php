<?php

/**
 * [add_action description]
 * @var [type]
 */
function yangholmesSetup () {
  /*
   * Make theme available for translation.
   * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
   * based on Twenty Seventeen
   */
  load_theme_textdomain( 'Yangholmes' );

  // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'Yangholmes' ),
	) );

  // Set the default content width.
  $GLOBALS['content_width'] = 525;

  // Add theme support for selective refresh for widgets.
  add_theme_support( 'customize-selective-refresh-widgets' );

  // Define and register starter content to showcase the theme on new sites.
	$starterContent = array(
		'widgets' => array(
			// Place three core-defined widgets in the sidebar area.
			'sidebar-left' => array(
        'calendar',
        'categories',
			),

      // Add the core-defined business info widget to the footer area.
			'footer' => array(
				'text_business_info',
			),
    ),
    // Default to a static front page and assign the front and posts pages.
		'options' => array(
			'show_on_front' => 'page',
			'page_on_front' => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),
    // Set the front page section theme mods to the IDs of the core-registered pages.
		'theme_mods' => array(
			'panel_1' => '{{homepage-section}}',
			'panel_2' => '{{about}}',
			'panel_3' => '{{blog}}',
			'panel_4' => '{{contact}}',
		),
    // Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "top" location.
			'top' => array(
				'name' => __( 'Top Menu', 'twentyseventeen' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
    ),
  );

  /**
	 * Filters Twenty Seventeen array of starter content.
	 *
	 * @since Twenty Seventeen 1.1
	 *
	 * @param array $starter_content Array of starter content.
	 */
	$starterContent = apply_filters( 'twentyseventeen_starter_content', $starterContent );
  add_theme_support( 'starter-content', $starterContent );
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
function yangholmesWidgetsInit() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'Yangholmes' ),
		'id'            => 'sidebar-left',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'Yangholmes' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'yangholmesWidgetsInit' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );
