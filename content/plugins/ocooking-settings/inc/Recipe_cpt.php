<?php

class Recipe_cpt
{
  public function __construct()
  {
    add_action('init', [$this, 'create_cpt']);
    add_action('init', [$this, 'create_taxonomies']);
  }


  public function create_cpt()
  {
    $labels = [
      'name'                  => __('recipe', 'ocooking'),
      'singular_name'         => 'Recette',
      'menu_name'             => 'Recettes',
      'name_admin_bar'        => 'Recettes',
      'archives'              => 'Archives des recettes',
      'attributes'            => 'Attributs des recettes',
      'parent_item_colon'     => 'Element parent',
      'all_items'             => 'Toutes les recettes',
      'add_new_item'          => 'Ajouter une nouvelle recette',
      'add_new'               => 'Ajouter une nouvelle recette',
      'new_item'              => 'Nouvelle recette',
      'edit_item'             => 'Editer la recette',
      'update_item'           => 'Mettre à jour la recette',
      'view_item'             => 'Voir la recette',
      'view_items'            => 'Voir les recettes',
      'search_items'          => 'Rechercher les recettes',
      'not_found'             => 'Aucune recette trouvée',
      'not_found_in_trash'    => 'Aucune recette trouvée dans la corbeille',
      'featured_image'        => 'Image de la recette',
      'set_featured_image'    => 'Ajouter une image à la recette',
      'remove_featured_image' => 'Supprimer l\'image de la recette',
      'use_featured_image'    => 'Utiliser une image pour la recette',
      'insert_into_item'      => 'Inserer dans la recette',
      'uploaded_to_this_item' => 'Televerser dans la recette',
      'items_list'            => 'Liste des recettes',
      'items_list_navigation' => 'Liste des recettes',
      'filter_items_list'     => 'Filtrer la liste des recettes',
    ];

    $args = [
      'label'                 => 'Recette',
      'description'           => 'Recettes de cuisine',
      'labels'                => $labels,
      'supports'              => [
        'title',
        'editor',
        'thumbnail',
        'custom-fields',
        'excerpt'
      ],
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'show_in_rest'          =>true,
      'menu_icon'             => 'dashicons-carrot'
    ];
    register_post_type( 'recipe', $args );
  }

  public function create_taxonomies()
  {
    $labels = [
      'name'                       => 'Ingrédients',
      'singular_name'              => 'Ingrédient',
      'menu_name'                  => 'Ingrédients',
      'all_items'                  => 'Tous les ingrédients',
      'new_item_name'              => 'Nouvel ingrédient',
      'add_new_item'               => 'Ajouter un ingrédient',
      'update_item'                => 'Mettre à jour un ingrédient',
      'edit_item'                  => 'Editer un ingrédient',
      'view_item'                  => 'Voir tous les ingrédients',
      'separate_items_with_commas' => 'Séparer les ingrédient avec une virgule',
      'add_or_remove_items'        => 'Ajouter une supprimer un ingrédient',
      'choose_from_most_used'      => 'Choisir parmis les ingrédients les plus utilisés',
      'popular_items'              => 'Ingrédients populaires',
      'search_items'               => 'Rechercher un ingrédient',
      'not_found'                  => 'Aucun ingrédient trouvé',
      'items_list'                 => 'Lister les ingrédients',
      'items_list_navigation'      => 'Lister les ingrédients',
    ];
    $args = [
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
    ];
    register_taxonomy( 'ingredient', 'recipe', $args );

    $labels = [
      'name'                       => 'Types',
      'singular_name'              => 'Type',
      'menu_name'                  => 'Types',
      'all_items'                  => 'Tous les types',
      'new_item_name'              => 'Nouveau type',
      'add_new_item'               => 'Ajouter un type',
      'update_item'                => 'Mettre à jour un type',
      'edit_item'                  => 'Editer un type',
      'view_item'                  => 'Voir tous les types',
      'separate_items_with_commas' => 'Séparer les type avec une virgule',
      'add_or_remove_items'        => 'Ajouter une supprimer un type',
      'choose_from_most_used'      => 'Choisir parmis les types les plus utilisés',
      'popular_items'              => 'Types populaires',
      'search_items'               => 'Rechercher un type',
      'not_found'                  => 'Aucun type trouvé',
      'items_list'                 => 'Lister les types',
      'items_list_navigation'      => 'Lister les types',
    ];
    $args = [
      'labels'                     => $labels,
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
    ];
    register_taxonomy( 'type', 'recipe', $args );
  }

  public function activation()
  {
    // Je créé mon CPT Recipe
    $this->create_cpt();

    // Je créé mes taxonomies
    $this->create_taxonomies();

    // Je refresh les permaliens
    flush_rewrite_rules();
  }

  public function deactivation()
  {
    // Je refresh les permaliens
    flush_rewrite_rules();
  }
}
