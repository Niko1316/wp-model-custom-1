<?php

// CPT = Custom Post type
// CCT = Custom Content Type
class Skills_cpt {

public function __construct() {

    add_action ('init', [$this,'cpt_skills_init']);
}

public function cpt_skills_init() {


	$labels = array(
		'name'               =>  'Compétences',
		'singular_name'      =>  'Compétence',
		'menu_name'          =>  'Compétences',
		'add_new'            =>  'Ajouter une compétence',
		'add_new_item'       =>  'Ajouter une nouvelle Compétence',
		'new_item'           =>  'Nouvelle Compétence',
		'edit_item'          =>  'Editer une Compétence',
		'view_item'          =>  'Voir la Compétence',
		'all_items'          =>  'Voir toutes les Compétences',
		'search_items'       =>  'Rechercher une Compétences',
		'not_found'          =>  'Aucune compétence trouvée.',
		'not_found_in_trash' =>  'Aucune compétence trouvée dans la corbeille.',
	);

	$args = array(
		'labels'             => $labels,
        'description'        => 'Compétence pour montrer la maitrise des 30% du web',
		'public'             => true,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => ['slug' => 'compétence'],
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => ['title', 'editor', 'custom-fields'],
        'menu_icon'          => 'dashicons-nametag'
	);

	register_post_type( 'skills', $args );
  }

  public function activation() {
      // je déclare mon cpt a WP
      $this->cpt_skills_init();
      // puis je refresh les permaliens
      flush_rewrite_rules();
  }

  public function deactivation()
  {
     flush_rewrite_rules();
  }

}
