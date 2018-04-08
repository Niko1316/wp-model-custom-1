<?php

function oprofile_sc_twitter($atts, $content = '')
{

  // if (isset($attributs['pseudonyme'])) {
  //   $pseudonyme = $attributs['pseudonyme'];
  // } else {
  //   $pseudonyme = 'mariefrance78michu54';
  // }

  // Je viens déclarer une valeur par defauts pour mes attributs
  // Reviens a faire le if/else du dessus
  $attributs = shortcode_atts(
    [
      'pseudonyme' => 'mariefrance78michu54'
    ],
    $atts);

  // Si on a du contenu entre nos balises on le récupère.
  // Sinon on met une valeur par défaut
  $content = empty($content) ? 'Me suivre' : $content;

  // Je génère la valeur de mon return.
  $return = '<a href="https://twitter.com/'.$attributs['pseudonyme'].'" class="action-button">';
  $return .= '<i class="fa fa-twitter"></i>&nbsp;';
  $return .= '<span>'.$content.'</span>';
  $return .= '</a>';

  return $return;
}

add_shortcode('twitter', 'oprofile_sc_twitter');

function oprofile_sc_bouton($atts, $content = '')
{
  $attributs = shortcode_atts(
    [
      'url' => 'https://www.lego.com/404notfound'
    ],
    $atts
  );

  if (empty($content)) {

    $content = 'Clique là mon ami';
  }

  // Je génère la valeur de mon return.
  $return = '<a href="'.$attributs['url'].'" class="action-button" style="background-color:red">';
  $return .= '<span>'.$content.'</span>';
  $return .= '</a>';

  return $return;
}

add_shortcode('bouton', 'oprofile_sc_bouton');
