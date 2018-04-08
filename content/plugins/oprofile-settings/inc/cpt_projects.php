<?php

class Projects_cpt
{
  public function __construct()
  {
    add_action('init', [$this, 'cpt_projects_init']);
    add_action('init', [$this, 'create_taxonomies']);
  }

  public function cpt_projects_init()
  {
    $labels = array(
      'name'               => 'Projets',
      'singular_name'      => 'Projet',
    );

    $args = array(
      'labels'  => $labels,
      'description' => 'Mes supers projets',
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'has_archive'        => true,
      'hierarchical'       => true,
      'menu_position'      => null,
      'supports'           => [
        'title',
        'editor',
        'excerpt',
        'thumbnail',
        'custom-fields',
        'page-attributes'
      ],
      'menu_icon' => 'dashicons-portfolio'
    );

    register_post_type('projects', $args);
  }

  public function create_taxonomies()
  {
    // Je déclare une nouvelle taxonomie
    // pour relier mes projets en fonction de leur typologie
    register_taxonomy(
      'type',
      'projects',
      [
        'label' => 'Types',
        'hierarchical' => true,
        'public' => true,
        'rewrite' => [
          'slug' => 'type-de-projets',
          'with_front' => true
        ]
      ]
    );

    // Je déclare une nouvelle taxonomie
    // pour relier mes projets en fonction de leur techno utilisées
    register_taxonomy(
      'techno',
      'projects',
      [
        'label' => 'Technologies',
        'hierarchical' => false,
        'public' => true,
        'rewrite' => [
          'slug' => 'techonologies',
          'with_front' => true
        ]
      ]
    );
  }

  public function activation()
  {
    $this->cpt_projects_init();
    $this->create_taxonomies();

    flush_rewrite_rules();
  }

  public function deactivation()
  {
    flush_rewrite_rules();
  }
}
