<?php
/*
Plugin Name: oprofile-settings
Plugin URI: https://oclock.io
Description: Réglage pour mon thème oProfile
Author: Fusion !!!
Version: 0.0.1
*/

// Je sécurise mon plugin
if (!defined('WPINC')) {
  die('Try again');
}



require plugin_dir_path(__FILE__) . 'inc/shortcodes.php';
// Mise en place de mon custom post type projet
require plugin_dir_path(__FILE__) . 'inc/cpt_projet.php';
// Mise en place de mon custom post type skills
require plugin_dir_path(__FILE__) . 'inc/cpt_skills.php';

// J'instencie mon objet
$skills_cpt = new Skills_cpt();
$projet_cpt = new Projet_cpt();

// A l'activation du plugin, je demande à WP d'executer la méthode "activation" de mon objet
register_activation_hook(__FILE__, [$skills_cpt,'activation']);
register_activation_hook(__FILE__, [$projet_cpt,'activation']);

// A la désactivation du plugin, je demande à WP d'executation la méthode "deactivation" de mon objet
register_deactivation_hook(__FILE__, [$skills_cpt,'deactivation']);
register_deactivation_hook(__FILE__, [$projet_cpt,'deactivation']);
