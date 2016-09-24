<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Meshki</title>

    <!-- Meshki CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/meshki/1.2.2/meshki.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/blog.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>

  <body>

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
