<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Yangholmes
 * @since 1.0
 * @version 1.0
 */

if ( !is_active_sidebar( 'sidebar-left' ) ) {
	return;
}
?>

<aside class="widget-area">
	<?php dynamic_sidebar( 'sidebar-left' ); ?>
</aside><!-- widget area -->
