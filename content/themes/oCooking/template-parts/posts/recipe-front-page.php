<article class="recipe">
  <header class="columns">
    <div class="recipe__title column is-two-thirds">
      <h2 class="title is-3"><?php the_title(); ?></h2>
      <p class="subtitle is-4">Préparé par <?php the_author(); ?> !</p>
    </div>
    <div class="recipe__meta column">
      <ul>
        <li><strong>Préparation</strong>: <?php the_field('preparation'); ?> minutes</li>
        <li><strong>Cuisson</strong>: <?php the_field('cuisson'); ?></li>
        <li><strong>Prix</strong>: <?php the_field('prix'); ?>€ / pers. </li>
      </ul>
    </div>
  </header>
  <figure class="recipe__image image">
    <?php the_post_thumbnail(); ?>
  </figure>
  <section class="recipe_summary columns">
    <div class="column is-two-thirds">
      <h3 class="title">La recette en résumé</h3>
      <div class="recipe__content">
        <?php the_excerpt(); ?>
      </div>
    </div>
    <aside class="recipe__ingredients column">
      <h3 class="subtitle">Ingredients</h3>
      <!-- <a href="#" class="tag is-dark">Pain</a> -->
      <?php echo get_recipe_ingredients(get_the_ID()); ?>
    </aside>
  </section>
  <footer class="recipe__footer">
    <div class="level">
      <div class="level-left">
        <a href="<?php the_permalink(); ?>" class="button is-primary is-outlined">Lire la suite</a>
      </div>
      <div class="level-right">
        <strong class="level-item">Recette visible dans:</strong>
        <?php echo get_recipe_types(get_the_ID()); ?>
      </div>
    </div>
  </footer>
</article>
