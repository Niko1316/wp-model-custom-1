<?php get_header(); ?>

<article class="post">

<?php if (have_posts()): while(have_posts()): the_post(); ?>
  <?php get_template_part('template-parts/post/excerpt'); ?>
<?php endwhile; endif; ?>

</article>


<?php get_footer(); ?>
