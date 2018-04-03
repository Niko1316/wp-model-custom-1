<footer class="footer" id="contact">
  <div class="contact-form">
    <?php
      get_template_part('template-parts/footer/contact-shortcode');

    //   // Requete perso avec WP_Query et nos arguments spécifiques
    //   $args_query_posts = [
    //     // Je souhaite afficher le contenu d'une page
    //     'post_type' => 'page',
    //     // Je souhaite afficher un contenu dont le slug est "contact"
    //     'pagename' => 'contact'
    //   ];
    //
    // $query_posts = new WP_Query($args_query_posts);
    //
    // if ($query_posts->have_posts()): while($query_posts->have_posts()): $query_posts->the_post();
    //
    //   get_template_part('template-parts/footer/contact');
    //
    // endwhile; endif;
    //
    // wp_reset_postdata();
    //
    //  ?>
  </div>
  <div class="contact-info">
    <div class="contact-info__part">
      <i class="fa fa-envelope"></i>
      <h3>Email</h3>
      <a href="mailto:christophe@oclock.io">christophe@oclock.io</a>
    </div>
    <div class="contact-info__part">
      <i class="fa fa-phone"></i>
      <h3>Téléphone</h3>
      <a href="tel:+33604020810">+33 6 04 02 08 10</a>
    </div>
    <div class="contact-info__part">
      <i class="fa fa-home"></i>
      <h3>Adresse</h3>
      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
    </div>
  </div>
</footer>
</div>

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
