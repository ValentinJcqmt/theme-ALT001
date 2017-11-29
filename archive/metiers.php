<?php
	$metiers = get_posts( array(
	    'post_type' =>'metier',
	    'orderby' => 'post_date',
		'order' => 'DESC',
		'posts_per_page' => -1,
	), OBJECT);
	$nb_metiers = count($metiers);
	$nb_pages = ceil($nb_metiers/10);
?>
<div class="main nos-fiches-metiers">
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
				<?php echo get_field('sous_titre'); ?>
			</div>
		</div>
	</div>
	<?php $n = 1; ?>
	<style>
		<?php if($nb_pages > 1){
			for($i=2; $i<=$nb_pages; $i++){
				echo".page-".$i." #go-to-page-".$i."{color:#FFF; background:#333;}\n";
			}
		} ?>
	</style>
	<div class="bg-white metiers-list">
		<div class="row page-1" id="list-metier-cards">
			<div class="col-12 text-center">
				<div class="row">
					<?php foreach ($metiers as $metier) { ?>
						<div id="<?php echo $metier->ID; ?>" class="metier-card filtered col-12">
							<?php if(has_post_thumbnail($metier->ID)) {?>
							<div class="metier-thumbnail-bg" style="background-image:url(<?php echo get_the_post_thumbnail_url($metier->ID);?>);">
							<?php } else{ ?>
							<div class="metier-thumbnail-bg" style="background-image:url(<?php echo get_template_directory_uri().'/img/metier-thumb.png'; ?>);">
							<?php } ?>
								<div class="row py-4 bg-white">
									<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 metier-info-container text-center">
										<div class="metier-infos px-1">
											<p class="text-center metier-title text-uppercase color-black font-weight-bold"><?php echo get_the_title($metier->ID); ?></p>
											<div class="text-center metier-excerpt color-black py-2">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis vitae quam quis finibus. Proin scelerisque erat sit amet felis condimentum, vel efficitur ex ultricies. Suspendisse ut est sed nisl sagittis suscipit ut eget est. Phasellus cursus dui sed sapien facilisis, vitae dictum est dictum.
												Vestibulum bibendum enim eu augue condimentum fringilla. Nulla imperdiet aliquam elit interdum varius. Morbi pretium ex ac enim fermentum laoreet. Nullam auctor elit sollicitudin interdum tincidunt. Nam semper ipsum ut facilisis aliquam. Curabitur malesuada tempus libero, id pharetra libero fringilla vel.
											</div>
											<a href="<?php echo get_permalink($metier->ID); ?>" class="my-1 py-1 px-1 px-md-3 px-lg-5 bg-black text-uppercase text-white gray-btn-arrow">
												<?php echo get_field('txt-btn-opportunites') ?>
											</a>
										</div>
									</div>
								</div>
							</div><!--End .metier-thumbnail-bg-->
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
	</div>
	<?php include TEMPLATEPATH . '/contenus/contenu.php'; ?>
</div>