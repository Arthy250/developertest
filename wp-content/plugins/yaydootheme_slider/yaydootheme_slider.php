<?php
/*
  Plugin Name: YaydooTheme - Slider
  Plugin URI:
  Description: Agregar imagenes al slider principal
  Version: 1.0.0
  Author: Arturo Hernandez Corona
  Author URI:
  Text Domain: yaydoo
*/

if (!defined('ABSPATH')) die();

// Registrar Custom Post Type
function slider_imagenes() {

	$labels = array(
		'name'                  => _x( 'Imagenes', 'Post Type General Name', 'yaydoo' ),
		'singular_name'         => _x( 'Imagen Slider', 'Post Type Singular Name', 'yaydoo' ),
		'menu_name'             => __( 'Slider', 'yaydoo' ),
		'name_admin_bar'        => __( 'Imagen', 'yaydoo' ),
		'archives'              => __( 'Archivo', 'yaydoo' ),
		'attributes'            => __( 'Atributos', 'yaydoo' ),
		'parent_item_colon'     => __( 'Clase Imagen', 'yaydoo' ),
		'all_items'             => __( 'Todas Las Imagenes', 'yaydoo' ),
		'add_new_item'          => __( 'Agregar Imagen', 'yaydoo' ),
		'add_new'               => __( 'Agregar Imagen', 'yaydoo' ),
		'new_item'              => __( 'Nueva Imagen', 'yaydoo' ),
		'edit_item'             => __( 'Editar Imagen', 'yaydoo' ),
		'update_item'           => __( 'Actualizar Imagen', 'yaydoo' ),
		'view_item'             => __( 'Ver Imagen', 'yaydoo' ),
		'view_items'            => __( 'Ver Imagens', 'yaydoo' ),
		'search_items'          => __( 'Buscar Imagen', 'yaydoo' ),
		'not_found'             => __( 'No Encontrado', 'yaydoo' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'yaydoo' ),
		'featured_image'        => __( 'Imagen Destacada', 'yaydoo' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'yaydoo' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'yaydoo' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'yaydoo' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'yaydoo' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'yaydoo' ),
		'items_list'            => __( 'Lista de Clases', 'yaydoo' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'yaydoo' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'yaydoo' ),
	);
	$args = array(
		'label'                 => __( 'Imagen', 'yaydoo' ),
		'description'           => __( 'Imagenes para el slider principal', 'yaydoo' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'          => false, // true = post, false = paginas 
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'slider_imagenes', $args );

}
add_action( 'init', 'slider_imagenes', 0 );

