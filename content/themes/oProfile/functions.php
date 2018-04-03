<?php
// Mise en place du setup de thème
require get_theme_file_path('inc/setup-theme.php');
// Netoyage du thème
require get_theme_file_path('inc/clean-theme.php');
// Scripts & styles
require get_theme_file_path('inc/enqueue.php');
// J'inclus mon fichier de customizer
require get_theme_file_path('inc/customizer.php');
