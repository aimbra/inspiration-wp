<?php

/**
 * Função responsável por adicionar as folhas de estulos e scripts da aplicação.
 *
 * @return void
 */
function load_scripts() {
  wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
  wp_enqueue_style('animate-js', get_template_directory_uri().'/js/animate.js', array(), '4.3.1', 'all');
  wp_enqueue_style('index-css', get_template_directory_uri().'/css/index.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');

function inspiration_config() {
  register_nav_menus(
    array(
      'my_main_menu' => 'Main Menu',
      'my_footer_menu' => 'Footer Menu'
    )
  );

  $args = array(
    'height' => 225,
    'width' => 1920
  );
  add_theme_support('custom-header', $args);
  add_theme_support('post-thumbnails');

}
add_action('after_setup_theme', 'inspiration_config', 0);

