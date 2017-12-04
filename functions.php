<?php
//require_once WP_CONTENT_DIR . '/themes/atlantisrh/import_annonces.php';

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_theme_support( 'post-thumbnails' );

register_nav_menus(array('primary' => 'Menu'));

show_admin_bar( false );

function wpdocs_set_html_mail_content_type() {
    return 'text/html';
}
add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
if ( function_exists('register_sidebar') )
register_sidebar(array('id' => 'sidebar-1'));

add_filter( 'amp_post_template_data', 'amp_set_site_icon_url' );
function amp_set_site_icon_url( $data ) {
	$data[ 'site_icon_url' ] = get_stylesheet_directory_uri() . '/img/favicon/favicon-32x32.png';
	return $data;
}
add_filter( 'amp_post_template_file', 'xyz_amp_set_custom_template', 10, 3 );

function xyz_amp_set_custom_template( $file, $type, $post ) {
	if ( 'single' === $type ) {
		$file = dirname( __FILE__ ) . '/templates/my-amp-template.php';
	}
	return $file;
}

add_action( 'amp_init', 'amp_add_annonce_cpt' );
function amp_add_annonce_cpt() {
	add_post_type_support( 'annonce', AMP_QUERY_VAR );
}

add_filter( 'amp_post_template_file', 'amp_set_review_template', 10, 3 );
function amp_set_review_template( $file, $type, $post ) {
	if ( 'single' === $type && 'annonce' === $post->post_type ) {
		$file = dirname( __FILE__ ) . '/amp/amp-annonce.php';
	}
	if ( 'single' === $type && 'post' === $post->post_type ) {
		$file = dirname( __FILE__ ) . '/amp/amp-post.php';
	}
	if ( 'style' === $type) {
		$file = dirname( __FILE__ ) . '/amp/style.php';
	}
	return $file;
}
/**********************************************************************************************************************/

add_image_size( 'hp-intro', 340, 450, true );
add_image_size( 'hp-3bloc-img', 650, 650, true );
add_image_size( 'top-logo-bg', 2000, 150, true );
add_image_size( 'article-card', 700, 200, true );
add_image_size( 'article-thumbnail', 2000, 350, true );

/**********************************************************************************************************************/

add_filter( 'algolia_post_annonce_shared_attributes', 'my_post_attributes', 10, 2 );
add_filter( 'algolia_searchable_post_annonce_shared_attributes', 'my_post_attributes', 10, 2 );
function my_post_attributes( array $attributes, WP_Post $post ) {
	// $attributes["loc"] = get_field('city', $post->ID).' '.get_field('pays', $post->ID).' '.get_field('zip', $post->ID);
    $attributes["fields"] = get_field('city', $post->ID).' '.get_field('pays', $post->ID);
    $attributes["loc"] = get_field('city', $post->ID).', '.get_field('pays', $post->ID);
    // Always return the value we are filtering.
    return $attributes;
}

add_filter( 'algolia_posts_annonce_index_settings', 'my_posts_index_settings' );

function my_posts_index_settings( array $settings ) {
    // $settings['attributesToIndex'] = array('unordered(loc)');
    // $settings['attributesToSnippet'] = array('loc:50');
    $settings['attributesToIndex'][] = 'unordered(fields)';
    $settings['attributesToSnippet'][] = 'fields:50';
    // Always return the value we are filtering.
    return $settings;
}


/**********************************************************************************************************************/

//After form submission "Candidature - Utilisateur connecté"
add_action( 'gform_after_submission_10', 'after_submission_10', 10, 2 );
function after_submission_10( $entry, $form ) {
	if(is_user_logged_in()){
		$user = wp_get_current_user();
		$user_id = "user_".$user->ID;
	    $userfields = get_field_objects($user_id);
	    $oldAttachment = $userfields['cv']['value']['ID'];
	    global $loginRes;
		if(isset($entry[10]) && $entry[10] != ""){
			$url = $entry[10];
			$filetype = wp_check_filetype( basename( $url ), null );
			$wp_upload_dir = wp_upload_dir();
			$attachment = array(
				'guid'           => $wp_upload_dir['url'] . '/' . basename( $url ), 
				'post_mime_type' => $filetype['type'],
				'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $url ) ),
				'post_content'   => '',
				'post_status'    => 'inherit'
			);
			$id = wp_insert_attachment($attachment, $url, null );
			if(is_int($id)){
				wp_delete_attachment( $oldAttachment, true); 
				update_field('cv', $id, $user_id);
			}
			elseif(is_wp_error($id)){
				$loginRes = $id;
			}
		}
		if($entry[4] != $userfields['url-linkedin']['value']){
			update_field('url-linkedin', $entry[4], $user_id);
		}
		if(isset($entry[12])){
			$candidatures = $userfields['offres-postulees']['value'];
			array_push($candidatures, $entry[12]);
			update_field('offres-postulees', $candidatures, $user_id);
		}
	}
}
//Before form submission "Candidature - Utilisateur connecté"
add_action( 'gform_pre_submission_10', 'pre_submission_10', 10, 2 );
function pre_submission_10( $form ){
	if(isset($_FILES["input_10"]) && $_FILES['input_10']['size'] != 0 && $_FILES['input_10']['error'] == 0){
		$_POST["input_9"] = "";
	}
}
/**********************************************************************************************************************/

//After form submission "Candidature - Utilisateur non connecté"
add_action( 'gform_after_submission_7', 'after_submission_7', 10, 2 );
function after_submission_7( $entry, $form ) {
	if($entry["6.1"] != ""){
		global $loginRes;
		$mail_exists = email_exists( $entry[3] );
		$same_pwd = ( $entry[9] == $entry[10] );
		if($same_pwd && !$mail_exists){
			$userlog = wp_create_user( $entry[3], $entry[9], $entry[3] );
			if(!is_wp_error($userlog)){
			    $userlog = wp_signon( array(
			        'user_login'    => $entry[3],
			        'user_password' => $entry[9],
			        'remember'      => true
			    ), false );
			}
			$loginRes = $userlog;
			if(is_a($userlog, 'WP_User')){
				$current_user = $userlog;
				$user_id = "user_".$current_user->ID;
			    $userfields = get_field_objects($user_id);
				if(isset($entry[2])){
					$args = array(
					    'ID'         => $current_user->ID,
					    'first_name' => esc_attr( $entry[2] )
					);
					wp_update_user( $args );
				}
				if(isset($entry[1])){
					$args = array(
					    'ID'         => $current_user->ID,
					    'last_name' => esc_attr( $entry[1] )
					);
					wp_update_user( $args );
				}
				if(isset($entry[4])){
					update_field('url-linkedin', $entry[4], $user_id);
				}
				if(isset($entry[5]) && $entry[5] != ""){
					$url = $entry[5];
					$filetype = wp_check_filetype( basename( $url ), null );
					$wp_upload_dir = wp_upload_dir();
					$attachment = array(
						'guid'           => $wp_upload_dir['url'] . '/' . basename( $url ), 
						'post_mime_type' => $filetype['type'],
						'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $url ) ),
						'post_content'   => '',
						'post_status'    => 'inherit'
					);
					$id = wp_insert_attachment($attachment, $url, null );
					if(is_int($id)){
						update_field('cv', $id, $user_id);
					}
					elseif(is_wp_error($id)){
						$loginRes = $id;
					}
				}
				if(isset($entry[14])){
					$candidatures = array($entry[14]);
					update_field('offres-postulees', $candidatures, $user_id);
				}
			}
		}
	}
}
add_filter( 'gform_validation_7', 'custom_validation' );
function custom_validation( $validation_result ) {
    $form = $validation_result['form'];
 
    if ( email_exists( rgpost('input_3') ) ) {
        $validation_result['is_valid'] = false;
        foreach( $form['fields'] as &$field ) {
            if ( $field->id == '3' ) {
                $field->failed_validation = true;
                $field->validation_message = 'Cette adresse email est déjà associée à un compte Atlantis RH.';
                break;
            }
        }
    }

    if ( rgpost('input_9') != rgpost('input_10') ) {
        $validation_result['is_valid'] = false;
        foreach( $form['fields'] as &$field ) {
            if ( $field->id == '10' ) {
                $field->failed_validation = true;
                $field->validation_message = 'Les mots de passe doivent être identiques.';
                break;
            }
        }
    } 
    $validation_result['form'] = $form;
    return $validation_result;
 
}

/**********************************************************************************************************************/

function my_enqueue() {
    wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/functions.js' );

    wp_localize_script( 'ajax-script', 'ajax_params', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue' );
/**********************************************************************************************************************/

//Called in ajax from profil page
function deleteCandidature() {
    if( isset($_POST['offerId']) && isset($_POST['userId']) ){
        $offerId = $_POST['offerId'];
        $user_id = "user_".$_POST['userId'];
        $userfields = get_field_objects($user_id);
		$candidatures = $userfields['offres-postulees']['value'];
		$pos = array_search($offreId, $candidatures);
		array_splice($candidatures, $pos, 1);
		update_field('offres-postulees', $candidatures, $user_id);
        echo true;
        wp_die();
    }
    else{
        echo false;
        wp_die();
    }
}
add_action('wp_ajax_deleteCandidature', 'deleteCandidature');
add_action('wp_ajax_nopriv_deleteCandidature', 'deleteCandidature');

/**********************************************************************************************************************/
function my_admin_init(){
    if( !defined('DOING_AJAX') && !current_user_can('editor') ){
        wp_redirect( home_url() );
        exit();
    }
}
add_action('admin_init','my_admin_init');
/**********************************************************************************************************************/
//Profile edit
add_action('template_redirect', 'check_profile_edit');

function check_profile_edit(){
	if(is_user_logged_in() && isset($_POST) && isset($_POST['save-profil']) ){
		$current_user = wp_get_current_user();
		$user_id = "user_".$current_user->ID;
		$userfields = get_field_objects($user_id);
		if($_POST['firstname'] != $current_user->user_firstname){
			$args = array(
			    'ID'         => $current_user->ID,
			    'first_name' => esc_attr( $_POST['firstname'] )
			);
			wp_update_user( $args );
		}
		if($_POST['lastname'] != $current_user->user_lastname){
			$args = array(
			    'ID'         => $current_user->ID,
			    'last_name' => esc_attr( $_POST['lastname'] )
			);
			wp_update_user( $args );
		}
		if($_POST['mail'] != $current_user->user_email){
			if (email_exists( $_POST['mail'] )){
				global $loginRes;
				$loginRes = "Un utilisateur est déjà enregistré avec cette adresse email.";
	        } else {
	        	$current_user->user_email = $_POST['mail'];
	            $args = array(
	                'ID'         => $current_user->ID,
	                'user_email' => esc_attr( $current_user->user_email )
	            );
	        	wp_update_user( $args );
	       }
		}
		if(isset($_POST['newpwd']) && isset($_POST['newpwd-confirm']) && $_POST['newpwd'] != ""){
			if ($_POST['newpwd'] == $_POST['newpwd']){
				wp_set_password( $_POST['newpwd'], $current_user->ID);
				$user_email = $current_user->user_email;
				$message = "Votre nouveau mot de passe de connexion a été modifié. <br><br>";
			    $message .= "Si vous n'êtes pas à l'origine de ce changement, veuillez nous contacter. <br>";

			    $title = "Atlantis RH - Mot de passe changé";

			    if ( $message && !wp_mail($user_email, $title, $message) ){
			        wp_die( __('The e-mail could not be sent.') );
			        return "L'email n'a pas pu être envoyé.";
			    }
	        } else {
				global $loginRes;
				$loginRes .= "Les mots de passe ne correspondent pas.";
	       }
		}
		if (isset($_FILES) && isset($_FILES['cv']) && $_FILES['cv']['size'] != 0 && $_FILES['cv']['error'] == 0 ){
		    $cv = $_FILES['cv'];
		    $oldAttachment = $userfields['cv']['value']['ID'];
			$newupload = insert_attachment('cv',null);
			if(is_int($newupload)){
				wp_delete_attachment( $oldAttachment, true); 
				update_field('cv', $newupload, $user_id);
			}
		}
		if($_POST['linkedin'] != $userfields['url-linkedin']['value']){
			update_field('url-linkedin', $_POST['linkedin'], $user_id);
		}
	}
}

function  insert_attachment($file_handler,$post_id,$setthumb='false') {
	// check to make sure its a successful upload
	if ($_FILES[$file_handler]['error'] !== UPLOAD_ERR_OK) __return_false();

	require_once(ABSPATH . "wp-admin" . '/includes/image.php');
	require_once(ABSPATH . "wp-admin" . '/includes/file.php');
	require_once(ABSPATH . "wp-admin" . '/includes/media.php');
	$attach_id = media_handle_upload( $file_handler, $post_id );

	if ($setthumb) update_post_meta($post_id,'_thumbnail_id',$attach_id);
	return $attach_id;
} 
/**********************************************************************************************************************/
//Modal Login
add_action('template_redirect', 'my_check_login');

function my_check_login(){
    global $loginRes;
	if(isset($_POST) && isset($_POST['signup'])){
		$loginRes = modalSignUp();
	}
	if(isset($_POST) && isset($_POST['login'])){
		$loginRes = modalLogIn();
	}
	if(isset($_POST) && isset($_POST['pwd-forgot'])){
		$loginRes = passwordForgot();
	}
}

function passwordForgot(){
	if( isset($_POST['mail-pwd-forgot']) ){
		if( email_exists( $_POST['mail-pwd-forgot'] ) ){
			$user_email = $_POST['mail-pwd-forgot'];
			$user = get_user_by( 'email', $_POST['mail-pwd-forgot'] );
			$newpwd = wp_generate_password(8);
			wp_set_password( $newpwd, $user->ID);
			$home_url = get_home_url();

		    $message = "Votre nouveau mot de passe de connexion est le suivant: <br><br>";
		    $message .= $newpwd."<br><br>";
		    $message .= "<a href='".$home_url.";'>Connectez-vous maintenant</a>, et pensez à modifier votre mot de passe dans votre espace personnel. <br>";

		    $title = "Atlantis RH - Mot de passe réinitialisé";

		    if ( $message && !wp_mail($user_email, $title, $message) ){
		        wp_die( __('The e-mail could not be sent.') );
		        return "L'email n'a pas pu être envoyé.";
		    }
		}
		else{
			return "Aucun utilisateur n'est enregistré avec cette addresse e-mail (".$_POST['mail-pwd-forgot'].")";
		}
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
	if(isset($_POST['loginmail']) && !email_exists( $_POST['loginmail'] )){
		return "Cette adresse email n'est associée à aucun compte Atlantis RH.";
	}
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