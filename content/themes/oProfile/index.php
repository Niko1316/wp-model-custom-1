<?php

get_header();

if (have_posts()): while(have_posts()): the_post();
    get_template_part('template-parts/posts/page', 'banner');
endwhile; endif;

get_footer();

?>
