<?php
// Register Custom Post Type
function galeriaclases_post_type() {

	$labels = array(
		'name'                  => _x( 'galerias', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'galeria', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Galeria_Clases', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Archivos de la galeria', 'text_domain' ),
		'attributes'            => __( 'Atributos', 'text_domain' ),
		'parent_item_colon'     => __( 'galeria principal', 'text_domain' ),
		'all_items'             => __( 'Todos los elementos', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nueva galeria', 'text_domain' ),
		'add_new'               => __( 'Agregar nuevo', 'text_domain' ),
		'new_item'              => __( 'Nueva galeria', 'text_domain' ),
		'edit_item'             => __( 'Editar galeria', 'text_domain' ),
		'update_item'           => __( 'Actualizar', 'text_domain' ),
		'view_item'             => __( 'Ver galeria', 'text_domain' ),
		'view_items'            => __( 'Ver', 'text_domain' ),
		'search_items'          => __( 'Buscar', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en la galeria', 'text_domain' ),
		'uploaded_to_this_item' => __( 'subir galeria', 'text_domain' ),
		'items_list'            => __( 'lista', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegacion', 'text_domain' ),
		'filter_items_list'     => __( 'filtrar', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'galeria', 'text_domain' ),
		'description'           => __( 'galeria fotografica', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'galeriaclases', $args );

}
add_action( 'init', 'galeriaclases_post_type', 0 );


 ?>
