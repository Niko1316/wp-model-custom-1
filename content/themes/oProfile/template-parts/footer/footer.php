
<footer class="footer" id="contact" style="background-color:<?php echo get_theme_mod('oprofile_footer_bgcolor') ?>">
  <div class="contact-form">
    <?php
if (get_theme_mod('oprofile_footer_contactform7')):

    get_template_part('template-parts/footer/contact', 'shortcode');

else:
    get_template_part('template-parts/footer/contact');
endif;
    ?>

  </div>
  <div class="contact-info">
    <div class="contact-info__part">
      <i class="fa fa-envelope"></i>
      <h3>Email</h3>
      <a href="mailto:<?php echo get_theme_mod('oprofile_footer_email'); ?>"><?php echo get_theme_mod('oprofile_footer_email'); ?></a>
    </div>

    <?php if (!empty(trim(get_theme_mod('oprofile_footer_phone')))):
                $numero_tel= trim(get_theme_mod('oprofile_footer_phone'));
    ?>
    <div class="contact-info__part">
      <i class="fa fa-phone"></i>
      <h3>Téléphone</h3>
      <a href="tel:+33<?php echo $numero_tel; ?>"><?php echo $numero_tel; ?></a>
    </div>
    <?php endif; ?>

    <?php if (!empty(trim(get_theme_mod('oprofile_footer_address')))):?>

    <div class="contact-info__part">
      <i class="fa fa-home"></i>
      <h3>Adresse</h3>
      <span><?php echo nl2br(trim(get_theme_mod('oprofile_footer_address'))); ?></span>
    </div>
    <?php endif; ?>

  </div>
</footer>
