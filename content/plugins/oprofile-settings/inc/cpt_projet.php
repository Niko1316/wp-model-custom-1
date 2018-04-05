<?php

// CPT = Custom Post type
// CCT = Custom Content Type
class Projet_cpt {

public function __construct() {

    add_action ('init', [$this,'cpt_projet_init']);
    add_action ('init', [$this,'create_taxonomies']);
}

public function cpt_projet_init() {


	$labels = array(
		'name'               =>  'Projets',
		'singular_name'      =>  'Projet',
	);

	$args = array(
		'labels'             => $labels,
        'description'        => 'Projet réalisé',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => ['title', 'editor', 'thumbnail','excerpt', 'custom-fields','page-attributes'],
        'menu_icon'          => 'dashicons-portfolio'
	);

	register_post_type( 'projet', $args );

  }

  public function create_taxonomies() {
      // je déclare une nouvelle taxonomie
      register_taxonomy(
          'type',
          'projets',
          [
              'label' => 'Types',
              'hierarchical' => true,
              'public' =>  true,
              'rewrite' => [
                  'slug' => 'type-de-projets',
                  'with_front' => true
              ]
          ]
      );

          register_taxonomy(
              'techno',
              'projets',
              [
                  'label' => 'Technologies',
                  'hierarchical' => false,
                  'public' =>  true,
                  'rewrite' => [
                      'slug' => 'type-de-projets',
                      'with_front' => true
                  ]
              ]
          );
  }

  public function activation() {
      // je déclare mon cpt a WP
      $this->cpt_projet_init();
      $this->create_taxonomies();
      // puis je refresh les permaliens
      flush_rewrite_rules();
  }

  public function deactivation()
  {
     flush_rewrite_rules();
  }

}
