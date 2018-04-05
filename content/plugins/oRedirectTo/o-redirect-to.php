<?php
/*
Plugin Name: oRedirectTo
Plugin URI: https://oclock.io
Description: plugin qui permet de réaliser une redirection automatique en présence d'un custom field précis
Author: Fusion !!!
Version: 0.0.1
*/

if (!defined('WPINC')) {
  die('Try again ;)');
}

function ort_redirection(){

    global $post;

    if (is_page()) {

        $redirect_url = get_post_meta($post->ID, 'oRedirection', true );

        if(!empty($redirect_url) && $redirect_url != get_permalink($post->ID)) {

            wp_redirect($redirect_url);
        }
    }

}

add_action('get_header', 'ort_redirection');
