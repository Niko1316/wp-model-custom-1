<?php

function get_recipe_ingredients($id) {

  $output = '';

  $list = wp_get_post_terms($id, 'ingredient');

  foreach ($list as $ingredient) {

    $output .= '<a href="'.get_term_link($ingredient).'" class="tag is-dark">';
    $output .= $ingredient->name;
    $output .= '</a> ';
  }

  return $output;
}

function get_recipe_types($id) {

  $output = '';

  $list = wp_get_post_terms($id, 'type');

  foreach ($list as $type) {

    $output .= '<a href="'.get_term_link($type).'" class="level-item button is-outlined">';
    $output .= $type->name;
    $output .= '</a> ';
  }

  return $output;
}
