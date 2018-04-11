<?php
/*
Plugin Name: oCooking Settings
Description: Réglages pour le thème oCooking: Custom Post Type, Taxonomie, Custom Fields etc...
Author: Fusion 30% du Web !
Author URI: https://oclock.io
Version: 1.0.0
*/

// Je vérifie que mon fichier est bien executé dans un contexte de WordPress
if (!defined('WPINC')) {
  die('');
}

// Récuperation de la class Recipe_cpt
require plugin_dir_path(__FILE__) . 'inc/Recipe_cpt.php';
// Récuperation des roles & capacités
require plugin_dir_path(__FILE__) . 'inc/roles.php';
// Mise en place de notre Custom BO
require plugin_dir_path(__FILE__) . 'inc/settings_page.php';
// Chargement des utils
require plugin_dir_path(__FILE__) . 'inc/utils.php';
require plugin_dir_path(__FILE__) . 'inc/settings_rest_api.php';


$recipe_cpt = new Recipe_cpt();

// A l'activation
register_activation_hook(__FILE__, [$recipe_cpt, 'activation']);

// A la désactivation
register_deactivation_hook(__FILE__, [$recipe_cpt, 'deactivation']);
