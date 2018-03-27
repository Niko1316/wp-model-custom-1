<h1 class="post__title">
  <span><?php the_title(); ?></span>
</h1>
<img src="images/black-white-city.jpg" alt="Kiev vue du ciel" class="post__image">

<div class="post__info">

<?php

    $now = new DateTime();
    $postDate = new DateTime(get_the_date('Y-m-d H:i:s'));
    $interval = $postDate->diff($now);


 ?> Il y a <?php echo $interval->format('%a'); ?> jours &bull; by <?php ucfirst(the_author()); ?>


</div>

<div class="post__content">
    <a href="<?php the_permalink(); ?>"></a>
    <?php the_excerpt(); ?>
</div>
