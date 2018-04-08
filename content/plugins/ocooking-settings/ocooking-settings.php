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

$recipe_cpt = new Recipe_cpt();

// A l'activation
register_activation_hook(__FILE__, [$recipe_cpt, 'activation']);

// A la désactivation
register_deactivation_hook(__FILE__, [$recipe_cpt, 'deactivation']);
