<?php

if (!function_exists('oblog_scripts')):
  // Fonction qui ajoute les styles & scripts pour le fonctionnement de oblog
  function oblog_scripts()
  {

    wp_enqueue_style(
      'oblog_app',
      get_theme_file_uri('/public/css/app.css'),
      ['oblog_vendors'],
      '1.0.0'
    );

    wp_enqueue_style(
      'oblog_vendors',
      get_theme_file_uri('/public/css/vendors.css'),
      [],
      '1.0.0'
    );

    wp_enqueue_script(
      'oblog_script',
      get_theme_file_uri('/public/app.js'),
      '1.0.0'
    );

  }
endif;

// Ajout au hook wp_enqueue_scripts la fonction oblog_scripts.
add_action( 'wp_enqueue_scripts', 'oblog_scripts' );
