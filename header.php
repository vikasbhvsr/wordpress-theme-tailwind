<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    wp_head();
  ?>
</head>
<body <?php body_class('grid-container min-h-full antialiased font-sans text-gray-900 leading-normal'); ?>>
<header class="">
<nav class="bg-yellow-300 px-6 py-4 flex justify-between align-center space-x-2 sm:space-x-0">
  <h1 class="text-2xl">
    <a href="<?php echo get_option('siteurl'); ?>">
    <?php
      echo get_option( 'blogname' );
    ?>
    </a>
  </h1>
<?php
  wp_nav_menu(
    array(
      'menu' => 'primary',
      'container' => '',
      'theme_location' => 'primary',
      'items_wrap' => '<ul id="primary-menu" class="space-x-6 flex items-center justify-center">%3$s</ul>',
      'add_li_class'=> 'uppercase tracking-wide font-bold text-sm'
    )
  );
?>
</nav>
</header>
