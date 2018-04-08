<?php

class Clients_cpt
{
  public function __construct()
  {
    add_action('init', [$this, 'cpt_clients_init']);
  }

  public function cpt_clients_init()
  {
    $labels = [
      'name' => 'Clients',
      'singular_name' => 'Client'
    ];

    $args = [
      'labels' => $labels,
      'description' => 'Gestion de mes clients',
      'public'    => true,
      'publicly_queryable'  => false,
      'has_archive' => false,
      'hierarchical' => true,
      'supports' => [
        'title',
        'custom-fields',
        'thumbnail',
        'page-attributes'
      ],
      'menu_icon' => 'dashicons-id-alt'
    ];

    register_post_type('clients', $args);
  }

  public function activation()
  {
    $this->cpt_clients_init();
    flush_rewrite_rules();
  }

  public function deactivation()
  {
    flush_rewrite_rules();
  }
}
