<?php get_header(); ?>

<div class="columns">
  <main class="main column is-two-thirds">
    <?php

      $args_query_recipe = [
        'post_type' => 'recipe',
        'posts_per_page' => 1,
      ];

      $query_recipe = new WP_Query($args_query_recipe);

      if ($query_recipe->have_posts()):
        while($query_recipe->have_posts()):
          $query_recipe->the_post();

          get_template_part('template-parts/posts/recipe', 'front-page');
        endwhile;
      endif;

    ?>
  </main>
  <aside class="sidebar column">
    <h1 class="title is-1">oCooking</h1>
    <h2 class="subtitle is-2">Se faire plaisir tous les jours</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </aside>
</div>

<?php get_footer(); ?>
