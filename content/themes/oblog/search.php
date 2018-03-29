<?php get_header(); ?>

<article class="post">
  <h1>Résultats de la recherche pour: "<?php the_search_query(); ?>" </h1>

<?php if (have_posts()): while(have_posts()): the_post(); ?>

  <?php get_template_part('template-parts/post/excerpt'); ?>

<?php endwhile; else: ?>

  <p>
    Désolé, mais rien ne correspond à votre recherche.
  </p>

<?php endif; ?>

</article>

<aside class="sidebar">
  <?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
