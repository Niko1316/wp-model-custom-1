<?php
/*
Plugin Name: o Font Loader
Plugin URI: https://oclock.io
Description: Système d'inclusion automatique des googles fonts
Author: Fusion !!!
Version: 0.0.1
*/

if (!defined('WPINC')) {
  die('Try again ;)');
}

function ofl_fonts() {

     $list = [
    'Roboto' => '100,400,700',
    'Oswald' => '',
    'Poppins' => '400,700i'
  ];

  $url_prefix = 'https://fonts.googleapis.com/css?family=';

  // <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">
  // <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  // <link href="https://fonts.googleapis.com/css?family=Poppins:400,700i" rel="stylesheet">
ksort($list);

  $url_sufixe = '';

  foreach ($list as $font_name => $font_weight) {

      if(!empty($font_weight)) {
          $font_weight= ':' .$font_weight;
      }

     $url_sufixe .= $font_name. ':' .$font_weight. '|';
  }
  $url_sufixe = substr($url_sufixe, 0, -1);

  return $url_prefix.$url_sufixe;
}

// function ofl_load_fonts_old() {
//
//   echo '<link ref="stylesheet" href="'.ofl_fonts().'">';
// }
// add_action('wp_head', 'ofl_load_fonts');

function ofl_load_fonts() {

  wp_enqueue_style('ofl_fonts', ofl_fonts());

}
add_action('wp_enqueue_scripts', 'ofl_load_fonts');
