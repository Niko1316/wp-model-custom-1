<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>

  <script>require('initialize');</script>
</head>
<body>
  <div class="wrapper">
    <?php get_template_part('template-parts/header/header'); ?>
    <main class="main">
