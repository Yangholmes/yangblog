<?php
/**
 * The header for my theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link
 *
 * @package WordPress
 * @subpackage Yangholmes
 * @since 1.0
 * @version 1.0
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0 user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favico.ico" type="image/x-icon">
  <title><?php bloginfo( 'name' ); ?></title>

  <!-- Fire the wp_head action. Plugins and WordPress core use this function to insert crucial elements into your document. -->
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="header">
      <div class="logo-title">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/image/The_Flash.jpg" alt="">
        <span class="title"><?php bloginfo( 'name' ); ?></span>
      </div>
      <div class="field-search">
        <input type="search">
        <span class="search-icon fa fa-search"></span>
      </div>
      <nav class="nav"></nav>
    </div>
  </header>
