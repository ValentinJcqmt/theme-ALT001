<?php
get_header(); ?>

<div class="main">
	<div style="background-image: url(<?php echo get_field('hp-top-bg')['url']; ?>);" class="hp-bg">
		<div class="container-fluid">
			<div class="row hp-top-row">
				<div class="col-12 col-lg-4 carousel-urgentes">
					<div class="row mt-2 mb-5">
						<div class="col-12">
							<img class="logo-atlantis-rh img-fluid" src="<?php echo get_field('logo-big')['url']; ?>">
						</div>
					</div>
					<div class="row mt-5 mb-2">
						<div class="col-12 titre-carousel-urgentes text-red text-uppercase">
							<div class="d-inline">
								<img src="<?php echo get_template_directory_uri(); ?>/img/red-bell-white-bg.png">
							</div>
							<div class="d-inline ml-1">
								<?php echo get_field('hp-top-titre-o-u'); ?>
							</div>
						</div>
					</div>
					<div class="owl-carousel-offres-hp owl-carousel text-black">
						<?php ?>
						<div class="carousel-offre">
							<div class="offre-titre text-uppercase d-inline-block">Titre offre</div>
							<div class="offre-ref my-1">Référence : <b>123/456/789</b></div>
							<div class="offre-info">Contrat : <b>CDI</b></div>
							<div class="offre-info">Fonction : <b>Ingénieur</b></div>
							<div class="offre-info">Secteur : <b>Ingénierie Générale Bâtiment</b></div>
							<div class="offre-info">Salaire (€/an) : <b>45000 à 52000</b></div>
							<div class="offre-info">Localisation : <b>Ivry sur Seine (France)</b></div>
							<div class="offre-update my-1">Mise à jour le 11/09/2017 Atlantis RH...</div>
							<a href="#" class="my-1 py-1 px-5 bg-black text-uppercase text-white gray-btn-arrow">
								voir l'annonce
							</a>
						</div>
						<div class="carousel-offre">
							<div class="offre-titre text-uppercase d-inline-block">Titre offre</div>
							<div class="offre-ref my-1">Référence : <b>123/456/789</b></div>
							<div class="offre-info">Contrat : <b>CDI</b></div>
							<div class="offre-info">Fonction : <b>Ingénieur</b></div>
							<div class="offre-info">Secteur : <b>Ingénierie Générale Bâtiment</b></div>
							<div class="offre-info">Salaire (€/an) : <b>45000 à 52000</b></div>
							<div class="offre-info">Localisation : <b>Ivry sur Seine (France)</b></div>
							<div class="offre-update my-1">Mise à jour le 11/09/2017 Atlantis RH...</div>
							<a href="#" class="my-1 py-1 px-5 bg-black text-uppercase text-white gray-btn-arrow">
								voir l'annonce
							</a>
						</div>
						<?php ?>
					</div>
				</div>
			</div>
			<div class="row hp-top-row">
				<div class="col-12 col-lg-8 offset-lg-4">
					<div class="row hp-top-cards">
						<div class="col-4">
							<div class="img-container">
								<img src="<?php echo get_field('hp-top-gauche-img')['url']; ?>">
								<div class="img-caption text-uppercase text-white p-1 p-md-2 p-lg-3">
									<?php echo get_field('hp-top-gauche-txt'); ?>
								</div>
							</div>
						</div>
						<div class="col-4 bg-white px-1 px-md-2 px-lg-4 py-5">
							<div class="hp-top-card-top">
								<p class="text-black text-uppercase hp-top-card-title">
									<?php echo get_field('hp-top-centre-titre'); ?>	
								</p>
								<div class="text-black text-uppercase hp-top-card-txt">
									<?php echo get_field('hp-top-centre-txt'); ?>
								</div>
							</div>
							<a href="<?php echo get_field('hp-top-centre-profils-url');?>" class="my-1 d-inline-block text-center py-1 bg-green text-uppercase text-white green-btn-arrow hp-top-card-btn">
								<?php echo get_field('hp-top-centre-profils'); ?>
							</a>
							<a href="<?php echo get_field('hp-top-centre-offres-url');?>" class="my-1 d-inline-block text-center py-1 bg-black text-uppercase text-white gray-btn-arrow hp-top-card-btn">
								<?php echo get_field('hp-top-centre-offres'); ?>
							</a>
						</div>
						<div class="col-4 bg-blue-transparent px-1 px-md-2 px-lg-4 py-5">
							<div class="hp-top-card-top">
								<p class="text-white text-uppercase hp-top-card-title">
									<?php echo get_field('hp-top-droite-titre'); ?>
								</p>
								<div class="text-white text-uppercase hp-top-card-txt">
									<?php echo get_field('hp-top-droite-txt'); ?>
								</div>
							</div>
							<form class="hp-top-card-form">
								<input type="search" class="my-1 p-1 search-field-white text-uppercase text-white" placeholder="<?php echo get_field('hp-top-droite-metier'); ?>" name="metier">
								<input type="search" class="my-1 p-1 search-field-white text-uppercase text-white" placeholder="<?php echo get_field('hp-top-droite-lieu'); ?>" name="lieu">
								<div class="submit-input">
									<input type="submit" class="p-1 btn-search-blue bg-blue text-uppercase text-white" name="recherche" value="<?php echo get_field('hp-top-droite-search'); ?>">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--End .container-fluid-->
	</div><!--End .hp-bg-->
	<div class="row">
		<div class="col-12 col-lg-4 bg-black text-white text-center hp-who hp-3bloc-container py-3">
			<div class="row px-4 hp-3bloc-align">
				<div class="col-12 text-uppercase hp-who-title">
					<?php echo get_field('hp-3bloc-i-gauche-titre'); ?>
				</div>
				<div class="col-12 hp-who-txt my-4">
					<?php echo get_field('hp-3bloc-i-gauche-texte'); ?>
				</div>
				<div class="col-12">
					<a href="<?php echo get_field('hp-3bloc-i-gauche-url-btn'); ?>" class="d-inline-block my-1 py-1 px-5 bg-white text-uppercase text-black white-btn-arrow">
						<?php echo get_field('hp-3bloc-i-gauche-txt-btn'); ?>
					</a>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-4 bg-yellow text-white text-center hp-offers-number hp-3bloc-container py-3">
			<div class="row px-4 hp-3bloc-align">
				<div class="col-12 text-uppercase hp-offers-number-title">
					<?php echo get_field('hp-3bloc-i-centre-texte-haut'); ?>
				</div>
				<div class="col-12 odometer text-uppercase hp-odometer">
					0
				</div>
				<div class="col-12 hp-offers-number-txt">
					<?php echo get_field('hp-3bloc-i-centre-texte-bas'); ?>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-4 hp-3bloc-container">
			<img src="<?php echo get_field('hp-3bloc-i-droite-img')['url']; ?>" class="img-fluid">
		</div>
	</div><!--End .row-->
	<div class="bg-light-gray">
		<div class="container-fluid">
			<div class="row py-5 text-center choix-profil">
				<div class="col-12 col-lg-6 offset-lg-3">
					<div class="row">
						<div class="col-12 text-black text-uppercase choix-profil-title mb-3">
							<?php echo get_field('hp-profils-titre'); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-12 choix-profil-txt">
							<?php echo get_field('hp-profils-txt'); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-12 choix-profil-form my-3">
							<form>
								<select id="hp-choix-profil" class="p-1 bg-white text-uppercase text-black">
									<option><?php echo get_field('hp-profils-list-txt'); ?></option>
									<option>Plop 1</option>
									<option>Plop 2</option>
								</select>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--End .container-fluid-->
	</div><!--End .bg-light-gray-->
	<div class="row">
		<div class="col-12 col-lg-4 bg-linkedin-picto hp-3bloc-container text-center py-3 py-lg-0">
			<div class="row px-4 hp-3bloc-align">
				<div class="col-12 py-3">
					<p class="text-white text-uppercase hp-linkedin-title">
						<?php echo get_field('hp-3bloc-s-linkedin-titre'); ?>
					</p>
					<a href="<?php echo get_field('hp-3bloc-s-linkedin-url-btn'); ?>" class="my-3 py-1 d-inline-block text-center bg-white text-uppercase text-light-blue white-btn-arrow">
						<?php echo get_field('hp-3bloc-s-linkedin-txt-btn'); ?>
					</a>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-4 hp-3bloc-container">
			<img src="<?php echo get_field('hp-3bloc-s-centre-img')['url']; ?>" class="img-fluid">
		</div>
		<div class="col-12 col-lg-4 bg-twitter-picto hp-3bloc-container text-center py-3 py-lg-0">
			<div class="row px-5 hp-3bloc-align">
				<div class="col-12">
					<p class="text-uppercase text-white hp-twitter-title">
						<?php echo get_field('hp-3bloc-s-twitter-titre'); ?>
					</p>
					<div class="text-center hp-twitter-text my-2 text-white">
						<?php echo get_field('hp-3bloc-s-twitter-txt'); ?>
					</div>
					<ul class="hp-twitter-list text-uppercase text-center">
						<?php foreach(get_field('hp-3bloc-s-twitter-comptes') as $compte){ ?>
							<li>
								<a href="http://www.twitter.com/<?php echo $compte['nom-twitter'] ?>" target="_blank" class="text-white d-inline-block my-1 tewt-uppercase twitter-link">@<?php echo $compte['nom-twitter'] ?></a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div><!--End .row-->
	<div class="social-login-bloc" style="background-image: url(<?php echo get_field('social-connect-img')['url']; ?>);">
		<div class="container-fluid py-5">
			<div class="row py-5">
				<div class="col-12 text-white text-uppercase social-connect-subtitle">
					<?php echo get_field('social-connect-subtitle'); ?>
				</div>
				<div class="col-12 text-white text-uppercase social-connect-title my-3">
					<?php echo get_field('social-connect-txt'); ?>
				</div>
				<div class="col-12 social-login-btn">
					<div class="fb-login">
						<a href="<?php echo '#';?>" class="d-inline-block my-1 py-1 text-center bg-facebook text-uppercase text-white facebook-btn-arrow">
							Se connecter avec facebook
						</a>
					</div>
					<div class="twitter-login">
						<a href="<?php echo '#';?>" class="d-inline-block my-1 py-1 text-center bg-twitter text-uppercase text-white twitter-btn-arrow">
							Se connecter avec Twitter
						</a>
					</div>
					<div class="google-login">
						<a href="<?php echo '#';?>" class="d-inline-block my-1 py-1 text-center bg-google text-uppercase text-white google-btn-arrow">
							Se connecter avec google +
						</a>
					</div>
					<div class="linkedin-login">
						<a href="<?php echo '#';?>" class="d-inline-block my-1 py-1 text-center bg-linkedin text-uppercase text-white bg-linkedin linkedin-btn-arrow">
							Se connecter avec linkedin
						</a>
					</div>
				</div>
			</div>
		</div><!--End .container-fluid-->
	</div><!--End .social-login-bloc-->
	<div class="bg-light-gray py-5">
		<div class="container-fluid last-offers">
			<div class="row">
				<div class="col-12 col-sm-8 col-lg-6 col-xl-4 offset-sm-2 offset-lg-3 offset-xl-4">
					<div class="row">
						<div class="col-12 text-black text-uppercase text-center last-offers-title">
							<?php echo get_field('last-offers-title'); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-12 text-center last-offers-desc my-1 px-5">
							<?php echo get_field('last-offers-desc'); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-12 text-center px-5">
							<div class="d-inline-block caption-urgent text-left mx-5 px-5">
								<?php echo get_field('last-offers-details'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="list-offers my-5">
				<div class="row">
					<div class="col-12 text-center">
						<!--Offre1-->
						<div class="row">
							<div class="offre-left offre-urgente col-12 col-lg-6 my-2 my-lg-1">
								<div class="row">
									<div class="col-3 offre-title text-white px-2 py-4 bg-red">
										<p class="name-offre text-uppercase">Ingénieur synthèse BIM (H/F)</p>
										<p class="ref-offre">Référence : <em>123/456/789</em></p>
									</div>
									<div class="col-9 bg-white text-black px-3 py-2 offre-infos">
										<p class="info-offre">Contrat : <em>CDI</em></p>
										<p class="info-offre">Fonction : <em>Ingénieur Synthèse</em></p>
										<p class="info-offre">Secteur : <em>Ingénierie Générale Bâtiment</em></p>
										<p class="info-offre">Salaire (€/an) : <em>45000 à 52000</em></p>
										<p class="info-offre">Localisation : <em>Ivry sur Seine (France)</em></p>
										<p class="update-offre my-1">Mis à jour le 11/09/2017 Atlantis RH cherche pour un client, groupe de l'ingénieie de la construction, un ingénieur Synthèse BIM (H/F) sur l'Île de France</p>
									</div>
								</div>
							</div>
						</div>
						<!--Offre2-->
						<div class="row">
							<div class="offre-right offre-urgente col-12 col-lg-6 offset-lg-6 my-2 my-lg-1">
								<div class="row">
									<div class="col-9 bg-white text-black px-3 py-2 offre-infos">
										<p class="info-offre">Contrat : <em>CDI</em></p>
										<p class="info-offre">Fonction : <em>Ingénieur Synthèse</em></p>
										<p class="info-offre">Secteur : <em>Ingénierie Générale Bâtiment</em></p>
										<p class="info-offre">Salaire (€/an) : <em>45000 à 52000</em></p>
										<p class="info-offre">Localisation : <em>Ivry sur Seine (France)</em></p>
										<p class="update-offre my-1">Mis à jour le 11/09/2017 Atlantis RH cherche pour un client, groupe de l'ingénieie de la construction, un ingénieur Synthèse BIM (H/F) sur l'Île de France</p>
									</div>
									<div class="col-3 offre-title text-white px-2 py-4 bg-red">
										<p class="name-offre text-uppercase">Ingénieur synthèse BIM (H/F)</p>
										<p class="ref-offre">Référence : <em>123/456/789</em></p>
									</div>
								</div>
							</div>
						</div>
						<!--Offre3-->
						<div class="row">
							<div class="offre-left col-12 col-lg-6 my-2 my-lg-1">
								<div class="row">
									<div class="col-3 offre-title bg-black text-white px-2 py-4">
										<p class="name-offre text-uppercase">Ingénieur synthèse BIM (H/F)</p>
										<p class="ref-offre">Référence : <em>123/456/789</em></p>
									</div>
									<div class="col-9 bg-white text-black px-3 py-2 offre-infos">
										<p class="info-offre">Contrat : <em>CDI</em></p>
										<p class="info-offre">Fonction : <em>Ingénieur Synthèse</em></p>
										<p class="info-offre">Secteur : <em>Ingénierie Générale Bâtiment</em></p>
										<p class="info-offre">Salaire (€/an) : <em>45000 à 52000</em></p>
										<p class="info-offre">Localisation : <em>Ivry sur Seine (France)</em></p>
										<p class="update-offre my-1">Mis à jour le 11/09/2017 Atlantis RH cherche pour un client, groupe de l'ingénieie de la construction, un ingénieur Synthèse BIM (H/F) sur l'Île de France</p>
									</div>
								</div>
							</div>
						</div>
						<!--Offre4-->
						<div class="row">
							<div class="offre-right col-12 col-lg-6 offset-lg-6 my-2 my-lg-1">
								<div class="row">
									<div class="col-9 bg-white text-black px-3 py-2 offre-infos">
										<p class="info-offre">Contrat : <em>CDI</em></p>
										<p class="info-offre">Fonction : <em>Ingénieur Synthèse</em></p>
										<p class="info-offre">Secteur : <em>Ingénierie Générale Bâtiment</em></p>
										<p class="info-offre">Salaire (€/an) : <em>45000 à 52000</em></p>
										<p class="info-offre">Localisation : <em>Ivry sur Seine (France)</em></p>
										<p class="update-offre my-1">Mis à jour le 11/09/2017 Atlantis RH cherche pour un client, groupe de l'ingénieie de la construction, un ingénieur Synthèse BIM (H/F) sur l'Île de France</p>
									</div>
									<div class="col-3 offre-title bg-black text-white px-2 py-4">
										<p class="name-offre text-uppercase">Ingénieur synthèse BIM (H/F)</p>
										<p class="ref-offre">Référence : <em>123/456/789</em></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--End .container-fluid-->
	</div><!--End .bg-light-gray-->
</div><!--End .main-->

<?php get_footer();
