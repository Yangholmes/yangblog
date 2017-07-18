<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the three required files for a theme (the other two being style.css and functions.php).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Yangholmes
 * @since 1.0
 * @version 1.0
 */

get_header();

?>

<div class="index">
  <div class="content-area">
    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>
    <main class=main>
      <?php
        if ( have_posts() ) {
        	while ( have_posts() ) {
        		the_post();
        		// Post Content here
            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'template-parts/post/content', get_post_format() );
        	} // end while
        } // end if
        ?>
    </main>
    <div class="ad-bar"></div>
  </div>
</div>

<?php get_footer() ?>
