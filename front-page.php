<?php
get_header(); ?>

<div class="main">
	<div style="background-image: url(<?php echo get_field('hp-top-bg')['url']; ?>);" class="hp-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-4 carousel-urgentes">
					<div class="row">
						<div class="col-12">
							<img class="logo-atlantis-rh img-fluid" src="<?php echo get_field('logo-big')['url']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-12 titre-carousel-urgentes text-red text-uppercase">
							<img src="<?php echo get_template_directory_uri(); ?>/img/red-bell-white-bg.png"> <?php echo get_field('hp-top-titre-o-u'); ?>
						</div>
					</div>
					<div class="owl-carousel text-black">
						<?php ?>
						loop offres<br>
						Titre<br>
						ref<br>
						Contrat<br>
						Fonction<br>
						Secteur<br>
						Salaire<br>
						localisation<br>
						MaJ<br>
						url<br>
						owl-dots<br>
						<?php ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-8 offset-md-4">
					<div class="row">
						<div class="col-4">
							<div class="img-container">
								<img src="<?php echo get_field('hp-top-gauche-img')['url']; ?>">
								<div class="img-caption text-uppercase text-white">
									<?php echo get_field('hp-top-gauche-txt'); ?>
								</div>
							</div>
						</div>
						<div class="col-4 bg-white">
							<p class="text-black text-uppercase">
								<?php echo get_field('hp-top-centre-titre'); ?>
									
								</p>
							<div class="text-black text-uppercase">
								<?php echo get_field('hp-top-centre-txt'); ?>
							</div>
							<a href="<?php echo get_field('hp-top-centre-profils-url');?>" class="my-1 py-1 px-5 bg-green text-uppercase text-white green-btn-arrow">
								<?php echo get_field('hp-top-centre-profils'); ?>
							</a>
							<a href="<?php echo get_field('hp-top-centre-offres-url');?>" class="my-1 py-1 px-5 bg-black text-uppercase text-white gray-btn-arrow">
								<?php echo get_field('hp-top-centre-offres'); ?>
							</a>
						</div>
						<div class="col-4 bg-blue-transparent">
							<p class="text-white text-uppercase">
								<?php echo get_field('hp-top-droite-titre'); ?>
							</p>
							<div class="text-white text-uppercase">
								<?php echo get_field('hp-top-droite-txt'); ?>
							</div>
							<form>
								<input type="search" class="search-field-white text-uppercase text-white" placeholder="<?php echo get_field('hp-top-droite-metier'); ?>" name="metier">
								<input type="search" class="search-field-white text-uppercase text-white" placeholder="<?php echo get_field('hp-top-droite-lieu'); ?>" name="lieu">
								<input type="submit" class="btn-search-blue bg-blue text-uppercase text-white" name="recherche" value="<?php echo get_field('hp-top-droite-search'); ?>">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--End .container-fluid-->
	</div><!--End .hp-bg-->
	<div class="row">
		<div class="col-12 col-md-4 bg-black text-white text-center hp-who">
			<div class="col-12 text-uppercase">
				<?php echo get_field('hp-3bloc-i-gauche-titre'); ?>
			</div>
			<div class="col-12">
				<?php echo get_field('hp-3bloc-i-gauche-texte'); ?>
			</div>
			<div class="col-12">
				<a href="<?php echo get_field('hp-3bloc-i-gauche-url-btn'); ?>" class="my-1 py-1 px-5 bg-white text-uppercase text-black white-btn-arrow">
					<?php echo get_field('hp-3bloc-i-gauche-txt-btn'); ?>
				</a>
			</div>
		</div>
		<div class="col-12 col-md-4 bg-yellow text-white text-center hp-offers-number">
			<div class="col-12 text-uppercase">
				<?php echo get_field('hp-3bloc-i-centre-texte-haut'); ?>
			</div>
			<div class="col-12 odometer text-uppercase hp-odometer">
				0
			</div>
			<div class="col-12">
				<?php echo get_field('hp-3bloc-i-centre-texte-bas'); ?>
			</div>
		</div>
		<div class="col-12 col-md-4">
			<img src="<?php echo get_field('hp-3bloc-i-droite-img')['url']; ?>" class="img-fluid">
		</div>
	</div><!--End .row-->
	<div class="bg-light-gray">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 text-black text-uppercase">
					<?php echo get_field('hp-profils-titre'); ?>
				</div>
				<div class="col-12">
					<?php echo get_field('hp-profils-txt'); ?>
				</div>
				<div class="col-12">
					<form>
						<select>
							<option><?php echo get_field('hp-profils-list-txt'); ?></option>
							<option>Plop 1</option>
							<option>Plop 2</option>
						</select>
					</form>
				</div>
			</div>
		</div><!--End .container-fluid-->
	</div><!--End .bg-light-gray-->
	<div class="row">
		<div class="col-12 col-md-4 bg-linkedin-picto">
			<p class="text-white text-uppercase">
				<?php echo get_field('hp-3bloc-s-linkedin-titre'); ?>
			</p>
			<a href="<?php echo get_field('hp-3bloc-s-linkedin-url-btn'); ?>" class="my-1 py-1 px-5 bg-white text-uppercase text-blue blue-btn-arrow">
				<?php echo get_field('hp-3bloc-s-linkedin-txt-btn'); ?>
			</a>
		</div>
		<div class="col-12 col-md-4">
			<img src="<?php echo get_field('hp-3bloc-s-centre-img')['url']; ?>" class="img-fluid">
		</div>
		<div class="col-12 col-md-4 bg-twitter-picto">
			<p class="text-uppercase text-white">
				<?php echo get_field('hp-3bloc-s-twitter-titre'); ?>
			</p>
			<div class="text-center">
				<?php echo get_field('hp-3bloc-s-twitter-txt'); ?>
			</div>
			<ul>
				<?php foreach(get_field('hp-3bloc-s-twitter-comptes') as $compte){ ?>
					<li>
						<a href="http://www.twitter.com/<?php echo $compte['nom-twitter'] ?>" target="_blank" class="text-white tewt-uppercase twitter-link">@<?php echo $compte['nom-twitter'] ?></a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div><!--End .row-->
	<div class="social-login-bloc" style="background-image: url(<?php echo get_field('social-connect-img')['url']; ?>);">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 text-white text-uppercase">
					<?php echo get_field('social-connect-subtitle'); ?>
				</div>
				<div class="col-12 text-white text-uppercase">
					<?php echo get_field('social-connect-txt'); ?>
				</div>
				<div class="col-12 social-login-btn">
					<div class="fb-login">
						<a href="<?php echo '#';?>" class="my-1 py-1 px-5 bg-facebook text-uppercase text-white facebook-btn-arrow">
							Se connecter avec facebook
						</a>
					</div>
					<div class="twitter-login">
						<a href="<?php echo '#';?>" class="my-1 py-1 px-5 bg-twitter text-uppercase text-white twitter-btn-arrow">
							Se connecter avec Twitter
						</a>
					</div>
					<div class="google-login">
						<a href="<?php echo '#';?>" class="my-1 py-1 px-5 bg-google text-uppercase text-white google-btn-arrow">
							Se connecter avec google +
						</a>
					</div>
					<div class="linkedin-login">
						<a href="<?php echo '#';?>" class="my-1 py-1 px-5 bg-linkedin text-uppercase text-white bg-linkedin linkedin-btn-arrow">
							Se connecter avec linkedin
						</a>
					</div>
				</div>
			</div>
		</div><!--End .container-fluid-->
	</div><!--End .social-login-bloc-->
	<div class="bg-light-gray">
		<div class="container-fluid last-offers">
			<div class="row">
				<div class="col-12 text-black text-uppercase text-center">
					<?php echo get_field('last-offers-title'); ?>
				</div>
				<div class="col-12 text-center">
					<?php echo get_field('last-offers-desc'); ?>
				</div>
				<div class="col-12 text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/red-bell.png" class="d-inline-block img-fluid red-bell-details">
					<div class="d-inline-block caption-urgent text-center">
						<?php echo get_field('last-offers-details'); ?>
					</div>
				</div>
			</div>
			<div class="list-offers">
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2">
						<!--Offre1-->
						<div class="row">
							<div class="offre-left offre-urgente bg-red col-12 col-md-6">
								<div class="row">
									<div class="col-3 offre-title text-white">
										<p>Plop</p>
										<p>Plop</p>
									</div>
									<div class="col-9 bg-white text-black">
										<p>Plop plop plop</p>
										<p>Plop plop plop</p>
										<p>Plop plop plop</p>
										<p>Plop plop plop</p>
										<p>Plop plop plop</p>
										<p>Plop plop plop plop plop plop plop plop plop plop plop</p>
									</div>
								</div>
							</div>
						</div>
						<!--Offre2-->
						<div class="row">
							<div class="offre-left col-12 col-md-6 offset-md-6">
								<div class="row">
									<div class="col-9 bg-white text-black">
										<p>Plop plop plop</p>
										<p>Plop plop plop</p>
										<p>Plop plop plop</p>
										<p>Plop plop plop</p>
										<p>Plop plop plop</p>
										<p>Plop plop plop plop plop plop plop plop plop plop plop</p>
									</div>
									<div class="col-3 offre-title bg-black text-white">
										<p>Plop</p>
										<p>Plop</p>
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
