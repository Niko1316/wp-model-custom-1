<?php
// Si ma fonction n'éxiste pas...
if (!function_exists('oprofile_scripts')):
  //Ajout des css & js au chargement de wp_head
  function oprofile_scripts()
  {
      // Déclaration d'un fichier de style
      wp_enqueue_style(
        'app.css',
        get_theme_file_uri('public/css/app.css'),
        ['vendors.css'],
        '1.0.0');
      // Déclaration d'un fichier de style
      wp_enqueue_style(
        'vendors.css',
        get_theme_file_uri('public/css/vendors.css'),
        [],
        '1.0.0');
      // Déclaration d'un fichier de script
      wp_enqueue_script(
        'app.js',
        get_theme_file_uri('public/js/app.js'),
        ['vendors.js'],
        '1.0.0',
        true);
      // Déclaration d'un fichier de script
      wp_enqueue_script(
        'vendors.js',
        get_theme_file_uri('public/js/vendors.js'),
        [],
        '1.0.0',
        true);
  }
endif;
add_action( 'wp_enqueue_scripts', 'oprofile_scripts' );
