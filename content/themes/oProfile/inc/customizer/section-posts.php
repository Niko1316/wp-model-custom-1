<?php
function create_section_posts($wp_customize, $panel_id){
    // Déclaration d'une section de notre Panel
    $wp_customize->add_section('oprofile_posts', [
        'title' => 'Posts',
        'description' => 'Section regroupant les paramètres du posts',
        'panel' => $panel_id,
    ]);

    // Déclaration du Setting de notre panel
    $wp_customize->add_setting('oprofile_posts_nbarticles',['default' => 6]);
    // je déclare pour mon setting ces caractéristique (son controle)
    $wp_customize->add_control('oprofile_posts_nbarticles', [
        'type'=> 'number',
        'section' => 'oprofile_posts',
        'label' => 'Nombre d\'article à afficher dans posts',
        'input_attrs' => array( 'min' => 2, 'max' => 10, 'step'  => 2 ),
    ]);


}
