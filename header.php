<?php

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
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
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/tether.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="bg-blue text-white fixed-top">
		<div class="container-fluid">
			<div class="row">
				<div class="header-title"><h1 class="text-uppercase"><?php echo get_field('titre', 'option'); ?></h1></div>
				<div class="header-menu">
					<?php wp_nav_menu('Menu'); ?>
				</div>
				<div class="header-social">
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
						<a href="<?php echo $twitter_url; ?>" target="_blank">
							<img src="<?php echo $twitter_picto; ?>" class="img-fluid">
						</a>
					<?php }
					if($linkedin_url){ ?>
						<a href="<?php echo $linkedin_url; ?>" target="_blank">
							<img src="<?php echo $linkedin_picto; ?>" class="img-fluid">
						</a>
					<?php }
					if($rss_url){ ?>
						<a href="<?php echo $rss_url; ?>" target="_blank">
							<img src="<?php echo $rss_picto; ?>" class="img-fluid">
						</a>
					<?php }
					if($scoopit_url){ ?>
						<a href="<?php echo $scoopit_url; ?>" target="_blank">
							<img src="<?php echo $scoopit_picto; ?>" class="img-fluid">
						</a>
					<?php }
					?>
				</div>
			</div>
		</div>
		<div class="bg-blue">
			<img src="">
			<span class="text-uppercase">votre profil</span>
		</div>
	</header>
