
<!--
    <a href="#">Catégories</a>
    <a href="#">A propos</a>
    <a href="#">Contact</a>
 -->
<nav class="main-nav">
<?php
    $menuParameters = array(
        'theme_location'  => 'main',
        'container'       => false,
        'echo'            => false,
        'items_wrap'      => '%3$s',
        'depth'           => 0,
      );

      echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
?>
</nav>
