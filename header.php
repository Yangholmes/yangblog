<?php
/**
 * The header for my theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link
 *
 * @package WordPress
 * @subpackage yangholmes
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
  <title><?php bloginfo('name'); ?></title>

  <!-- Fire the wp_head action. Plugins and WordPress core use this function to insert crucial elements into your document. -->
  <?php wp_head(); ?>
</head>

<body>
  <header>

    <div class="logo-title">
      <img class="logo" src="" alt="">
      <span class="title">Yangholmes Blog</span>
    </div>
    <div class="field-search"><input type="search"></div>
    <nav class="nav"></nav>

  </header>