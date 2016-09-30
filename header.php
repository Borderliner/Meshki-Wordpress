<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Meshki_Wordpress
 * @since  0.0.1
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Meshki CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/meshki/1.2.2/meshki.min.css" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/css/styles.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>

  <body <?php body_class(); ?>>

    <div class="sidenav push">
      <!-- Note that javascript:void(0) stops your page from jumping to the top -->
      <a href="javascript:void(0)" class="sidenav-close-button" onclick="meshki.closeNav()">&times;</a>
      <a href="">Home</a>
      <a href="https://github.com/Borderliner/Meshki">GitHub</a>
      <a href="http://borderliner.ir">About Me</a>
      <a href="https://github.com/Borderliner/Meshki/blob/master/README.md">About Meshki</a>
      <hr>
      <a href="javascript:void(0)" disabled>Share on:</a>
    </div>

    <div class="content">

      <div class="nav fixed">
        <ul>
          <!-- Note that javascript:void(0) stops your page from jumping to the top -->
          <li><a class="logo" href="javascript:void(0)" onclick="meshki.openNav()">Meshki</a></li>
          <li><a href="https://github.com/Borderliner/Meshki/releases">News</a></li>
          <li><a href="https://github.com/Borderliner/Meshki">GitHub</a></li>
          <li><a href="#components">Components</a></li>
        </ul>
      </div>

      <div class="container">
        <div class="row">
          <h3 class="text-center">Blog Title</h3>
          <p>Blog Description</p>
        </div>

        <!-- 2 <div>s need to be closed in footer -->
