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
