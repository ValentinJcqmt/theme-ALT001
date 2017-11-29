<?php
get_header(); ?>

<div class="main">
	<div style="background-image: url(<?php echo get_field('img-bg-header', 'option')['url']; ?>);" class="hp-bg">
		<div class="container-fluid">
			<div class="row hp-top-row">
				<div class="col-12 col-lg-4 carousel-urgentes">
					<div class="row mt-2 mb-5">
						<div class="col-12">
							<a href="<?php echo get_home_url(); ?>" class="d-block">
								<img class="logo-atlantis-rh img-fluid" src="<?php echo get_field('logo-header', 'option')['url']; ?>">
							</a>
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
					<?php
					$offres_urgentes = get_field('offres_urgentes', 'option');
					if(!$offres_urgentes){ ?>
						<div><?php echo get_field('pas-d-offres-urgentes', 'option'); ?></div>
					<?php }
					else{ ?>
					<div class="owl-carousel-offres-hp owl-carousel text-black">
						<?php foreach ($offres_urgentes as $offre) {?>
							<div class="carousel-offre px-1">
								<div class="offre-titre text-uppercase d-inline-block"><?php echo get_the_title($offre); ?></div>
								<?php if(get_field('ref', $offre)){ ?>
									<div class="offre-ref my-1">Référence : <b><?php echo get_field('ref', $offre); ?></b></div>
								<?php }
								if(get_field('contrat', $offre)){ ?>
									<div class="offre-info">Contrat : <b><?php echo get_field('contrat', $offre); ?></b></div>
								<?php }
								if(get_field('fonction', $offre)){ ?>
									<div class="offre-info">Fonction : <b><?php echo get_field('fonction', $offre); ?></b></div>
								<?php }
								if(get_field('secteur', $offre)){ ?>
									<div class="offre-info">Secteur : <b><?php echo get_field('secteur', $offre); ?></b></div>
								<?php }
								if(get_field('salary-min', $offre) && get_field('salary-max', $offre)){ ?>
									<div class="offre-info">Salaire (€/an) : <b><?php echo get_field('salary-min', $offre); ?> à <?php echo get_field('salary-max', $offre); ?></b></div>
								<?php }
								if(get_field('city', $offre) && get_field('pays', $offre)){ ?>
									<div class="offre-info">Localisation : <b><?php echo get_field('city', $offre); ?> (<?php echo get_field('pays', $offre); ?>)</b></div>
								<?php }
								if(get_field('descrassignement', $offre)){
									$descrSplit = preg_split("/[M, m]ission[s]?[ ]?:[ ]?/", get_field('descrassignement', $offre));
									if(count($descrSplit)==2){ ?>
										<div class="offre-update my-1"><?php echo $descrSplit[0]; ?></div>
									<?php }
									else{ ?>
										<div class="offre-update my-1"><?php echo substr(get_field('descrassignement', $offre), 0, 140)."[...]"; ?></div>
									<?php }
								} ?>
								<a href="<?php echo get_permalink($offre); ?>" class="my-1 py-1 px-5 bg-black text-uppercase text-white gray-btn-arrow">
									voir l'annonce
								</a>
							</div>
						<?}?>
					</div>
					<?php } ?>
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
								<input type="search" class="aa-input my-1 p-1 search-field-white text-uppercase text-white" placeholder="<?php echo get_field('hp-top-droite-search'); ?>" name="s" id="s" autocomplete="on" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="true" aria-owns="algolia-autocomplete-listbox-0" dir="auto">
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
				<script>
					var odometerCount = <?php echo count(get_posts( array(
					    'post_type' =>'annonce',
					    'orderby' => 'post_date',
						'order' => 'DESC',
						'posts_per_page' => -1,
					), OBJECT)); ?>;
			</script>
				<div class="col-12 odometer text-uppercase" id="hp-odometer">0</div>
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
								<?php
								$categories = get_terms('offer-category', array('hide_empty' => false));
								?>
								<select id="hp-choix-profil" class="p-1 bg-white text-uppercase text-black">
									<option value="null"><?php echo get_field('hp-profils-list-txt'); ?></option>
									<?php foreach ($categories as $cat) { ?>
										<option value="<?php echo get_permalink(4735).'?cat='.urlencode($cat->name); ?>"><?php echo $cat->name; ?></option>
									<?php } ?>
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
					<?php do_action('oa_social_login'); ?>
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
						<?php
						$offers =  array();
						$offres_urgentes = get_field('offres_urgentes', 'option');
						foreach ($offres_urgentes as $offre) {
							$offers[$offre] = 'urgent';
						}
						$recent_post = wp_get_recent_posts( array(
						    'post_type' =>'annonce',
						    'posts_per_page' => 8,
						    'orderby' => 'post_date',
							'order' => 'DESC',
						), OBJECT);
						foreach ($recent_post as $offre) {
							if(count($offers) < 8 && !in_array($offre->ID, $offers))
							$offers[$offre->ID] = 'non-urgent';
						}
						$n = 0;
						foreach($offers as $id => $urgent){ ?>
						<div class="row">
							<div class="<?php if($urgent == 'urgent') echo'offre-urgente'; ?> <?php if($n%2 == 0) echo'offre-left col-12 col-lg-6'; else echo'offre-right col-12 col-lg-6 offset-lg-6'; ?> my-2 my-lg-1">
								<a class="d-block" href="<?php echo get_permalink($id); ?>">
									<div class="row bg-white">
										<?php if($n%2 == 0){
											if($urgent == 'urgent'){ ?>
												<div class="col-3 offre-title text-white px-2 py-4 bg-red">
													<p class="name-offre text-uppercase"><?php echo get_the_title($id); ?></p>
													<?php if(get_field('ref', $id)){?>
														<p class="ref-offre">Référence : <em><?php echo get_field('ref', $id); ?></em></p>
													<?php } ?>
												</div>
											<?php }
											else{ ?>
												<div class="col-3 offre-title text-white px-2 py-4 bg-black">
													<p class="name-offre text-uppercase"><?php echo get_the_title($id); ?></p>
													<?php if(get_field('ref', $id)){?>
														<p class="ref-offre">Référence : <em><?php echo get_field('ref', $id); ?></em></p>
													<?php } ?>
												</div>
											<?php }
										} ?>
										<div class="col-9 bg-white text-black px-3 py-2 offre-infos align-self-center">
											<?php if(get_field('contrat', $id)){ ?>
												<p class="info-offre">Contrat : <em><?php echo get_field('contrat', $id); ?></em></p>
											<?php }
											if(get_field('fonction', $id)){ ?>
												<p class="info-offre">Fonction : <em><?php echo get_field('fonction', $id); ?></em></p>
											<?php }
											if(get_field('secteur', $id)){ ?>
												<p class="info-offre">Secteur : <em><?php echo get_field('secteur', $id); ?></em></p>
											<?php }
											if(get_field('salary-min', $id) && get_field('salary-max', $id)){ ?>
												<p class="info-offre">Salaire (€/an) : <em><?php echo get_field('salary-min', $id); ?> à <?php echo get_field('salary-max', $id); ?></em></p>
											<?php }
											if(get_field('city', $id) && get_field('pays', $id)){ ?>
												<p class="info-offre">Localisation : <em><?php echo get_field('city', $id); ?> (<?php echo get_field('pays', $id); ?>)</em></p>
											<?php }
											if(get_field('descrassignement', $id)){
												$descrSplit = preg_split("/[M, m]ission[s]?[ ]?:[ ]?/", get_field('descrassignement', $id));
												if(count($descrSplit)==2){ ?>
													<div class="offre-update my-1"><?php echo $descrSplit[0]; ?></div>
												<?php }
												else{ ?>
													<div class="offre-update my-1"><?php echo substr(get_field('descrassignement', $id), 0, 140)."[...]"; ?></div>
												<?php }
											} ?>
										</div>
										<?php if($n%2 != 0){
											if($urgent == 'urgent'){ ?>
												<div class="col-3 offre-title text-white px-2 py-4 bg-red">
													<p class="name-offre text-uppercase"><?php echo get_the_title($id); ?></p>
													<?php if(get_field('ref', $id)){?>
														<p class="ref-offre">Référence : <em><?php echo get_field('ref', $id); ?></em></p>
													<?php } ?>
												</div>
											<?php }
											else{ ?>
												<div class="col-3 offre-title text-white px-2 py-4 bg-black">
													<p class="name-offre text-uppercase"><?php echo get_the_title($id); ?></p>
													<?php if(get_field('ref', $id)){?>
														<p class="ref-offre">Référence : <em><?php echo get_field('ref', $id); ?></em></p>
													<?php } ?>
												</div>
											<?php }
										} ?>
									</div>
								</a>
							</div>
						</div>
						<? $n++;
						} ?>
					</div>
				</div>
			</div>
		</div><!--End .container-fluid-->
	</div><!--End .bg-light-gray-->
</div><!--End .main-->

<?php get_footer();
