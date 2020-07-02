<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    wp_head();
  ?>
</head>
<body class="h-full antialiased font-sans text-gray-900 leading-normal">
<header class="">
<nav class="bg-yellow-300 px-6 py-4 flex justify-between align-center space-x-2">
  <h1 class="text-2xl">
    <?php
      echo get_option( 'blogname' );
    ?>
  </h1>
<?php
  wp_nav_menu(
    array(
      'menu' => 'primary',
      'container' => '',
      'theme_location' => 'primary',
      'items_wrap' => '<ul id="primary-menu" class="space-x-6 flex items-center justify-center">%3$s</ul>',
    )
  );
?>
</nav>
</header>
<h1>i'm header</h1>