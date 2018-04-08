<?php

// On ajoute ici ce qui sera executé dans les hooks WP_HEAD & WP_FOOTER
function ocooking_scripts() {

  // Mon fichier de style css
  wp_enqueue_style(
    'ocooking-css',
    get_theme_file_uri('/public/css/app.css'));

  // Je déclare mon app.js après vendor.js & dans le footer
  wp_enqueue_script(
    'ocooking-app-js',
    get_theme_file_uri('/public/js/app.js'),
    ['ocooking-vendor-js'],
    '1.0.0',
    true);

  // Je déclare mon vendor.js dans le footer
  wp_enqueue_script(
    'ocooking-vendor-js',
    get_theme_file_uri('/public/js/vendor.js'),
    [],
    '1.0.0',
    true);
}

add_action('wp_enqueue_scripts', 'ocooking_scripts');
