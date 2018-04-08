<?php

// CPT => Custom Post Type
// CCT => Custom Content Type

class Skills_cpt
{
  public function __construct()
  {
    // Méthode pour executer une fonction
    // add_action('init', 'cpt_skills_init');

    // Méthode pour executer une méthode d'un objet
    add_action('init', [$this, 'cpt_skills_init']);
  }

  public function cpt_skills_init()
  {

    $labels = array(
      'name'               => 'Compétences',
      'singular_name'      => 'Compétence',
      'menu_name'          => 'Compétences',
      'name_admin_bar'     => 'Compétence',
      'add_new'            => 'Ajouter une compétence',
      'add_new_item'       => 'Ajouter une nouvelle compétence',
      'new_item'           => 'Nouvelle compétence',
      'edit_item'          => 'Editer une compétence',
      'view_item'          => 'Voir la compétence',
      'all_items'          => 'Voir toutes les compétences',
      'search_items'       => 'Rechercher une compétence',
      'not_found'          => 'Aucune compétence trouvée',
      'not_found_in_trash' => 'AUcune compétence trouvée dans la corbeille',
    );

    $args = array(
      'labels'             => $labels,
      'description'        => 'Compétences pour montrer qu\'on maitrise entre autre les 30% du WEB !',
      'public'             => true,
      'publicly_queryable' => false,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'has_archive'        => false,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => [
        'title',
        'editor',
        'custom-fields',
      ],
      'menu_icon'           => 'dashicons-nametag'
    );

    register_post_type( 'skills', $args );
  }

  public function activation()
  {
    // Je déclare mon CTP à WordPress
    $this->cpt_skills_init();

    // Puis je refresh mes permaliens
    flush_rewrite_rules();
  }

  public function deactivation()
  {
    // Je refresh mes permaliens
    flush_rewrite_rules();
  }
}
