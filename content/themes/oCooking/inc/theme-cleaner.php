<?php

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

// Supprime les extra feed rss
remove_action( 'wp_head', 'feed_links_extra', 3 );

// Supprime les feeds des Posts et des Commentaires
remove_action( 'wp_head', 'feed_links', 2 );

//Remove Help tab
function wpc_remove_help( $old_help, $screen_id, $screen ){
	$screen->remove_help_tabs();
	return $old_help;
}
add_filter( 'contextual_help', 'wpc_remove_help', 999, 3 );

//Remove Screen Options
add_filter('screen_options_show_screen', '__return_false');

//Remove Dashboard widgets
function remove_dashboard_widgets () {
  remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
  remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
  remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
  remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
  remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
  remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
  remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
  remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

// Suppression du Welcome panel
remove_action('welcome_panel', 'wp_welcome_panel');

// Fonction qui contient notre widget
function wpo_dashboard_widget_function() {
  ?>
  <div class="agence">
    <h2>Une agence qui entretien une relation fusionnelle avec ses clients</h2>
    <p>Wesh Michmichu ! Tu need grave mon help ? Call moi au 06.06.06.06.06 BB.</p>
    <p>Une qui prend chere TKT</p>
  </div>
  <?php
}

// Fonction qui déclare notre widget
function wpo_add_dashboard_widget() {
  wp_add_dashboard_widget('wpo_summary_dashboard_widget', 'Notre super agence Fusion', 'wpo_dashboard_widget_function');
}

// On greffe au hook "wp_dashboard_setup" la fonction de déclaration du widget
add_action('wp_dashboard_setup', 'wpo_add_dashboard_widget');

//Remove WordPress Footer Credits
function wpo_remove_footer_admin() {
	return 'Réalisé par Fusion pour Mme Michu';
}
add_filter('admin_footer_text', 'wpo_remove_footer_admin');

//Remove WordPress version in footer
function wpo_remove_version_footer() {
	remove_filter( 'update_footer', 'core_update_footer' );
}
add_action( 'admin_menu', 'wpo_remove_version_footer' );
