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

?>

<div class="grid__item">
  <i class="grid__item__icon fa <?php echo $faicon; ?>"></i>
  <h3 class="grid__item__title"><?php the_title(); ?></h3>
  <p class="grid__item__content"><?php the_content(); ?></p>
</div>
