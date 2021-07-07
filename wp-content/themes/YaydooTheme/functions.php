<?php

//Setup tema
function yaydoo_setup(){
  //habilitar imagen destacada
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'yaydoo_setup');

function yaydoo_menu(){
  register_nav_menus(array(
    // 'nombre_wordpress' => __('Nombre Usuario')
    'menu-principal' => __('Menu Principal', 'yaydoo')
  ));
}

add_action('init', 'yaydoo_menu');

// Scripts y Styles
function yaydoo_scripts_styles(){
  wp_enqueue_style( 'Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', array(), '1.0.0');

  wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Staatliches&display=swap', array(), '1.0.0');
   
  // Hoja de estilos principal
  wp_enqueue_style( 'styles', get_template_directory_uri().'/assets/css/styles.css', array('Bootstrap', 'googleFonts'), '1.0.0');

  //Slider css
  wp_enqueue_style('bxsliderCSS', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css', array(), '4.2.15');

  //Slider Script
  wp_enqueue_script('bxSliderJS', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js', array('jquery'), '4.2.15', true);

  // Scripts
  wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0.0', true);

  
}
add_action('wp_enqueue_scripts', 'yaydoo_scripts_styles');
