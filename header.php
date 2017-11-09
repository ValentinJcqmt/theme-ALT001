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
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/tether.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/odometer.min.js"></script>
	<?php if(is_singular('annonce')){ ?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwym5r3aF4FiPneGmwyRcyn4ZfGntaQ1g&callback=initMap" async defer></script>
	<?php } ?>
	<?php if(is_page('nos-offres-demploi')){ ?>
		<script src="<?php echo get_template_directory_uri(); ?>/js/list-offres.js"></script>
	<?php } ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
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
						<?php }
						?>
					</div>
				</div>
			</div>
			<a href="#">
				<div id="account" class="text-center">
					<span class="text-uppercase d-inline-block">votre profil</span>
					<div class="account-img d-inline-block">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/espace-perso.png">
					</div>
				</div>
			</a>
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
				<a href="#">
					<div class="text-right account-link text-uppercase py-1">
						votre profil
					</div>
				</a>
		  	</div>
		</nav>
	</header>
