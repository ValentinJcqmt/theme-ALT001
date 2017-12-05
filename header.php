<?php

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<title><?php bloginfo('name'); if(!is_front_page()){echo ' | '; wp_title('');} ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#008ec7">
	<meta name="theme-color" content="#008ec7">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/odometer-theme-default.css">
	<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script> -->
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/tether.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script> -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/odometer.min.js"></script>
	<?php if(is_singular('annonce')){ ?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwym5r3aF4FiPneGmwyRcyn4ZfGntaQ1g&callback=initMap" async defer></script>
	<?php } ?>
	<?php if(is_page('blog')){ ?>
		<script src="<?php echo get_template_directory_uri(); ?>/js/list-posts.js"></script>
	<?php } ?>
	<?php if(is_page('nos-offres-demploi')){ ?>
		<script src="<?php echo get_template_directory_uri(); ?>/js/list-offres.js"></script>
	<?php } ?>
	<?php if(is_page('nos-fiches-metiers')){ ?>
		<script src="<?php echo get_template_directory_uri(); ?>/js/list-metiers.js"></script>
	<?php } ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	global $loginRes;
	if($loginRes != NULL && ( is_wp_error($loginRes) || !is_a($loginRes, 'WP_User') ) ){
		if(is_wp_error($loginRes)){
			if(array_shift($loginRes->errors)[0]){
				echo'<div class="error-login">';
				echo(array_shift($loginRes->errors)[0]);
				echo'</div>';
			}
		}elseif($loginRes != ""){
			echo'<div class="error-login">';
			echo($loginRes);
			echo'</div>';
		}
	}
	?>
	<!-- Modal -->
	<div class="modal text-center" id="modal-connect" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content bg-light-gray d-inline-block px-1 px-sm-2 px-md-3 px-lg-5 py-2">
			<div class="modal-arrow-top bg-white">
				<img src="<?php echo get_template_directory_uri(); ?>/img/btn-arrow-black-small-down.png" class="img-fluid">
			</div>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span class="text-black" aria-hidden="true">&times;</span>
	        </button>
			<div class="row">
				<div class="col-12 text-black text-uppercase pb-2 text-center font-weight-bold titre-fenetre">
					<?php echo get_field('titre-fenetre', 'option'); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-black text-uppercase py-2 text-center font-weight-bold titre-social-connect">
					<?php echo get_field('titre-rs', 'option'); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center social-connect">
					<?php do_action('oa_social_login'); ?>
				</div>
			</div>
			<div id="wp-signup">
				<div class="row">
					<div class="col-12 text-black text-uppercase py-2 text-center font-weight-bold titre-wp-connect">
						<?php echo get_field('titre-form', 'option'); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="text-center">
							<form method="POST" id="form-signup">
								<label class="text-left text-black text-uppercase">adresse mail</label>
								<input type="text" name="signupmail" placeholder="...">
								<label class="text-left text-black text-uppercase">mot de passe</label>
								<input type="password" name="signupmdp" placeholder="...">
								<label class="text-left text-black text-uppercase">confirmation de mot de passe</label>
								<input type="password" name="signupmdpconfirm" placeholder="...">
								<div class="text-uppercase bg-green text-white font-weight-bold btn-login-green mr-3">
									<input type="submit" form="form-signup" name="signup" class="bg-green text-white font-weight-bold " value="<?php echo get_field('txt-btn-signup', 'option'); ?>">
								</div>
							</form>
							<div id="go-to-login" class="btn-change-form">
								<?php echo get_field('txt-btn-go-to-login', 'option'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="wp-login" style="display:none;">
				<div class="row">
					<div class="col-12 text-black text-uppercase py-2 text-center font-weight-bold titre-wp-connect">
						<?php echo get_field('titre-form-connect', 'option'); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="text-center">
							<form method="POST" id="form-login">
								<label class="text-left text-black text-uppercase">adresse mail</label>
								<input type="text" name="loginmail" placeholder="...">
								<label class="text-left text-black text-uppercase">mot de passe</label>
								<input type="password" name="loginmdp" placeholder="...">
								<div class="text-uppercase bg-green text-white font-weight-bold btn-login-green mr-3">
									<input type="submit" form="form-login" name="login" class="text-uppercase bg-green text-white font-weight-bold" value="<?php echo get_field('txt-btn-connect', 'option'); ?>">
								</div>
							</form>
							<form method="POST" id="form-pwd-forgot" style="display:none;">
								<label class="text-left text-black text-uppercase">adresse mail</label>
								<input type="text" name="mail-pwd-forgot" placeholder="...">
								<div class="text-uppercase bg-green text-white font-weight-bold btn-login-green mr-3">
									<input type="submit" form="form-pwd-forgot" name="pwd-forgot" class="text-uppercase bg-green text-white font-weight-bold" value="Envoyer">
								</div>
							</form>
							<div id="go-to-signup" class="btn-change-form">
								<?php echo get_field('txt-btn-go-to-signup', 'option'); ?>
							</div>
							<div id="pwd-forgot" class="btn-change-form">
								<?php echo get_field('txt-btn-pwd-forgot', 'option'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="fixed-top">
		<div class="desktop-header hidden-lg-down">
			<div class="container-fluid">
				<div class="row header-nav">
					<div class="header-title d-flex my-auto mr-auto">
						<a href="<?php echo get_home_url(); ?>" class="d-block">
							<?php if(is_front_page()){
								echo '<h1 class="text-uppercase h1">'.get_field('titre', 'option').'</h1>';
							}
							else{
								echo '<div class="text-uppercase h1">'.get_field('titre', 'option').'</div>';
							}?>
						</a>
					</div>
					<div id="header-logo" class="mx-auto">
						<a href="<?php echo get_home_url(); ?>" class="d-block">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
						</a>
					</div>
					<div class="header-menu d-flex my-auto">
						<?php wp_nav_menu(array('menu' => 'Menu header')); ?>
					</div>
					<div class="header-social d-flex my-auto">
						<?php
						$twitter_url = get_field('lien_twitter', 'option');
						$linkedin_url = get_field('lien_linkedin', 'option');
						$rss_url = get_home_url()."/feed";
						$scoopit_url = get_field('lien_scoopit', 'option');
						$twitter_picto = get_field('picto_twitter', 'option');
						$linkedin_picto = get_field('picto_linkedin', 'option');
						$rss_picto = get_field('picto_rss', 'option');
						$scoopit_picto = get_field('picto_scoopit', 'option');
						if($twitter_url){ ?>
							<a class="pl-1" href="<?php echo $twitter_url; ?>" target="_blank">
								<img src="<?php echo $twitter_picto; ?>" class="img-fluid">
							</a>
						<?php }
						if($linkedin_url){ ?>
							<a class="pl-1" href="<?php echo $linkedin_url; ?>" target="_blank">
								<img src="<?php echo $linkedin_picto; ?>" class="img-fluid">
							</a>
						<?php }
						if($rss_url){ ?>
							<a class="pl-1" href="<?php echo $rss_url; ?>" target="_blank">
								<img src="<?php echo $rss_picto; ?>" class="img-fluid">
							</a>
						<?php }
						if($scoopit_url){ ?>
							<a class="pl-1" href="<?php echo $scoopit_url; ?>" target="_blank">
								<img src="<?php echo $scoopit_picto; ?>" class="img-fluid">
							</a>
						<?php }
						?>
					</div>
				</div>
			</div>
				<?php if(is_user_logged_in() || is_a($loginRes, 'WP_User')){ ?>
					<a href="<?php echo get_permalink(5335); ?>">
						<div class="account text-center">
							<span class="text-uppercase d-inline-block">votre profil</span>
							<div class="account-img d-inline-block">
								<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/espace-perso.png">
							</div>
						</div>
					</a>
				<?php }else{ ?>
					<div data-toggle="modal" data-target="#modal-connect" class="account text-center">
						<span class="text-uppercase d-inline-block">Connexion</span>
						<div class="account-img d-inline-block">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/espace-perso.png">
						</div>
					</div>
				<?php } ?>
		</div>

		<nav class="navbar navbar-toggleable-lg bg-blue text-white hidden-xl-up py-1">
			<div class="row">
			  	<div class="header-title d-flex my-auto mr-auto">
					<a href="<?php echo get_home_url(); ?>" class="d-block">
						<?php if(is_front_page()){
							echo '<h1 class="text-uppercase h1">'.get_field('titre', 'option').'</h1>';
						}
						else{
							echo '<div class="text-uppercase h1">'.get_field('titre', 'option').'</div>';
						}?>
					</a>
				</div>
			  	<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			    	<div class="burger-icon"></div>
			    	<div class="burger-icon"></div>
			    	<div class="burger-icon"></div>
			  	</button>
			</div>
		    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<div class="header-menu d-flex my-auto text-right py-1">
					<div class="ml-auto">
						<?php wp_nav_menu(array('menu' => 'Menu header')); ?>
					</div>
				</div>
				<div class="header-social d-flex my-auto text-right">
					<div class="ml-auto px-1">
						<?php
						$twitter_url = get_field('lien_twitter', 'option');
						$linkedin_url = get_field('lien_linkedin', 'option');
						$rss_url = get_field('lien_rss', 'option');
						$scoopit_url = get_field('lien_scoopit', 'option');
						$twitter_picto = get_field('picto_twitter', 'option');
						$linkedin_picto = get_field('picto_linkedin', 'option');
						$rss_picto = get_field('picto_rss', 'option');
						$scoopit_picto = get_field('picto_scoopit', 'option');
						if($twitter_url){ ?>
							<a class="pl-1" href="<?php echo $twitter_url; ?>" target="_blank">
								<img src="<?php echo $twitter_picto; ?>" class="img-fluid">
							</a>
						<?php }
						if($linkedin_url){ ?>
							<a class="pl-1" href="<?php echo $linkedin_url; ?>" target="_blank">
								<img src="<?php echo $linkedin_picto; ?>" class="img-fluid">
							</a>
						<?php }
						if($rss_url){ ?>
							<a class="pl-1" href="<?php echo $rss_url; ?>" target="_blank">
								<img src="<?php echo $rss_picto; ?>" class="img-fluid">
							</a>
						<?php }
						if($scoopit_url){ ?>
							<a class="pl-1" href="<?php echo $scoopit_url; ?>" target="_blank">
								<img src="<?php echo $scoopit_picto; ?>" class="img-fluid">
							</a>
						<?php } ?>
					</div>
				</div>
				<?php if((is_user_logged_in() || is_a($loginRes, 'WP_User'))){ ?>
					<a href="<?php echo get_permalink(5335); ?>">
						<div class="text-right account-link text-uppercase py-1">
							votre profil
						</div>
					</a>
				<?php }else{ ?>
					<div data-toggle="modal" data-target="#modal-connect" class="text-center">
						<div class="text-right account-link text-uppercase py-1">
							connexion
						</div>
					</div>
				<?php } ?>
		  	</div>
		</nav>
	</header>
