<?php
function create_section_page($wp_customize, $panel_id){
    // Déclaration d'une section de notre Panel
    $wp_customize->add_section('oprofile_page', [
        'title' => 'Page',
        'description' => 'Section permettant de géré l\'inclusion d\'une page',
        'panel' => $panel_id,
    ]);

    // Déclaration du Setting de notre panel
    $wp_customize->add_setting('oprofile_page_select',[]);
    // je déclare pour mon setting ces caractéristique (son controle)
    $wp_customize->add_control('oprofile_page_select', [
        'type'=> 'dropdown-pages',
        'section' => 'oprofile_page',
        'label' => 'Quelle page afficher',
        
    ]);


}
