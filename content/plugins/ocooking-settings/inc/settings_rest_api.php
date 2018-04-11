<?php
function ocooking_register_rest_fields() {
      resgister_rest_field(
          'recipe',
          'thumbnail_url',
          [
              'get_callback' => 'ocooking_rest_api_thumbnail',
              'update_callback' => null,
              'schema' => null
          ]
      );
}

function ocooking_rest_api_thumbnail() {
    return 'toto';
}

add_action('rest_api_init', 'ocooking_register_rest_fields');
