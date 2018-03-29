<h2 class="sidebar__title">Latest</h2>
<!-- <div class="archive">
  <h3 class="archive__title">Explorer</h3>
  <p class="archive__text">rapa nui is remote and</p>
  <p class="archive__text">then there's its</p>
  <p class="archive__text">iso</p>
</div>
<div class="archive">
  <h3 class="archive__title">Travel tips</h3>
  <p class="archive__text">how to make holiday</p>
  <p class="archive__text">travel less stressful</p>
</div>
<div class="archive">
  <h3 class="archive__title">Places</h3>
  <p class="archive__text">48 hours in toronto</p>
</div>
<div class="archive">
  <h3 class="archive__title">Pursuits</h3>
  <p class="archive__text">keeping the fire of</p>
  <p class="archive__text">irish lighthouses alive</p>
</div> -->

<?php

$arguments_query_posts_sidebar = array(
  'posts_per_page' => 4,
  'post_type' => 'post',
  'orderby' => 'rand'
);

$query_post_sidebar = new WP_Query($arguments_query_posts_sidebar);

if ($query_post_sidebar->have_posts()):
   while($query_post_sidebar->have_posts()):
      $query_post_sidebar->the_post();

      get_template_part('template-parts/post/sidebar');

    endwhile;

    wp_reset_postdata();

endif;
 ?>
