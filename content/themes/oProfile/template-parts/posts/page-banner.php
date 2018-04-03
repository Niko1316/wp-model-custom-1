<section class="banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <div class="intro">
    <h1 class="intro__title"><?php the_title(); ?></h1>
    <div class="intro__content">
      <?php the_content(); ?>
    </div>
    <div class="action-bar">
      <a href="#posts" class="action-button">En savoir plus</a>
      <a href="#contact" class="action-button">Contact</a>
    </div>
  </div>
</section>
