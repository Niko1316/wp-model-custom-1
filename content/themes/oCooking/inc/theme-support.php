<?php

function ocooking_setup() {

  // RSS
  add_theme_support('automatic-feed-links');

  // Title automatique
  add_theme_support('title-tag');

  // Menus de navigation
  register_nav_menus([
    'primary' => 'Menu principal de navigation présent à droite',
    'header' => 'Menu de navigation du header'
  ]);

  // Les images de mise en avant
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'ocooking_setup');
