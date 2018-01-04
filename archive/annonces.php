<?php
	$offres = array();
	$offres_all = get_posts( array(
	    'post_type' =>'annonce',
	    'orderby' => 'post_date',
		'order' => 'DESC',
		'posts_per_page' => -1,
	), OBJECT);
	$nb_offres = count($offres_all);
	$nb_pages = ceil($nb_offres/12);
	$offres_urgentes = array();
	if(get_field('offres_urgentes', 'option'))
		$offres_urgentes = get_field('offres_urgentes', 'option');
	$offres_non_urgentes = array_filter($offres_all, function($e) use ($offres_urgentes){
		return !in_array($e->ID, $offres_urgentes);
	}, ARRAY_FILTER_USE_BOTH);
	
	$mondeList = array('France');
	$salaryMin=0;
	$salaryMax=0;
	$contratList = array('CDI');
	$localiteList = array();

	foreach ($offres_urgentes as $offre) {
		if(get_field('pays', $offre) && !in_array(get_field('pays', $offre), $mondeList))
			array_push($mondeList, get_field('pays', $offre));
		if( ( get_field('salary-min', $offre) && get_field('salary-min', $offre) < $salaryMin ) || ( get_field('salary-min', $offre) && $salaryMin==0 ))
			$salaryMin = get_field('salary-min', $offre);
		if( ( get_field('salary-max', $offre) && get_field('salary-max', $offre) > $salaryMax ) || ( get_field('salary-max', $offre) && $salaryMax==0 ))
			$salaryMax = get_field('salary-max', $offre);
		if(get_field('contrat', $offre) && !in_array(get_field('contrat', $offre), $contratList))
			array_push($contratList, get_field('contrat', $offre));
		if(get_field('city', $offre) && !in_array(get_field('city', $offre), $localiteList))
			array_push($localiteList, get_field('city', $offre));
	}
	foreach ($offres_non_urgentes as $offre) {
		if(get_field('pays', $offre->ID) && !in_array(get_field('pays', $offre->ID), $mondeList))
			array_push($mondeList, get_field('pays', $offre->ID));
		if( ( get_field('salary-min', $offre->ID) && get_field('salary-min', $offre->ID) < $salaryMin ) || ( get_field('salary-min', $offre->ID) && $salaryMin==0 ))
			$salaryMin = get_field('salary-min', $offre->ID);
		if( ( get_field('salary-max', $offre->ID) && get_field('salary-max', $offre->ID) > $salaryMax ) || ( get_field('salary-max', $offre->ID) && $salaryMax==0 ))
			$salaryMax = get_field('salary-max', $offre->ID);
		if(get_field('contrat', $offre->ID) && !in_array(get_field('contrat', $offre->ID), $contratList))
			array_push($contratList, get_field('contrat', $offre->ID));
		if(get_field('city', $offre->ID) && !in_array(get_field('city', $offre->ID), $localiteList))
			array_push($localiteList, get_field('city', $offre->ID));
	}
?>
<div class="main nos-offres">
	<div style="background-image: url(<?php echo get_field('img-bg-header', 'option')['sizes']['top-logo-bg']; ?>);">
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
	<div class="px-1 px-md-2 bg-light-gray filters">
		<div class="row py-5 text-uppercase">
			<div class="col-12 col-lg-3 py-2 py-lg-0 align-self-center font-weight-bold">
				<img src="<?php echo get_field('picto-filtre')['url']; ?>" class="img-fluid pr-1"><?php echo get_field('titre-filtre'); ?>
			</div>
			<div class="col-12 col-lg-9">
				<div class=row>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3">
						<div class="row metier">
							<?php $categories = get_terms('offer-category', array('hide_empty' => false)); ?>
							<select class="custom-select" id="check-cat">
								<option value="null"><?php echo get_field('txt-metier'); ?></option>
								<?php
								$currentCat = false;
								var_dump(urldecode($_GET['cat']));
								foreach ($categories as $cat) {
									var_dump($cat->name);
									if(isset($_GET['cat']) && stripslashes(urldecode($_GET['cat'])) == $cat->name)
										$currentCat = true;
									else
										$currentCat = false;
									?>
									<option <?php if($currentCat){echo'selected';} ?> value="<?php echo $cat->name; ?>"><?php echo $cat->name; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="row contrat">
							<select class="custom-select" id="check-contrat">
								<option value="null"><?php echo get_field('txt-contrat'); ?></option>
								<?php foreach ($contratList as $contrat){ ?>
									<option value="<?php echo $contrat; ?>"><?php echo $contrat; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3">
						<div class="row monde">
							<select class="custom-select" id="check-pays">
								<?php foreach ($mondeList as $pays) { ?>
									<option value="<?php echo $pays; ?>"><?php echo $pays; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="row localite">
							<select class="custom-select" id="check-local">
								<option value="null"><?php echo get_field('txt-localite'); ?></option>
								<?php foreach ($localiteList as $localite){ ?>
									<option value="<?php echo $localite; ?>"><?php echo $localite; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3">
						<div class="row salary-min">
							<select class="custom-select" id="check-sal-min">
								<option value="null"><?php echo get_field('txt-salary-min'); ?></option>
								<?php for($i=$salaryMin; $i<$salaryMax; $i+=10000){ ?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="row salary-max">
							<select class="custom-select" id="check-sal-max">
								<option value="null"><?php echo get_field('txt-salary-max'); ?></option>
								<?php for($i=$salaryMax; $i>$salaryMin; $i-=10000){ ?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3">
						<div class="row checkbox-urgent">
							<input id="is-urgent" type="checkbox">
							<label for="is-urgent" class="d-inline-block text-uppercase">
								<?php echo get_field('txt-urgent'); ?>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="px-1 px-md-2 px-lg-4 bg-light-gray search">
		<div class="row py-5 text-uppercase">
			<div class="col-12 col-md-7 col-lg-3 font-weight-bold search-txt">
				<img src="<?php echo get_field('picto-search')['url']; ?>" class="img-fluid pr-1"><?php echo get_field('titre-search'); ?>
			</div>
			<div class="col-12 col-md-5 col-lg-2">
				<div class="search-box">
					<input id="search-offres" name="s" class="aa-input" type="search" placeholder="<?php echo get_field('txt-keywords'); ?>" autocomplete="on" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="true" aria-owns="algolia-autocomplete-listbox-0" dir="auto">
					<img class="search-icon" src="<?php echo get_template_directory_uri(); ?>/img/search.png">
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var offres = [];
	</script>
	<?php $n = 1; ?>
	<style>
		<?php if($nb_pages > 1){
			for($i=2; $i<=$nb_pages; $i++){
				echo".page-".$i." #go-to-page-".$i."{color:#FFF; background:#333;}\n";
			}
		} ?>
	</style>
	<div class="px-1 px-md-2 px-lg-4 bg-light-gray offers-list">
		<div class="row" id="count-disp">
			<div class="col-12 nb-offers my-5">
				<?php echo get_field('txt-nb-offres-1'); ?> <b id="nb-offres"><?php echo $nb_offres; ?> offres d'emploi</b> <?php echo get_field('txt-nb-offres-2'); ?>
			</div>
		</div>
		<div class="row" id="empty-msg" style="display:none;">
			<div class="col-12 my-5">
				Nous n'avons aucunes offres correspondant à votre sélection.
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
						'salarymin': '<?php echo addslashes(get_field('salary-min', $id)); ?>',
						'salarymax': '<?php echo addslashes(get_field('salary-max', $id)); ?>',
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
						'cat' : [<?php if(has_category('', $id)){echo"'".addslashes(get_cat_name(wp_get_post_categories($id)[0]))."'";} ?>],
					});
				</script>
 				<div id="<?php echo $id; ?>" class="offre-card filtered col-12 col-md-6 col-lg-4 col-xl-3 my-2 my-lg-1 px-1">
					<a href="<?php echo get_permalink($id); ?>" class="d-block">
						<div class="row">
							<div class="col-12 offre-title text-white px-2 px-md-3 px-lg-4 py-auto text-center bg-red urgente">
								<p class="name-offre text-uppercase"><?php echo get_the_title($id); ?></p>
								<?php if(get_field('ref', $id)){?>
									<p class="ref-offre">Référence : <em><?php echo get_field('ref', $id); ?></em></p>
								<?php } ?>
								<div class="date-box bg-red">
									<div class="d-inline-block clock bg-white">
										<img src="<?php echo get_template_directory_uri(); ?>/img/clock-red.svg">
									</div>
									<div class="d-inline-block date px-1 text-white bg-red text-uppercase font-weight-bold">
										<?php echo get_the_date('d M Y', $id); ?>
									</div>
								</div>
							</div>
							<div class="col-12 bg-white text-black px-2 px-md-3 px-lg-4 py-2 offre-infos">
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
								if(get_field('descrassignement', $offre->ID)){
									$descrSplit = preg_split("/[M, m]ission[s]?[ ]?:[ ]?/", get_field('descrassignement', $offre->ID));
									if(count($descrSplit)==2){ ?>
										<div class="update-offre my-1"><?php echo $descrSplit[0]; ?></div>
									<?php }
									else{ ?>
										<div class="update-offre my-1"><?php echo substr(get_field('descrassignement', $offre->ID), 0, 140)."[...]"; ?></div>
									<?php }
								} ?>
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
						'salarymin': '<?php echo addslashes(get_field('salary-min', $offre->ID)); ?>',
						'salarymax': '<?php echo addslashes(get_field('salary-max', $offre->ID)); ?>',
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
						'cat' : [<?php if(has_category('', $offre->ID)){echo("'".get_cat_name(intval(wp_get_post_categories($offre->ID)[0]))."'");} ?>]
					});
				</script>
 				<div id="<?php echo $offre->ID; ?>" class="offre-card filtered col-12 col-md-6 col-lg-4 col-xl-3 my-2 my-lg-1 px-1">
					<a href="<?php echo get_permalink($offre->ID); ?>" class="d-block">
						<div class="row">
							<div class="col-12 offre-title text-white px-2 px-md-3 px-lg-4 py-auto text-center bg-black">
								<p class="name-offre text-uppercase"><?php echo get_the_title($offre->ID); ?></p>
								<?php if(get_field('ref', $offre->ID)){?>
									<p class="ref-offre">Référence : <em><?php echo get_field('ref', $offre->ID); ?></em></p>
								<?php } ?>
								<div class="date-box bg-black">
									<div class="d-inline-block clock bg-white">
										<img src="<?php echo get_template_directory_uri(); ?>/img/clock-black.svg">
									</div>
									<div class="d-inline-block date px-1 text-white bg-black text-uppercase font-weight-bold">
										<?php echo get_the_date('d M Y', $offre->id); ?>
									</div>
								</div>
							</div>
							<div class="col-12 bg-white text-black px-2 px-md-3 px-lg-4 py-2 offre-infos">
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
								if(get_field('descrassignement', $offre->ID)){
									$descrSplit = preg_split("/[M, m]ission[s]?[ ]?:[ ]?/", get_field('descrassignement', $offre->ID));
									if(count($descrSplit)==2){ ?>
										<div class="update-offre my-1"><?php echo $descrSplit[0]; ?></div>
									<?php }
									else{ ?>
										<div class="update-offre my-1"><?php echo substr(get_field('descrassignement', $offre->ID), 0, 140)."[...]"; ?></div>
									<?php }
								} ?>
							</div>
						</div>
					</a>
				</div>
			<?php $n++;
			} ?>
			<div class="col-12">
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
	</div>
	<?php include TEMPLATEPATH . '/contenus/contenu.php'; ?>
</div>