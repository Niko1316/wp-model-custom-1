<?php
function create_section_footer($wp_customize, $panel_id){
    // Déclaration d'une section de notre Panel
    $wp_customize->add_section('oprofile_footer', [
        'title' => 'Footer',
        'description' => 'Section regroupant les paramètres du footer',
        'panel' => $panel_id,
    ]);

    // Déclaration du Setting de notre panel
    $wp_customize->add_setting('oprofile_footer_active',[]);
    // je déclare pour mon setting ces caractéristique (son controle)
    $wp_customize->add_control('oprofile_footer_active', [
        'type'=> 'checkbox',
        'section' => 'oprofile_footer',
        'label' => 'Activer l\'affichage complet du footer',
    ]);

 /*
   *
   * Je déclare mon setting qui permet d'utiliser ou non le contact form 7
   *
   */
    $wp_customize->add_setting( 'oprofile_footer_contactform7', []);
    // Je déclare pour mon setting ces caractèristiques (son control)
    $wp_customize->add_control( 'oprofile_footer_contactform7', [
      'type' => 'checkbox', // Je définit un type
      'section' => 'oprofile_footer', // Je l'ajoute à une section
      'label' => 'Utiliser ou non contact form 7', // Label de mon setting
    ]);
/*
  *
  * Je déclare mon setting qui permet de renseigner l'email de conatct
  *
  */
    $wp_customize->add_setting( 'oprofile_footer_email', [
        'default' => 'nv@oclock.io',
    ]);
    // Je déclare pour mon setting ces caractèristiques (son control)
    $wp_customize->add_control( 'oprofile_footer_email', [
      'type' => 'email', // Je définit un type
      'section' => 'oprofile_footer', // Je l'ajoute à une section
      'label' => 'remplir email', // Label de mon setting
    ]);
    /*
      *
      * Je déclare mon setting qui permet de renseigner le tél de conatct
      *
      */
    $wp_customize->add_setting( 'oprofile_footer_phone', []);
    // Je déclare pour mon setting ces caractèristiques (son control)
    $wp_customize->add_control( 'oprofile_footer_phone', [
      'type' => 'text', // Je définit un type
      'section' => 'oprofile_footer', // Je l'ajoute à une section
      'label' => 'remplir numéro de tél', // Label de mon setting
    ]);

    /*
      *
      * Je déclare mon setting qui permet de renseigner l'address de conatct
      *
      */
    $wp_customize->add_setting( 'oprofile_footer_address', []);
    // Je déclare pour mon setting ces caractèristiques (son control)
    $wp_customize->add_control( 'oprofile_footer_address', [
      'type' => 'textarea', // Je définit un type
      'section' => 'oprofile_footer', // Je l'ajoute à une section
      'label' => 'remplir address', // Label de mon setting
    ]);


}
