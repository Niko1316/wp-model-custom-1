  <?php if (get_theme_mod('oprofile_footer_active')): ?>
    <?php get_template_part('template-parts/footer/footer'); ?>
  <?php endif; ?>

</div> <!-- Fermeture de mon wrapper -->

<div class="menu">
<a href="" class="ui-button close-menu">
  <i class="fa fa-close"></i>
</a>
<?php get_template_part('template-parts/navigation/nav', 'main'); ?>
<?php get_template_part('template-parts/navigation/nav', 'social'); ?>

</div>

<?php wp_footer(); ?>

</body>
</html>
