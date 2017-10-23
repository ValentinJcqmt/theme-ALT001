<?php
//include('import_annonces.php');

add_theme_support( 'post-thumbnails' );

register_nav_menus(array('primary' => 'Menu'));

show_admin_bar( false );

/***********************************************************************************************************************/
//Register Custom Post Type
function custom_post_type_offre() {

	$labels = array(
		'name'                  => _x( 'Offres d\'emploi', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Offre d\'emploi', 'Post Type Singular Name', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Offre d\'emploi', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-media-text',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'annonce', $args );

}
add_action( 'init', 'custom_post_type_offre', 0 );

function custom_post_type_metier() {

	$labels = array(
		'name'                  => _x( 'Métiers', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Métier', 'Post Type Singular Name', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Métier', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'metier', $args );

}
add_action( 'init', 'custom_post_type_metier', 0 );


/******************************************************************************************************************/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Options du menu header',
		'menu_title'	=> 'Options du menu header',
		'menu_slug' 	=> 'header-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_page(array(
		'page_title' 	=> 'Offres urgentes',
		'menu_title'	=> 'Offres urgentes',
		'menu_slug' 	=> 'offres-urgentes-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'menu_slug' 	=> 'footer-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

/**********************************************************************************************************************/
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'footer-thumb', 1920, 640, array('center, center') );
}