<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); /* Reviens à do_action('wp_head');*/ ?>

</head>
<body>

  <div class="wrapper">
    <header class="header">
      <nav class="navbar">
        <div class="navbar-brand">
          <a href="<?php echo home_url(); ?>" class="navbar-item">
            <span class="icon">
              <i class="fa fa-cutlery"></i>
            </span>
            oCooking
          </a>
        </div>
        <div class="navbar-menu">
          <div class="navbar-start">
            <?php get_template_part('template-parts/nav/nav', 'header'); ?>
          </div>
          <div class="navbar-end">
            <?php show_ocooking_facebook(); ?>
            <?php show_ocooking_twitter(); ?>
            <?php show_ocooking_instagram(); ?>
            <a href="#" class="navbar-item toggle-menu">
              <span class="icon">
                <i class="fa fa-bars"></i>
              </span>
            </a>
          </div>
        </div>
      </nav>
    </header>
    <div class="container">
