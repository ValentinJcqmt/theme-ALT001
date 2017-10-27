<div class="main nos-offres">
	<div style="background-image: url(<?php echo get_field('img-bg-header', 'option')['url']; ?>);">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 py-3">
					<img class="logo-atlantis-rh img-fluid" src="<?php echo get_field('logo-header', 'option')['url']; ?>">
				</div>
			</div>
		</div>
	</div>
	<div class="px-4 bg-white text-black">
		<div class=row>
			<div class="col-12">
				<h1 class="mt-5 text-uppercase"><?php echo get_the_title(); ?></h1>
			</div>
		</div>
		<div class=row>
			<div class="col-12 mt-2 mb-5 sous-titre">
				<?php echo get_field('sous-titre'); ?>
			</div>
		</div>
	</div>
	<div class="px-4 bg-light-gray filters">
		<div class="row py-5 text-uppercase">
			<div class="col-3 align-self-center font-weight-bold">
				<img src="<?php echo get_field('picto-filtre')['url']; ?>" class="img-fluid pr-1"><?php echo get_field('titre-filtre'); ?>
			</div>
			<div class="col-9">
				<div class=row>
					<div class="col-3">
						<select>
							<option><?php echo get_field('txt-metier'); ?></option>
							<option>plop</option>
						</select>
					</div>
					<div class="col-3">
						<select>
							<option><?php echo get_field('txt-monde'); ?></option>
							<option>plop</option>
						</select>
					</div>
					<div class="col-3">
						<select>
							<option><?php echo get_field('txt-salary-min'); ?></option>
							<option>plop</option>
						</select>
					</div>
					<div class="col-3">
						<input id="is-urgent" type="checkbox">
						<label for="is-urgent" class="d-inline-block text-uppercase"><?php echo get_field('txt-urgent'); ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<select>
							<option><?php echo get_field('txt-contrat'); ?></option>
							<option>plop</option>
						</select>
					</div>
					<div class="col-3">
						<select>
							<option><?php echo get_field('txt-localite'); ?></option>
							<option>plop</option>
						</select>
					</div>
					<div class="col-3">
						<select>
							<option><?php echo get_field('txt-salary-max'); ?></option>
							<option>plop</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="px-4 bg-light-gray search">
		<div class="row py-5 text-uppercase">
			<div class="col-3 font-weight-bold search-txt">
				<img src="<?php echo get_field('picto-search')['url']; ?>" class="img-fluid pr-1"><?php echo get_field('titre-search'); ?>
			</div>
			<div class="col-2">
				<div class="search-box">
					<input type="search" placeholder="<?php echo get_field('txt-keywords'); ?>">
					<img class="search-icon" src="<?php echo get_template_directory_uri(); ?>/img/search.png">
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var offres = [];
	</script>
	<?php
	$offres = array();
	$offres_all = get_posts( array(
	    'post_type' =>'annonce',
	    'orderby' => 'post_date',
		'order' => 'DESC',
		'posts_per_page' => -1,
	), OBJECT);
	$nb_offres = count($offres_all);
	$nb_pages = floor($nb_offres/12);
	$offres_urgentes = array();
	if(get_field('offres_urgentes', 'option'))
		$offres_urgentes = get_field('offres_urgentes', 'option');
	$offres_non_urgentes = array_filter($offres_all, function($e) use ($offres_urgentes){
		return !in_array($e->ID, $offres_urgentes);
	}, ARRAY_FILTER_USE_BOTH);
	$n = 1;
	?>
	<style>
		<?php if($nb_pages > 1){
			for($i=2; $i<=$nb_pages; $i++){
				echo".page-".$i." .offre-card.filtered:nth-of-type(n+".(12*$i+1)."), .page-".$i." .offre-card.filtered:not(:nth-of-type(n+".(12*$i-11).")){
						display: none !important;
					}\n";
				echo".page-".$i." #go-to-page-".$i."{color:#FFF; background:#333;}\n";
			}
		} ?>
	</style>
	<div class="px-4 bg-light-gray offers-list">
		<div class="row">
			<div class="col-12 nb-offers my-5">
				<?php echo get_field('txt-nb-offres-1'); ?> <b id="nb-offres"><?php echo $nb_offres; ?> offres d'emploi</b> <?php echo get_field('txt-nb-offres-2'); ?>
			</div>
		</div>
		<div class="row page-1" id="list-offer-cards">
			<?php foreach ($offres_urgentes as $id) { ?>
				<script type="text/javascript">
					offres.push({
						'id': '<?php echo $id; ?>',
						'ref': '<?php echo addslashes(get_field('ref', $id)); ?>',
						'contrat': '<?php echo addslashes(get_field('contrat', $id)); ?>',
						'fonction': '<?php echo addslashes(get_field('fonction', $id)); ?>',
						'secteur': '<?php echo addslashes(get_field('secteur', $id)); ?>',
						'salary-min': '<?php echo addslashes(get_field('salary-min', $id)); ?>',
						'salary-max': '<?php echo addslashes(get_field('salary-max', $id)); ?>',
						'region': '<?php echo addslashes(get_field('region', $id)); ?>',
						'zip': '<?php echo addslashes(get_field('zip', $id)); ?>',
						'city': '<?php echo addslashes(get_field('city', $id)); ?>',
						'pays': '<?php echo addslashes(get_field('pays', $id)); ?>',
						'descrassignement': '<?php echo str_replace(array("\r", "\n"), '', nl2br(addslashes(get_field('descrassignement', $id)))); ?>',
						'descrcustomer': '<?php echo addslashes(get_field('descrcustomer', $id)); ?>',
						'date-debut': '<?php echo addslashes(get_field('debut', $id)); ?>',
						'id-annonce': '<?php echo addslashes(get_field('id-annonce', $id)); ?>',
						'id-support': '<?php echo addslashes(get_field('id-support', $id)); ?>',
						'etat': '<?php echo addslashes(get_field('etat', $id)); ?>',
						'profil': '<?php echo str_replace(array("\r", "\n"), '', nl2br(addslashes(get_field('profil', $id)))); ?>',
						'urgent': true,
					});
				</script>
 				<div id="<?php echo $id; ?>" class="offre-card filtered col-12 col-md-4 col-lg-3 my-2 my-lg-1 px-1">
					<a href="<?php echo get_permalink($id); ?>" class="d-block">
						<div class="row">
							<div class="col-12 offre-title text-white px-4 py-auto text-center bg-red urgente">
								<p class="name-offre text-uppercase"><?php echo get_the_title($id); ?></p>
								<?php if(get_field('ref', $id)){?>
									<p class="ref-offre">Référence : <em><?php echo get_field('ref', $id); ?></em></p>
								<?php } ?>
							</div>
							<div class="col-12 bg-white text-black px-4 py-2 offre-infos">
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
								if(get_field('descrassignement', $id)){ ?>
									<p class="d-none update-offre my-1"><?php echo get_field('descrassignement', $id); ?></p>
								<?php }
								$daysago = round((date('U') - get_the_time('U', $id)) / (60*60*24));
								if($daysago == 0){?>
								<p class="time text-uppercase text-light-gray">Aujoud'hui</p>
								<?php } else{ ?>
								<p class="time text-uppercase text-light-gray">Il y a <?php echo $daysago; ?> jour<?php if($daysago>1) echo's'; ?></p>
								<?php } ?>
							</div>
						</div>
					</a>
				</div>
			<?php $n++;
			}

			foreach ($offres_non_urgentes as $offre) { ?>
				<script type="text/javascript">
					offres.push({
						'id': '<?php echo $offre->ID; ?>',
						'ref': '<?php echo addslashes(get_field('ref', $offre->ID)); ?>',
						'contrat': '<?php echo addslashes(get_field('contrat', $offre->ID)); ?>',
						'fonction': '<?php echo addslashes(get_field('fonction', $offre->ID)); ?>',
						'secteur': '<?php echo addslashes(get_field('secteur', $offre->ID)); ?>',
						'salary-min': '<?php echo addslashes(get_field('salary-min', $offre->ID)); ?>',
						'salary-max': '<?php echo addslashes(get_field('salary-max', $offre->ID)); ?>',
						'region': '<?php echo addslashes(get_field('region', $offre->ID)); ?>',
						'zip': '<?php echo addslashes(get_field('zip', $offre->ID)); ?>',
						'city': '<?php echo addslashes(get_field('city', $offre->ID)); ?>',
						'pays': '<?php echo addslashes(get_field('pays', $offre->ID)); ?>',
						'descrassignement': '<?php echo str_replace(array("\r", "\n"), '', nl2br(addslashes(get_field('descrassignement', $offre->ID)))); ?>',
						'descrcustomer': '<?php echo addslashes(get_field('descrcustomer', $offre->ID)); ?>',
						'date-debut': '<?php echo addslashes(get_field('debut', $offre->ID)); ?>',
						'id-annonce': '<?php echo addslashes(get_field('id-annonce', $offre->ID)); ?>',
						'id-support': '<?php echo addslashes(get_field('id-support', $offre->ID)); ?>',
						'etat': '<?php echo addslashes(get_field('etat', $offre->ID)); ?>',
						'profil': '<?php echo str_replace(array("\r", "\n"), '', nl2br(addslashes(get_field('profil', $offre->ID)))); ?>',
						'urgent': false,
					});
				</script>
 				<div id="<?php echo $offre->ID; ?>" class="offre-card filtered col-12 col-md-4 col-lg-3 my-2 my-lg-1 px-1">
					<a href="<?php echo get_permalink($offre->ID); ?>" class="d-block">
						<div class="row">
							<div class="col-12 offre-title text-white px-4 py-auto text-center bg-black">
								<p class="name-offre text-uppercase"><?php echo get_the_title($offre->ID); ?></p>
								<?php if(get_field('ref', $offre->ID)){?>
									<p class="ref-offre">Référence : <em><?php echo get_field('ref', $offre->ID); ?></em></p>
								<?php } ?>
							</div>
							<div class="col-12 bg-white text-black px-4 py-2 offre-infos">
								<?php if(get_field('contrat', $offre->ID)){ ?>
									<p class="info-offre">Contrat : <em><?php echo get_field('contrat', $offre->ID); ?></em></p>
								<?php }
								if(get_field('fonction', $offre->ID)){ ?>
									<p class="info-offre">Fonction : <em><?php echo get_field('fonction', $offre->ID); ?></em></p>
								<?php }
								if(get_field('secteur', $offre->ID)){ ?>
									<p class="info-offre">Secteur : <em><?php echo get_field('secteur', $offre->ID); ?></em></p>
								<?php }
								if(get_field('salary-min', $offre->ID) && get_field('salary-max', $offre->ID)){ ?>
									<p class="info-offre">Salaire (€/an) : <em><?php echo get_field('salary-min', $offre->ID); ?> à <?php echo get_field('salary-max', $offre->ID); ?></em></p>
								<?php }
								if(get_field('city', $offre->ID) && get_field('pays', $offre->ID)){ ?>
									<p class="info-offre">Localisation : <em><?php echo get_field('city', $offre->ID); ?> (<?php echo get_field('pays', $offre->ID); ?>)</em></p>
								<?php }
								if(get_field('descrassignement', $offre->ID)){ ?>
									<p class="d-none update-offre my-1"><?php echo get_field('descrassignement', $offre->ID); ?></p>
								<?php }
								$daysago = round((date('U') - get_the_time('U', $offre->ID)) / (60*60*24));
								if($daysago == 0){?>
								<p class="time text-uppercase text-light-gray">Aujoud'hui</p>
								<?php } else{ ?>
								<p class="time text-uppercase text-light-gray">Il y a <?php echo $daysago; ?> jour<?php if($daysago>1) echo's'; ?></p>
								<?php } ?>
							</div>
						</div>
					</a>
				</div>
			<?php $n++;
			} ?>
			<div class="row">
				<div class="col-12">
					<div id="pages" class="px-1 my-2 noselect">
						<?php if($nb_pages > 1 ){
							for($i = 1; $i <= $nb_pages; $i++){ ?>
								<div class="page-number" id="go-to-page-<?php echo $i; ?>"><?php echo $i; ?></div>
							<?php } ?>
							<div class="page-number" id="go-to-page-next">Page suivante</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include TEMPLATEPATH . '/contenus/contenu.php'; ?>
</div>