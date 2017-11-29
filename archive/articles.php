<?php
	$articles = get_posts( array(
	    'post_type' =>'post',
	    'orderby' => 'post_date',
		'order' => 'DESC',
		'posts_per_page' => -1,
	), OBJECT);
	$nb_articles = count($articles);
	$nb_pages = ceil($nb_articles/9);
?>
<div class="main nos-articles">
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
			<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 py-2">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 py-2 py-lg-0 align-self-center font-weight-bold">
						<img src="<?php echo get_field('picto-filtre')['url']; ?>" class="img-fluid pr-1"><?php echo get_field('titre-filtre'); ?>
					</div>
					<div class="col-12 col-md-6 col-lg-4 py-2 py-lg-0">
						<?php
						$categories = get_terms('category', array('hide_empty' => false));
						?>
						<select id="check-cat">
							<option value="null"><?php echo get_field('txt-no-category'); ?></option>
							<?php foreach ($categories as $cat) { ?>
								<option value="<?php echo $cat->name; ?>"><?php echo $cat->name; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var articles = [];
	</script>
	<?php $n = 1; ?>
	<style>
		<?php if($nb_pages > 1){
			for($i=2; $i<=$nb_pages; $i++){
				echo".page-".$i." #go-to-page-".$i."{color:#FFF; background:#333;}\n";
			}
		} ?>
	</style>
	<div class="px-4 bg-light-gray articles-list">
		<div class="row">
			<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 py-2 nb-articles">
				<?php echo get_field('txt-nb-post-1'); ?> <b id="nb-articles"><?php echo $nb_articles; ?> actualités</b> <?php echo get_field('txt-nb-post-2'); ?>
			</div>
		</div>
		<div class="row page-1" id="list-article-cards">
			<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 py-2">
				<div class="row">
					<?php foreach ($articles as $article) { ?>
						<script type="text/javascript">
							articles.push({
								'id': '<?php echo $article->ID; ?>',
								'cat' : [<?php echo"'".addslashes(get_cat_name(wp_get_post_categories($article->ID)[0]))."'"; ?>],
							});
						</script>
						<div id="<?php echo $article->ID; ?>" class="article-card filtered col-12 col-md-6 col-lg-4 p-1">
							<a href="<?php echo get_permalink($article->ID); ?>">
								<div class="row bg-white">
									<?php if(has_post_thumbnail($article->ID)) {?>
										<div class="col-12 post-thumbnail-container">
											<div class="post-thumbnail" style="background-image:url('<?php echo get_the_post_thumbnail_url($article->ID); ?>');">
											</div>
										</div>
									<?php } else{ ?>
										<div class="col-12 post-thumbnail-container">
											<div class="post-thumbnail" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/actu-thumb.png');">
											</div>
										</div>
									<?php } ?>
									<div class="col-12 post-info-container">
										<div class="p-1 p-lg-2 d-flex post-infos">
											<?php if(has_category('', $article->ID)){ ?>
											<p class="text-blue article-cat text-uppercase color-blue font-weight-bold"><?php echo get_the_category($article->ID)[0]->name; ?></p>
											<?php } ?>
											<p class="article-title text-uppercase color-black font-weight-bold"><?php echo get_the_title($article->ID); ?></p>
											<div class="article-excerpt color-black"><?php echo substr(strip_tags(get_post($article->ID, ARRAY_A)['post_content']), 0, 140); ?> [...]</div>
											<?php $daysago = round((date('U') - get_the_time('U', $article->ID)) / (60*60*24));
											if($daysago == 0){?>
											<p class="time text-uppercase text-light-gray">Aujoud'hui</p>
											<?php } else{ ?>
											<p class="time text-uppercase text-light-gray">Il y a <?php echo $daysago; ?> jour<?php if($daysago>1) echo's'; ?></p>
											<?php } ?>
										</div>
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
		</div>
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
								<div class="col-12 offre-title urgente text-white px-1 px-lg-2 py-auto text-center bg-red">
									<p class="name-offre text-uppercase"><?php echo get_the_title($offer); ?></p>
									<?php if(get_field('ref', $offer)){?>
										<p class="ref-offre">Référence : <em><?php echo get_field('ref', $offer); ?></em></p>
									<?php } ?>
									<div class="date-box bg-red">
										<div class="d-inline-block clock bg-white">
											<img src="<?php echo get_template_directory_uri(); ?>/img/clock-red.png">
										</div>
										<div class="d-inline-block date px-1 text-white bg-red text-uppercase font-weight-bold">
											<?php echo get_the_date('d M Y', $offer); ?>
										</div>
									</div>
								</div>
								<div class="col-12 bg-white text-black px-1 px-lg-2 py-2 offre-infos">
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
									} ?>
								</div>
							</div>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<?php include TEMPLATEPATH . '/contenus/contenu.php'; ?>
</div>