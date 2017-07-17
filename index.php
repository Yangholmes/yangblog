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

<div class="index content-area">
  <div class="sidebar"></div>
  <main class=main></main>
  <div class="ad-bar"></div>
</div>

<?php get_footer() ?>
