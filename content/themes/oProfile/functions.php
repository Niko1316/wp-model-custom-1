<?php

if (!function_exists('oprofile_setup')):

  function oprofile_setup() {

    /*
      * Enable support for Post Thumbnails on posts and pages.
      *
      * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support('post-thumbnails');

    /*
      * Let WordPress manage the document title.
      * By adding theme support, we declare that this theme does not use a
      * hard-coded <title> tag in the document head, and expect WordPress to
      * provide it for us.
    */
    add_theme_support( 'title-tag' );

    // This theme uses wp_nav_menu() in one location.
    // register_nav_menus( array(
    // register_nav_menus( [
		register_nav_menus([
      'main-nav' => 'Menu principal de oProfile'
    ]);

    // Supprime WP EMOJI
    remove_action( 'wp_head', 'print_emoji_detection_script', 7);
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_print_styles', 'print_emoji_styles');

    // Supprime le lien vers Windows Live Editor Manifest
    remove_action( 'wp_head', 'wlwmanifest_link' );

    // Supprime le lien RSD + XML
    remove_action( 'wp_head', 'rsd_link' );

    // Supprime la meta generator
    remove_action( 'wp_head', 'wp_generator' );

    show_admin_bar( false );
  }

endif;
add_action ('after_setup_theme', 'oprofile_setup');

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
