<?php get_header(); ?>

<article class="post">

  <h1 class="post__title">
    <span>Essaye encore</span>
  </h1>
  <img src="app/assets/images/images.jpg" alt="error 404" class="post__image">
  <div class="post__content">
    <p>
      Impossible de trouver la page.
    </p>
    <p>
      <a href="<?php home_url(); ?>">Retourner à l'accueil.</a>
    </p>
  </div>

</article>

<aside class="sidebar">
  <?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
