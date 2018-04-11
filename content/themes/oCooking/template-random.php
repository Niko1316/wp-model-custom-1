<?php
/*
Template Name: Au hasard
 */
?>

<?php get_header(); ?>

<div class="columns">
  <main class="main column is-two-thirds">
    <?php

      $args_query_recipe = [
        'post_type' => 'recipe',
        'posts_per_page' => 1,
        'orderby' => 'rand'
      ];

      $query_recipe = new WP_Query($args_query_recipe);

      if ($query_recipe->have_posts()):
        while($query_recipe->have_posts()):
          $query_recipe->the_post();

          get_template_part('template-parts/posts/recipe', 'front-page');
        endwhile;
      endif;

      wp_reset_postdata();

    ?>
  </main>
  <aside class="sidebar column">
    <h1 class="title is-1"><?php bloginfo('title'); ?></h1>
    <h2 class="subtitle is-2"><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </aside>
</div>

<?php get_footer(); ?>
