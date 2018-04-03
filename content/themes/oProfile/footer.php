  <?php if (get_theme_mod('oprofile_footer_active')): ?>
    <?php get_template_part('template-parts/footer/footer'); ?>
  <?php endif; ?>

</div> <!-- Fermeture de mon wrapper -->

<div class="menu">
<a href="" class="ui-button close-menu">
  <i class="fa fa-close"></i>
</a>
<nav class="main-nav">
  <ul>
    <li><a href="">Homepage</a></li>
    <li><a href="">Blog</a></li>
    <li><a href="">Projets</a></li>
    <li><a href="">Exemple</a></li>
    <li><a href="">Contact</a></li>
  </ul>
</nav>
<div class="social-nav">
  <a href=""><i class="fa fa-twitter"></i></a>
  <a href=""><i class="fa fa-facebook"></i></a>
  <a href=""><i class="fa fa-google-plus"></i></a>
  <a href=""><i class="fa fa-instagram"></i></a>
  <a href=""><i class="fa fa-github"></i></a>
</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
