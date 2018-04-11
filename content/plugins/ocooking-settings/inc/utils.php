<?php

function show_ocooking_facebook() {

  $ocooking_settings_options = get_option('ocooking_settings_option_name' );

  $lien_facebook_0 = $ocooking_settings_options['lien_facebook_0']; // Lien Facebook

  $output = '';

  if (!empty($lien_facebook_0)) {

    $output = '<a href="'.$lien_facebook_0.'" class="navbar-item">';
    $output .= '  <span class="icon">';
    $output .= '    <i class="fa fa-facebook"></i>';
    $output .= '  </span>';
    $output .= '</a>';
  }

  echo $output;
}

function show_ocooking_twitter() {

  $ocooking_settings_options = get_option('ocooking_settings_option_name' );

  $lien_twitter_1 = $ocooking_settings_options['lien_twitter_1']; // Lien Facebook

  $output = '';

  if (!empty($lien_twitter_1)) {

    $output = '<a href="'.$lien_twitter_1.'" class="navbar-item">';
    $output .= '  <span class="icon">';
    $output .= '    <i class="fa fa-twitter"></i>';
    $output .= '  </span>';
    $output .= '</a>';
  }

  echo $output;
}

function show_ocooking_instagram() {

  $ocooking_settings_options = get_option('ocooking_settings_option_name' );

  $lien_instagram_2 = $ocooking_settings_options['lien_instagram_2']; // Lien Facebook

  $output = '';

  if (!empty($lien_instagram_2)) {

    $output = '<a href="'.$lien_instagram_2.'" class="navbar-item">';
    $output .= '  <span class="icon">';
    $output .= '    <i class="fa fa-instagram"></i>';
    $output .= '  </span>';
    $output .= '</a>';
  }

  echo $output;
}
