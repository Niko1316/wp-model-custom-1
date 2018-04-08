<?php

/*
Plugin Name: oProfile Settings
Description: Réglages pour mon thème oProfile
Version: 0.0.1
Author: Fusion
*/

// Je sécurise mon plugin
if (!defined('WPINC')) {
  die('Try again');
}

require plugin_dir_path(__FILE__) . 'inc/shortcodes.php';

// Mise en place de mon custom post type Skills
require plugin_dir_path(__FILE__) . 'inc/cpt_skills.php';
// Mise en place de mon CPT Projects
require plugin_dir_path(__FILE__) . 'inc/cpt_projects.php';
// Mise en place de mon CPT Clients
require plugin_dir_path(__FILE__) . 'inc/cpt_clients.php';

// J'instencie mon objet
$skills_cpt = new Skills_cpt();
$projects_cpt = new Projects_cpt();
$clients_cpt = new Clients_cpt();

// A l'activation du plugin, je demande à WP d'executer la méthode "activation" de mon objet
register_activation_hook(__FILE__, [$skills_cpt, 'activation']);
register_activation_hook(__FILE__, [$projects_cpt, 'activation']);
register_activation_hook(__FILE__, [$clients_cpt, 'activation']);

// A la désactivation du plugin, je demande à WP d'executation la méthode "deactivation" de mon objet
register_deactivation_hook(__FILE__, [$skills_cpt, 'deactivation']);
register_deactivation_hook(__FILE__, [$projects_cpt, 'deactivation']);
register_deactivation_hook(__FILE__, [$clients_cpt, 'deactivation']);
