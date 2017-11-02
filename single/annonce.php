<div class="main single-offre">
	<div style="background-image: url(<?php echo get_field('img-bg-header', 'option')['url']; ?>);">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 py-3">
					<img class="logo-atlantis-rh img-fluid" src="<?php echo get_field('logo-header', 'option')['url']; ?>">
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white">
		<div class="container-fluid">
			<div class="row bc-offre">
				<div class="col-12 col-md-6 breadcrumb-offre text-left">
					<div class="d-inline text-black">offres d'emploi / </div><div class="d-inline text-green font-weight-bold"><?php echo get_the_title(); ?></div>
				</div>
				<div class="col-12 col-md-6 text-right">
					<div class="px-5 my-1 d-inline-block text-center py-1 bg-green text-uppercase text-white postulat-btn-arrow">
						postulez !
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-light-gray single-offre-title">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
					<h1 class="my-3 text-uppercase"><?php echo get_the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white offre-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center offre-share my-2">
					<a href="https://plus.google.com/share?url=<?php echo get_permalink();?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-google.png"></a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_template_directory_uri(); ?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-facebook.png"></a>
					<a href="https://twitter.com/intent/tweet?text=%20&url=<?php echo get_permalink();?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-twitter.png"></a>
					<a href="https://www.linkedin.com/shareArticle?url=<?php echo get_template_directory_uri(); ?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-linkedin.png"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 offre-details">
					<h2 class="my-2 text-uppercase">détails de l'annocne</h2>
					<?php if(get_field('ref')){ ?>
						<p class="info-offre">Référence <em><?php echo get_field('ref'); ?></em></p>
					<?php }
					if(get_field('contrat')){ ?>
						<p class="info-offre">Contrat <em><?php echo get_field('contrat'); ?></em></p>
					<?php }
					if(get_field('fonction')){ ?>
						<p class="info-offre">Fonction <em><?php echo get_field('fonction'); ?></em></p>
					<?php }
					if(get_field('secteur')){ ?>
						<p class="info-offre">Secteur <em><?php echo get_field('secteur'); ?></em></p>
					<?php }
					if(get_field('salary-min') && get_field('salary-max')){ ?>
						<p class="info-offre">Salaire (€/an) <em><?php echo get_field('salary-min'); ?> à <?php echo get_field('salary-max'); ?></em></p>
					<?php }
					if(get_field('city') && get_field('pays')){ ?>
						<p class="info-offre">Localisation <em><?php echo get_field('city'); ?> (<?php echo get_field('pays'); ?>)</em></p>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 offre-mission">
					<h2 class="my-2 text-uppercase">votre mission</h2>
					<?php if(get_field('descrassignement') ){ ?>
						<div class="profil-offre">
							<?php echo get_field('descrassignement'); ?>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 offre-profil">
					<h2 class="my-2 text-uppercase">votre profil</h2>
					<?php if(get_field('profil') ){ ?>
						<div class="profil-offre">
							<?php echo get_field('profil'); ?>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 offre-map">
					<h2 class="my-2 text-uppercase">votre localisaiton</h2>
					<div id="map-localisation"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 py-4 offre-apply text-center">
					<div class="px-5 my-1 d-inline-block text-center py-1 bg-green text-uppercase text-white postulat-btn-arrow">
						postulez !
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="offre-next-prev py-4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="d-flex">
						<div class="col-6 col-md-4 text-left">
							<a href="<?php echo get_permalink(get_previous_post()); ?>" class="my-1 d-inline-block mr-auto py-1 px-5 bg-black text-uppercase text-white prev-offre-btn">
								voir l'offre précédente
							</a>
						</div>
						<div class="col-12 col-md-4 text-center">
							<a href="<?php echo get_permalink(4735); ?>" class="d-inline-block my-1 mx-auto py-1 px-5 bg-white text-uppercase text-black offre-back-btn">
								Retour aux offres d'emploi
							</a>
						</div>
						<div class="col-6 col-md-4 text-right">
							<a href="<?php echo get_permalink(get_next_post()); ?>" class="my-1 d-inline-block ml-auto py-1 px-5 bg-black text-uppercase text-white next-offre-btn">
								voir l'offre suivante
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="offre-similar bg-light-gray">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 py-2">
					<b>4 offres d'emploi</b> qui peuvent vous intéresser
				</div>
			</div>
			<div class=row>
				<?php
				$nb_offres = 3;
				if( get_field('offres_urgentes', 'option')[0] && get_field('offres_urgentes', 'option')[0] != get_the_ID()){
					$urgent_post = get_field('offres_urgentes', 'option')[0];
				}
				elseif(get_field('offres_urgentes', 'option')[0] && get_field('offres_urgentes', 'option')[1] != get_the_ID()){
					$urgent_post = get_field('offres_urgentes', 'option')[1];
				}
				else{
					$urgent_post = false;
					$nb_offres = 4;
				}
				$args = array(
					'numberposts' => $nb_offres,
					'orderby' => 'post_date',
					'exclude' => [get_the_ID(), $urgent_post],
					'post_type' => 'annonce',
					'post_status' => 'publish',
				);

				$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
				?>
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
					<div class="row">
						<?php if($urgent_post){ ?>
						<div class="offre-card col-12 col-md-6">
							<a href="<?php echo get_permalink($urgent_post); ?>">
								<div class="row p-1">
									<div class="col-12 offre-title urgente text-white px-4 py-auto text-center bg-red">
										<p class="name-offre text-uppercase"><?php echo get_the_title($urgent_post); ?></p>
										<?php if(get_field('ref', $urgent_post)){?>
											<p class="ref-offre">Référence : <em><?php echo get_field('ref', $urgent_post); ?></em></p>
										<?php } ?>
									</div>
									<div class="col-12 bg-white text-black px-4 py-2 offre-infos">
										<?php if(get_field('contrat', $urgent_post)){ ?>
											<p class="info-offre">Contrat : <em><?php echo get_field('contrat', $urgent_post); ?></em></p>
										<?php }
										if(get_field('fonction', $urgent_post)){ ?>
											<p class="info-offre">Fonction : <em><?php echo get_field('fonction', $urgent_post); ?></em></p>
										<?php }
										if(get_field('secteur', $urgent_post)){ ?>
											<p class="info-offre">Secteur : <em><?php echo get_field('secteur', $urgent_post); ?></em></p>
										<?php }
										if(get_field('salary-min', $urgent_post) && get_field('salary-max', $urgent_post)){ ?>
											<p class="info-offre">Salaire (€/an) : <em><?php echo get_field('salary-min', $urgent_post); ?> à <?php echo get_field('salary-max', $urgent_post); ?></em></p>
										<?php }
										if(get_field('city', $urgent_post) && get_field('pays', $urgent_post)){ ?>
											<p class="info-offre">Localisation : <em><?php echo get_field('city', $urgent_post); ?> (<?php echo get_field('pays', $urgent_post); ?>)</em></p>
										<?php }
										if(get_field('descrassignement', $urgent_post)){ ?>
											<p class="d-none update-offre my-1"><?php echo get_field('descrassignement', $urgent_post); ?></p>
										<?php }
										$daysago = round((date('U') - get_the_time('U', $urgent_post)) / (60*60*24));
										if($daysago == 0){?>
										<p class="time text-uppercase text-light-gray">Aujoud'hui</p>
										<?php } else{ ?>
										<p class="time text-uppercase text-light-gray">Il y a <?php echo $daysago; ?> jour<?php if($daysago>1) echo's'; ?></p>
										<?php } ?>
									</div>
								</div>
							</a>
						</div>
						<?php }
						if($recent_posts){
							foreach ($recent_posts as $annonce) { ?>
							<div class="offre-card col-12 col-md-6">
								<a href="<?php echo get_permalink($annonce['ID']); ?>">
									<div class="row p-1">
										<div class="col-12 offre-title text-white px-4 py-auto text-center bg-black">
											<p class="name-offre text-uppercase"><?php echo get_the_title($annonce['ID']); ?></p>
											<?php if(get_field('ref', $annonce['ID'])){?>
												<p class="ref-offre">Référence : <em><?php echo get_field('ref', $annonce['ID']); ?></em></p>
											<?php } ?>
										</div>
										<div class="col-12 bg-white text-black px-4 py-2 offre-infos">
											<?php if(get_field('contrat', $annonce['ID'])){ ?>
												<p class="info-offre">Contrat : <em><?php echo get_field('contrat', $annonce['ID']); ?></em></p>
											<?php }
											if(get_field('fonction', $annonce['ID'])){ ?>
												<p class="info-offre">Fonction : <em><?php echo get_field('fonction', $annonce['ID']); ?></em></p>
											<?php }
											if(get_field('secteur', $annonce['ID'])){ ?>
												<p class="info-offre">Secteur : <em><?php echo get_field('secteur', $annonce['ID']); ?></em></p>
											<?php }
											if(get_field('salary-min', $annonce['ID']) && get_field('salary-max', $annonce['ID'])){ ?>
												<p class="info-offre">Salaire (€/an) : <em><?php echo get_field('salary-min', $annonce['ID']); ?> à <?php echo get_field('salary-max', $annonce['ID']); ?></em></p>
											<?php }
											if(get_field('city', $annonce['ID']) && get_field('pays', $annonce['ID'])){ ?>
												<p class="info-offre">Localisation : <em><?php echo get_field('city', $annonce['ID']); ?> (<?php echo get_field('pays', $annonce['ID']); ?>)</em></p>
											<?php }
											if(get_field('descrassignement', $annonce['ID'])){ ?>
												<p class="d-none update-offre my-1"><?php echo get_field('descrassignement', $annonce['ID']); ?></p>
											<?php }
											$daysago = round((date('U') - get_the_time('U', $annonce['ID'])) / (60*60*24));
											if($daysago == 0){?>
											<p class="time text-uppercase text-light-gray">Aujoud'hui</p>
											<?php } else{ ?>
											<p class="time text-uppercase text-light-gray">Il y a <?php echo $daysago; ?> jour<?php if($daysago>1) echo's'; ?></p>
											<?php } ?>
										</div>
									</div>
								</a>
							</div>
							<?php }
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		$contenus = get_field('contenus', 4735);
		if($contenus){
			foreach ($contenus as $contenu) {
				if($contenu['acf_fc_layout'] == "social-connect"){
					include TEMPLATEPATH . '/contenus/social-connect.php';
				}
			}
		}
	?>
</div>