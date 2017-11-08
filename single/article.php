<?php the_post(); ?>
<div class="main single-article">
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
				<div class="col-12 col-md-9 breadcrumb-offre text-left py-2">
					<div class="d-inline text-black"><a href="<?php echo '#'; ?>">Notre actualité</a> / </div>
					<?php if(has_category()){ ?>
						<div class="d-inline text-black font-weight-bold"><a href="#"><?php echo get_the_category()[0]->name; ?></a></div>
						<div class="d-inline"> / </div>
					<?php } ?>
					<div class="d-inline text-green font-weight-bold"><?php the_title(); ?></div>
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
				<div class="col-12 text-center">
					<?php $daysago = round((date('U') - get_the_time('U', $post)) / (60*60*24));
					if($daysago == 0){?>
						<img src="<?php echo get_template_directory_uri().'/img/time.png'; ?>" class="d-inline"><p class="d-inline pl-1 time text-uppercase text-light-gray">Aujoud'hui</p>
					<?php } else{ ?>
						<img src="<?php echo get_template_directory_uri().'/img/time.png'; ?>" class="d-inline"><p class="d-inline pl-1 time text-uppercase text-light-gray">Il y a <?php echo $daysago; ?> jour<?php if($daysago>1) echo's'; ?></p>
					<?php }?>
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
	<?php } ?>
	<div class="bg-white article-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 article-content-txt py-4">
					<?php echo get_the_content(); ?>
				</div>
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center article-share mb-2">
					<a href="https://plus.google.com/share?url=<?php echo get_permalink();?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-google.png"></a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_template_directory_uri(); ?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-facebook.png"></a>
					<a href="https://twitter.com/intent/tweet?text=%20&url=<?php echo get_permalink();?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-twitter.png"></a>
					<a href="https://www.linkedin.com/shareArticle?url=<?php echo get_template_directory_uri(); ?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-linkedin.png"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="article-next-prev py-4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col-12 col-lg-4 text-center text-lg-left">
							<a href="<?php echo get_permalink(get_previous_post()); ?>" class="my-1 d-inline-block mr-auto py-1 px-3 bg-black text-uppercase text-white prev-article-btn">
								Lire l'article précédent
							</a>
						</div>
						<div class="col-12 col-lg-4 text-center">
							<a href="<?php echo '#'; ?>" class="d-inline-block my-1 py-1 px-3 bg-white text-uppercase text-black article-back-btn">
								Retour au blog
							</a>
						</div>
						<div class="col-12 col-lg-4 text-center text-lg-right">
							<a href="<?php echo get_permalink(get_next_post()); ?>" class="my-1 d-inline-block ml-auto py-1 px-3 bg-black text-uppercase text-white next-article-btn">
								Lire l'article suivant
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="offre-similar bg-light-gray">
		<div class="container-fluid">
			<?php
			$args = array(
				'numberposts' => 6,
				'orderby' => 'post_date',
				'exclude' => [$post->ID],
				'post_type' => 'post',
				'post_status' => 'publish',
			);

			$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
			if($recent_posts){?>
			<div class="row">
				<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 py-2">
					Nos <b>6 dernières actualités</b> publiées
				</div>
			</div>
			<div class=row>
				<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
					<div class="row">
					<?php foreach ($recent_posts as $article) { ?>
						<div class="article-card col-12 col-md-6 col-lg-4">
							<a href="<?php echo get_permalink($article->ID); ?>">
								<div class="row p-1">
									<div class="col-12">
										<div class="thumbnail-card">
											<img src="">
										</div>
									</div>
									<div clss="col-12">
										<p class="article-cat text-uppercase color-blue font-weight-bold"><?php echo 'cat'; ?></p>
										<p class="article-title text-uppercase color-black font-weight-bold"><?php echo the_title($article->ID); ?></p>
										<p class="article-excerpt color-black"><?php echo substr(get_the_content($article['ID']), 0, 140)." [...]"; ?></p>
										<?php $daysago = round((date('U') - get_the_time('U', $article->ID)) / (60*60*24));
										if($daysago == 0){?>
										<p class="time text-uppercase text-light-gray">Aujoud'hui</p>
										<?php } else{ ?>
										<p class="time text-uppercase text-light-gray">Il y a <?php echo $daysago; ?> jour<?php if($daysago>1) echo's'; ?></p>
										<?php } ?>
									</div>
								</div>
							</a>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>
			<div class="row">
				<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 py-2">
					Nos 3 dernières <b>offres d'emploi urgentes</b> disponible
				</div>
			</div>
			<div class=row>
				<?php
					$urgent_post = get_field('offres_urgentes', 'option');
					$last_urgent = array();
					if(count($urgent_post) > 3){
						array_push($last_urgent, $urgent_post[0], $urgent_post[1], $urgent_post[2]);
					}
					else{
						$last_urgent = $urgent_post;
					}
				?>
				<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
					<div class="row">
						<?php foreach($last_urgent as $offer){ ?>
						<div class="offre-card col-12 col-md-6 col-lg-4">
							<a href="<?php echo get_permalink($offer); ?>">
								<div class="row p-1">
									<div class="col-12 offre-title urgente text-white px-4 py-auto text-center bg-red">
										<p class="name-offre text-uppercase"><?php echo get_the_title($offer); ?></p>
										<?php if(get_field('ref', $offer)){?>
											<p class="ref-offre">Référence : <em><?php echo get_field('ref', $offer); ?></em></p>
										<?php } ?>
									</div>
									<div class="col-12 bg-white text-black px-4 py-2 offre-infos">
										<?php if(get_field('contrat', $offer)){ ?>
											<p class="info-offre">Contrat : <em><?php echo get_field('contrat', $offer); ?></em></p>
										<?php }
										if(get_field('fonction', $offer)){ ?>
											<p class="info-offre">Fonction : <em><?php echo get_field('fonction', $offer); ?></em></p>
										<?php }
										if(get_field('secteur', $offer)){ ?>
											<p class="info-offre">Secteur : <em><?php echo get_field('secteur', $offer); ?></em></p>
										<?php }
										if(get_field('salary-min', $offer) && get_field('salary-max', $offer)){ ?>
											<p class="info-offre">Salaire (€/an) : <em><?php echo get_field('salary-min', $offer); ?> à <?php echo get_field('salary-max', $offer); ?></em></p>
										<?php }
										if(get_field('city', $offer) && get_field('pays', $offer)){ ?>
											<p class="info-offre">Localisation : <em><?php echo get_field('city', $offer); ?> (<?php echo get_field('pays', $offer); ?>)</em></p>
										<?php }
										if(get_field('descrassignement', $offer)){
											$descrSplit = preg_split("/[M, m]ission[s]?[ ]?:[ ]?/", get_field('descrassignement', $offer));
											if(count($descrSplit)==2){ ?>
												<div class="offre-update my-1"><?php echo $descrSplit[0]; ?></div>
											<?php }
											else{ ?>
												<div class="offre-update my-1"><?php echo substr(get_field('descrassignement', $offer), 0, 140)."[...]"; ?></div>
											<?php }
										}
										$daysago = round((date('U') - get_the_time('U', $offer)) / (60*60*24));
										if($daysago == 0){?>
										<p class="time text-uppercase text-light-gray">Aujoud'hui</p>
										<?php } else{ ?>
										<p class="time text-uppercase text-light-gray">Il y a <?php echo $daysago; ?> jour<?php if($daysago>1) echo's'; ?></p>
										<?php } ?>
									</div>
								</div>
							</a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		// $contenus = get_field('contenus', 4735);
		// if($contenus){
		// 	foreach ($contenus as $contenu) {
		// 		if($contenu['acf_fc_layout'] == "social-connect"){
		// 			include TEMPLATEPATH . '/contenus/social-connect.php';
		// 		}
		// 	}
		// }
	?>
</div>