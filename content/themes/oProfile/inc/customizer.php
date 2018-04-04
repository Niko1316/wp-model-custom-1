<?php
require get_theme_file_path('inc/customizer/section-footer.php');
require get_theme_file_path('inc/customizer/section-posts.php');
require get_theme_file_path('inc/customizer/section-page.php');

function oprofile_customize_register($wp_customize) {

    // ajout d'un panel au customizer
    $wp_customize->add_panel('oprofile_theme_panel', [
        'title' =>'&#9733; oProfile &#9733;', //Notre titre
        'description' => 'Panel de gestion pour le thème oProfile',//Description
        'priority' => 1, //Emplacement
    ]);

    create_section_footer($wp_customize,'oprofile_theme_panel');
    create_section_posts($wp_customize,'oprofile_theme_panel');
    create_section_page($wp_customize,'oprofile_theme_panel');

}


add_action('customize_register', 'oprofile_customize_register');
