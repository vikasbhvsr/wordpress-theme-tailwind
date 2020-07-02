<?php

// ADDS DYNAMIC TITLE TAG SUPPORT
function nt_theme_support() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'nt_theme_support');

// ADD MENU SUPPORT
function nt_menus() {
  $locations = array(
    'primary' => 'Main Menu',
    'footer' => 'Footer Menu'
  );
  register_nav_menus( $locations );
}
add_action('init', 'nt_menus');

//

// THIS ENQUEUES STYLES
function nt_enqueue_styles() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style( 'nt-main', get_template_directory_uri() . '/style.css' , array(), $version , 'all' );
  wp_enqueue_style( 'nt-tailwind', get_template_directory_uri() . '/assets/css/main.css' , array(), '1.4.6', 'all' );
}
add_action('wp_enqueue_scripts', 'nt_enqueue_styles');

// THIS ENQUEUES SCRIPTS
function nt_enqueue_scripts() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_script( 'nt-fontawesome-latest', 'https://kit.fontawesome.com/1ddeff6b53.js', array(), '1.0', true );
  wp_enqueue_script( 'nt-script', get_template_directory_uri() . '/assets/js/script.js', array(), $version , true );
}
add_action('wp_enqueue_scripts', 'nt_enqueue_scripts');