<?php
// ADD THEME SUPPORT FOR FEATURED IMAGE
add_theme_support('post-thumbnails');

// ADD WIDGET SUPPORT
function nt_widgets()
{
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar'
  ));
  register_sidebar(array(
    'name' => 'Footer',
    'id' => 'footer'
  ));
}
add_action('widgets_init', 'nt_widgets');

// ADDS DYNAMIC TITLE TAG SUPPORT
function nt_theme_support()
{
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'nt_theme_support');

// ADD MENU SUPPORT
function nt_menus()
{
  $locations = array(
    'primary' => 'Main Menu',
  );
  register_nav_menus($locations);
}
add_action('init', 'nt_menus');

// ADD CLASSES TO LI IN MENU
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// THIS ENQUEUES STYLES
function nt_enqueue_styles()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('nt-main', get_template_directory_uri() . '/style.css', array(), $version, 'all');
  wp_enqueue_style('nt-tailwind', get_template_directory_uri() . '/assets/css/main.css', array(), '1.4.6', 'all');
}
add_action('wp_enqueue_scripts', 'nt_enqueue_styles');

// THIS ENQUEUES SCRIPTS
function nt_enqueue_scripts()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_script('nt-fontawesome-latest', 'https://kit.fontawesome.com/1ddeff6b53.js', array(), '1.0', true);
  wp_enqueue_script('nt-script', get_template_directory_uri() . '/assets/js/script.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'nt_enqueue_scripts');
