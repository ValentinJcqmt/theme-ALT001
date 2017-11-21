<?php
//require_once WP_CONTENT_DIR . '/themes/atlantisrh/import_annonces.php';

add_theme_support( 'post-thumbnails' );

register_nav_menus(array('primary' => 'Menu'));

show_admin_bar( false );

/**
 * Register our sidebars and widgetized areas.
 *
 */
if ( function_exists('register_sidebar') )
register_sidebar(array('id' => 'sidebar-1'));
/**********************************************************************************************************************/
! defined( 'ABSPATH' ) AND exit;

function wpse66093_no_admin_access()
{
    $redirect = get_home_url();
    if ( is_user_logged_in() && !current_user_can( 'administrator' ) )
        exit( wp_redirect( $redirect ) );
}
add_action( 'admin_init', 'wpse66093_no_admin_access', 100 );
/**********************************************************************************************************************/
//Profile edit
add_action('template_redirect', 'check_profile_edit');

check_profile_edit(){
	if(is_user_logged_in() && isset($_POST) && isset($_POST['save-profil'])){
		$current_user = wp_get_current_user();
		$user_id = "user_".$current_user->ID;
		$userfields = get_field_objects($user_id);
		if($_POST['firstname'] != $current_user->user_firstname){
			//update user firstname
		}
		if($_POST['lastname'] != $current_user->user_lastname){
			//update user lastname
		}
		if($_POST['mail'] != $current_user->user_email){
			//update user mail
		}
		if (isset($_FILES) && isset($_FILES['cv']) && $_FILES['cv']['size'] != 0 ){
		    update_field('cv', $value, $user_id);
		}
		if($_POST['linkedin'] != $userfields['url-linkedin']['value']){
			update_field('url-linkedin', $value, $user_id);
		}
	}
}
/**********************************************************************************************************************/
//Modal Login
add_action('template_redirect', 'my_check_login');

function my_check_login(){
    global $loginRes;
    $loginRes = null;
	if(isset($_POST) && isset($_POST['signup'])){
		$loginRes = modalSignUp();
	}
	if(isset($_POST) && isset($_POST['login'])){
		$loginRes = modalLogIn();
	}
}
function modalSignUp(){
	if(isset($_POST['signupmail']) && isset($_POST['signupmdp']) && isset($_POST['signupmdpconfirm'])){
		if($_POST['signupmdp'] == $_POST['signupmdpconfirm'] && !email_exists($_POST['signupmail'])){
			$userlog = wp_create_user( $_POST['signupmail'], $_POST['signupmdp'], $_POST['signupmail'] );
			if(!is_wp_error($userlog)){
			    $userlog = wp_signon( array(
			        'user_login'    => $_POST['signupmail'],
			        'user_password' => $_POST['signupmdp'],
			        'remember'      => true
			    ), false );
			}
			return $userlog;
		}
		else if(email_exists($_POST['signupmail'])){
			return "Email allready exist";
		}
		else if(!($_POST['signupmdp'] == $_POST['signupmdpconfirm'])){
			return "Passwords not matching";
		}
	}
}

function modalLogIn(){
	if(isset($_POST['loginmail']) && isset($_POST['loginmdp'])){
		    $user = wp_signon( array(
		        'user_login'    => $_POST['loginmail'],
		        'user_password' => $_POST['loginmdp'],
		        'remember'      => true
		    ), false );
			return $user;
	}
}

/**********************************************************************************************************************/
function tr_create_my_taxonomy() {

    register_taxonomy(
        'offer-category',
        array('annonce', 'metier'),
        array(
            'label' => __( 'Catégorie d\'annonce' ),
            'rewrite' => array( 'slug' => 'offer-category' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'tr_create_my_taxonomy' );

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
		'taxonomies'            => array( 'offer-category' ),
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
		'supports'              => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
		'taxonomies'            => array( 'offer-category' ),
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

	acf_add_options_page(array(
		'page_title' 	=> 'Bas de page d\'article',
		'menu_title'	=> 'Bas de page d\'article',
		'menu_slug' 	=> 'post-content',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

/**********************************************************************************************************************/
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'footer-thumb', 1920, 640, array('center, center') );
}

/*****************************************************************************************************************/
add_action( 'init', 'generate_disable_wp_emojicons' );
function generate_disable_wp_emojicons() 
{
 // all actions related to emojis
 remove_action( 'admin_print_styles', 'print_emoji_styles' );
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
}