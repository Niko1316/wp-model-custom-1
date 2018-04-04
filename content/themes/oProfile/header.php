<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">

    <?php wp_head(); ?>

  </head>
  <body>

    <div class="wrapper">
      <header class="header">
        <div class="logo">
          <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>
<?php get_template_part('template-parts/navigation/nav', 'social'); ?>

        <a href="" class="ui-button"><i class="fa fa-bars"></i></a>
      </header>
