<?php get_header(); ?>

<?php if (have_posts()): while(have_posts()): the_post(); ?>
    <?php get_template_part('template-parts/posts/page', 'banner'); ?>
<?php endwhile; endif; ?>

<section class="posts" id="posts">
<?php
  // Requete perso avec WP_Query et nos arguments spécifiques
  $args_query_posts = [
    // Optionel car par défaut déjà égal à post.
    // De plus comme on spécifie une catégorie, c'est forcement un post (la page n'a pas de catégorie)
    'post_type' => 'post',
    // On souhaite afficher le contenu dont le slug de la catégorie est "mes-actualité"
    'category_name' => 'health',
    // Optionnel car par défaut à 'DESC'
    'order' => 'DESC',
    // Optionnel car par défaut déjà en fonction de la date
    'orderby' => 'date',
    // On souhaite afficher 6 résultats
    'posts_per_page' => 6
  ];

  $query_posts = new WP_Query($args_query_posts);

  if ($query_posts->have_posts()): while($query_posts->have_posts()): $query_posts->the_post();

    get_template_part('template-parts/posts/page', 'post');

  endwhile; endif;

  wp_reset_postdata();

?>
</section>
<section class="grid">
  <?php
    // Requete perso avec WP_Query et nos arguments spécifiques
    $args_query_posts = [
      // Optionel car par défaut déjà égal à post.
      // De plus comme on spécifie une catégorie, c'est forcement un post (la page n'a pas de catégorie)
      'post_type' => 'post',
      // On souhaite afficher le contenu dont le slug de la catégorie est "mes-competences"
      'category_name' => 'crossfit',
      // Optionnel car par défaut à 'DESC'
      'order' => 'DESC',
      // Optionnel car par défaut déjà en fonction de la date
      'orderby' => 'date',
      // On souhaite afficher tous les résultats
      'posts_per_page' => -1
    ];

    $query_posts = new WP_Query($args_query_posts);

    if ($query_posts->have_posts()): while($query_posts->have_posts()): $query_posts->the_post();

      get_template_part('template-parts/posts/page', 'grid');

  endwhile; else:
    echo "J'ai aucune compétence...";
  endif;

    wp_reset_postdata();

  ?>
</section>
<?php get_footer(); ?>