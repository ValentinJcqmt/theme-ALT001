<?php the_post(); ?>
<div class="main single-metier">
	<div style="background-image: url(<?php echo get_field('img-bg-header', 'option')['url']; ?>);">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 py-3">
					<a href="<?php echo get_home_url(); ?>" class="d-block">
						<img class="logo-atlantis-rh img-fluid" src="<?php echo get_field('logo-header', 'option')['url']; ?>">
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white">
		<div class="container-fluid">
			<div class="row bc-offre">
				<div class="col-12 col-md-6 breadcrumb-offre text-left py-2">
					<div class="d-inline text-black"><a href="<?php echo get_permalink(5260); ?>">Nos fiches métiers</a> / </div>
					<div class="d-inline text-green font-weight-bold"><?php the_title(); ?></div>
				</div>
				<div class="col-12 col-md-6 text-left text-md-right">
					<div class="px-5 my-1 d-inline-block text-center py-1 bg-green text-uppercase text-white alert-btn-arrow">
						s'inscrire aux alertes métier
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-light-gray page-title">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
					<h1 class="mt-3 mb-1 text-uppercase"><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center page-share mt-1 mb-2">
					<a href="https://plus.google.com/share?url=<?php echo get_permalink();?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-google.png"></a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_template_directory_uri(); ?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-facebook.png"></a>
					<a href="https://twitter.com/intent/tweet?text=%20&url=<?php echo get_permalink();?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-twitter.png"></a>
					<a href="https://www.linkedin.com/shareArticle?url=<?php echo get_template_directory_uri(); ?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-linkedin.png"></a>
				</div>
			</div>
		</div>
	</div>
	<?php if(has_post_thumbnail( )) {?>
		<div class="page-thumbnail" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
	<?php }else{ ?>
		<div class="page-thumbnail" style="background-image:url(<?php echo get_template_directory_uri().'/img/metier-thumb.png'; ?>);"></div>
	<?php } ?>
	<div class="bg-black metier-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 metier-content-txt text-white py-4">
					<div class="metier-subtitle font-weight-bold text-uppercase mb-2 mt-3">
						<?php echo get_field('profil-titre'); ?>
					</div>
					<div class="metier-txt">
						<?php echo get_field('profil-txt'); ?>
					</div>
					<div class="metier-subtitle font-weight-bold text-uppercase mb-2 mt-3">
						<?php echo get_field('competence-titre'); ?>
					</div>
					<div class="metier-txt">
						<?php echo get_field('competence-txt'); ?>
					</div>
					<div class="metier-subtitle font-weight-bold text-uppercase mb-2 mt-3">
						<?php echo get_field('formation-titre'); ?>
					</div>
					<div class="metier-txt">
						<?php echo get_field('formation-txt'); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 py-4 offre-apply text-center">
					<div class="px-5 my-1 d-inline-block text-center py-1 bg-green text-uppercase text-white alert-btn-arrow">
						s'inscrire aux alertes métier
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="annonce-similar bg-light-gray">
		<div class="container-fluid">
			<?php
			$args = array(
				'numberposts' => 4,
				'orderby' => 'post_date',
				'post_type' => 'annonce',
				'post_status' => 'publish',
				'tax_query' => array(
		            array(
		                'taxonomy' => 'offer-category',
		                'field' => 'term_id',
		                'terms' => get_the_terms(get_the_ID(),'offer-category')[0]->term_id
		            )
		        )
			);
			$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
			$offres_urgentes = get_field('offres_urgentes', 'option');
			if($recent_posts){ ?>
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 py-2">
					<?php if(count($recent_posts) > 1){ ?>
						<b><?php echo count($recent_posts); ?> offres d'emploi</b> liées à ce profil métier
					<?php }
					else{ ?>
						<b><?php echo count($recent_posts); ?> offre d'emploi</b> liée à ce profil métier
					<?php } ?>
				</div>
			</div>
			<div class=row>
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
					<div class="row">
					<?php foreach ($recent_posts as $annonce) { ?>
						<div class="offre-card col-12 col-md-8 col-lg-6">
							<a href="<?php echo get_permalink($annonce['ID']); ?>">
								<div class="row p-1">
									<?php if(in_array($annonce['ID'], $offres_urgentes)){ ?>
										<div class="col-12 text-center offre-title text-white px-2 py-4 bg-red">
											<p class="name-offre text-uppercase"><?php echo get_the_title($annonce['ID']); ?></p>
											<?php if(get_field('ref', $annonce['ID'])){?>
												<p class="ref-offre">Référence : <em><?php echo get_field('ref', $annonce['ID']); ?></em></p>
											<?php } ?>
											<div class="date-box bg-red">
												<div class="d-inline-block clock bg-white">
													<img src="<?php echo get_template_directory_uri(); ?>/img/clock-red.png">
												</div>
												<div class="d-inline-block date px-1 text-white bg-red text-uppercase font-weight-bold">
													<?php echo get_the_date('d M Y', $annonce['ID']); ?>
												</div>
											</div>
										</div>
									<?php }
									else{ ?>
										<div class="col-12 text-center offre-title text-white px-2 py-4 bg-black">
											<p class="name-offre text-uppercase"><?php echo get_the_title($annonce['ID']); ?></p>
											<?php if(get_field('ref', $annonce['ID'])){?>
												<p class="ref-offre">Référence : <em><?php echo get_field('ref', $annonce['ID']); ?></em></p>
											<?php } ?>
											<div class="date-box bg-black">
												<div class="d-inline-block clock bg-white">
													<img src="<?php echo get_template_directory_uri(); ?>/img/clock-black.png">
												</div>
												<div class="d-inline-block date px-1 text-white bg-black text-uppercase font-weight-bold">
													<?php echo get_the_date('d M Y', $annonce['ID']); ?>
												</div>
											</div>
										</div>
									<?php } ?>
									<div class="col-12 bg-white text-black px-1 px-lg-2 py-2 offre-infos">
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
										if(get_field('descrassignement', $annonce['ID'])){
											$descrSplit = preg_split("/[M, m]ission[s]?[ ]?:[ ]?/", get_field('descrassignement', $annonce['ID']));
											if(count($descrSplit)==2){ ?>
												<div class="offre-update my-1"><?php echo $descrSplit[0]; ?></div>
											<?php }
											else{ ?>
												<div class="offre-update my-1"><?php echo substr(get_field('descrassignement', $annonce['ID']), 0, 140)."[...]"; ?></div>
											<?php }
										} ?>
									</div>
								</div>
							</a>
						</div>
					<?php } ?>
					</div>
					<div class="row">
						<div class="col-12 py-4 text-center">
							<a href="<?php echo get_permalink(4735).'?cat='.urlencode(get_the_terms(get_the_ID(),'offer-category')[0]->name); ?>" class="my-1 py-1 px-5 bg-black text-uppercase text-white gray-btn-arrow font-weight-bold">
								Voir plus d'offres liées
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<?php
		$contenus = get_field('contenus', 5260);
		if($contenus){
			foreach ($contenus as $contenu) {
				if($contenu['acf_fc_layout'] == "social-connect"){
					include TEMPLATEPATH . '/contenus/social-connect.php';
				}
			}
		}
	?>
</div>