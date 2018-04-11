<?php

function ocooking_role_cap()
{

  // Je créé un nouveau rôle pour mon cuisinier
  add_role('cuisto', 'Cuisinier oCooking', [
    'read' => true,
  ]);

  // Je récupere le rôle
  $cuisto = get_role('cuisto');

  // Je lui donne une nouvelle capacité
  $cuisto->add_cap('edit_recipe');

  $author = get_role('editor');
  $author->add_cap('list_users');
}

add_action('init', 'ocooking_role_cap');
