<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">

    <?php wp_head(); ?>

  </head>
  <body>

    <div class="wrapper">
      <header class="header">
        <div class="logo">
          <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div class="social-nav">
          <a href=""><i class="fa fa-twitter"></i></a>
          <a href=""><i class="fa fa-facebook"></i></a>
          <a href=""><i class="fa fa-google-plus"></i></a>
          <a href=""><i class="fa fa-instagram"></i></a>
          <a href=""><i class="fa fa-github"></i></a>
        </div>
        <a href="" class="ui-button"><i class="fa fa-bars"></i></a>
      </header>
