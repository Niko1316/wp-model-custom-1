<?php


// $custom_fields = get_post_custom();
// var_dump($custom_fields['icone-bleu'][0]);
//
// var_dump(get_post_custom_values('icone-bleu')[0]);
//
// var_dump(get_post_meta(get_the_ID(), 'icone-bleu', false));

$faicon = 'fa-user';

if (!empty(get_post_meta(get_the_ID(), 'icone-bleu', true))):

  $faicon = get_post_meta(get_the_ID(), 'icone-bleu', true);

endif;

// $bg_color = empty(get_post_meta(get_the_ID(), 'fa-bg-color', true)) ? '#72bdf9' : get_post_meta(get_the_ID(), 'fa-bg-color', true);

// if (!empty(get_post_meta(get_the_ID(), 'bg-color', true))):
//
//   $bg_color = get_post_meta(get_the_ID(), 'bg-color', true);
//
// else:
//
//     $bg_color = '#72bdf9';
//
// endif;



?>


<div class="grid__item">
  <i style="background-color: <?php the_field('fa-bg-color'); ?>; color: <?php the_field('fa-color'); ?>" class="grid__item__icon fa <?php the_field('fa-icon'); ?>"></i>
  <h3 class="grid__item__title"><?php the_title(); ?></h3>
  <p class="grid__item__content"><?php the_content(); ?></p>
</div>
