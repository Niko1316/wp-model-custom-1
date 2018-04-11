<?php
function ocooking_register_rest_fields() {
  register_rest_field(
    'recipe',
    'thumbnail',
    [
      'get_callback' => 'ocooking_rest_api_thumbnail',
      'update_callback' => null,
      'schema'  => null
    ]
  );
}
function ocooking_rest_api_thumbnail($recipe, $field_name, $request) {
  $output = array();
  $output['size-thumbnail'] = wp_get_attachment_image_src($recipe['featured_media']);
  $output['size-medium'] = wp_get_attachment_image_src($recipe['featured_media'], 'medium');
  $output['size-full'] = wp_get_attachment_image_src($recipe['featured_media'], 'full');
  return $output;
}
// On se greffe au hook `rest_api_init`
add_action( 'rest_api_init', 'ocooking_register_rest_fields' );
