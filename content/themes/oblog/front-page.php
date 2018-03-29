<?php get_header(); ?>

<article class="post">

<?php if (have_posts()): while(have_posts()): the_post(); ?>

  <?php
    // La variable $post contient le contenu de l'élément parcouru
    // echo '<pre>';var_dump($post); die();
  ?>

  <?php get_template_part('template-parts/post/excerpt'); ?>
<?php endwhile; endif; ?>

</article>

<aside class="sidebar">
  <?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
