 <?php
	 $current_user = wp_get_current_user();
	 $user_id = "user_".$current_user->ID;
	 $userfields = get_field_objects($user_id);
	 the_post();
 ?>
<div class="main profil">
	<div style="background-image: url(<?php echo get_field('img-bg-header', 'option')['url']; ?>);">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 py-3">
					<img class="logo-atlantis-rh img-fluid" src="<?php echo get_field('logo-header', 'option')['url']; ?>">
				</div>
			</div>
		</div>
	</div>
	<div class="px-4 bg-light-gray text-black">
		<div class=row>
			<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 py-3">
				<p class="hello font-weight-bold">Bonjour,</p>
				<h1 class="text-uppercase"><?php echo $current_user->user_firstname.' '.$current_user->user_lastname ?></h1>
			</div>
			<div class="col-12 col-md-8 offset-md-2 col-lg-3 offset-lg-0 col-xl-4 text-right d-flex align-items-center">
				<a href="<?php echo wp_logout_url(); ?>" id="disconnect" class="ml-0 ml-lg-auto mr-4 px-3 my-1 d-inline-block text-center py-1 bg-red text-uppercase text-white disconnect-btn-cross">
					Se déconnecter
				</a>
			</div>
		</div>
	</div>
	<div class="bg-white profil-content px-4">
		<div class="row">
			<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 profil-content-txt py-4">
				<div class="apercu-profil-title text-uppercase font-weight-bold my-3">
					Aperçu du profil
				</div>
				<form id="profil-edit-form" method="POST" enctype="multipart/form-data">
					<fieldset id="profil-edit-fields">
						<label>PRÉNOM</label>
						<input type="text" name="firstname" class="mb-2" value="<?php echo $current_user->user_firstname; ?>">
						<label>NOM</label>
						<input type="text" name="lastname" class="mb-2" value="<?php echo $current_user->user_lastname; ?>">
						<label>ADRESSE</label>
						<input type="text" name="mail" class="mb-2" value="<?php echo $current_user->user_email; ?>">
						<span id="cv-span">CV</span>
						<label for="cv-input" class="mr-4 d-block bg-black text-white text-uppercase text-center font-weight-bold p-1" id="cv-label">Ajouter un document</label>
						<input id="cv-input" type="file" name="cv" accept=".pdf" >
						<div id="cv-filename" class="mb-2 text-light-gray">
						<?php if($userfields['cv']['value']){
							echo $userfields['cv']['value']['filename'];
						} ?>
						</div>
						<label>PROFIL EN LIGNE (site web, linkedin...)</label>
						<input type="text" name="linkedin" class="mb-2" value="<?php echo $userfields['url-linkedin']['value']; ?>">
						<div class="save-profil-container text-center">
							<div class="save-profil-btn text-center bg-black">
								<input type="submit" form="profil-edit-form" class="px-3 py-1 bg-black text-white text-center text-uppercase font-weight-bold" id="save-profil" name="save-profil" value="sauvegarder">
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<?php if(isset($userfields['offres-postulees']) && $userfields['offres-postulees']['value']){
	$urgents = get_field('offres_urgentes', 'option'); ?>
	<div class="bg-light-gray">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 py-2">
					<div class="profil-offers-title text-uppercase text-left font-weight-bold my-3">
						Annonces auxquelles vous avez postulé
					</div>
				</div>
				<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
					<div class="row">
						<?php foreach ($userfields['offres-postulees']['value'] as $id) { ?>
							<div id="offre-<?php echo $id; ?>" class="offre-card col-12 col-md-6">
								<div class="row p-1">
									<a href="<?php echo get_permalink($id); ?>">
										<?php if(in_array($id, $urgents)){ ?>
											<div class="col-12 offre-title urgente text-white px-4 py-auto text-center bg-red">
												<p class="name-offre text-uppercase"><?php echo get_the_title($id); ?></p>
												<?php if(get_field('ref', $id)){?>
													<p class="ref-offre">Référence : <em><?php echo get_field('ref', $id); ?></em></p>
												<?php } ?>
												<div class="date-box bg-red">
													<div class="d-inline-block clock bg-white">
														<img src="<?php echo get_template_directory_uri(); ?>/img/clock-red.png">
													</div>
													<div class="d-inline-block date px-1 text-white bg-red text-uppercase font-weight-bold">
														<?php echo get_the_date('d M Y', $id); ?>
													</div>
												</div>
											</div>
										<?php } else{ ?>
											<div class="col-12 offre-title text-white px-4 py-auto text-center bg-black">
												<p class="name-offre text-uppercase"><?php echo get_the_title($id); ?></p>
												<?php if(get_field('ref', $id)){?>
													<p class="ref-offre">Référence : <em><?php echo get_field('ref', $id); ?></em></p>
												<?php } ?>
												<div class="date-box bg-black">
													<div class="d-inline-block clock bg-white">
														<img src="<?php echo get_template_directory_uri(); ?>/img/clock-black.png">
													</div>
													<div class="d-inline-block date px-1 text-white bg-black text-uppercase font-weight-bold">
														<?php echo get_the_date('d M Y', $id); ?>
													</div>
												</div>
											</div>
										<?php } ?>
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
									</a>
									<div id="delete-<?php echo $id; ?>-<?php echo $current_user->ID; ?>" class="col-12 delete bg-white py-1 text-center text-light-gray">
										<div class="d-inline">
											<div class="text-uppercase d-inline">supprimer</div>
											<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/trash-icon.png">
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<div class="row">
		<div class="col-12 col-lg-4 bg-linkedin-picto hp-3bloc-container text-center py-3 py-lg-0">
			<div class="row px-4 hp-3bloc-align">
				<div class="col-12 py-3">
					<p class="text-white text-uppercase hp-linkedin-title">
						<?php echo get_field('txt-linkedin'); ?>
					</p>
					<a href="<?php echo get_field('url-btn-linkedin'); ?>" class="my-3 py-1 d-inline-block text-center bg-white text-uppercase text-light-blue white-btn-arrow">
						<?php echo get_field('txt-btn-linkedin'); ?>
					</a>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-4 hp-3bloc-container">
			<img src="<?php echo get_field('bloc-centre-img')['url']; ?>" class="img-fluid">
		</div>
		<div class="col-12 col-lg-4 bg-twitter-picto hp-3bloc-container text-center py-3 py-lg-0">
			<div class="row px-5 hp-3bloc-align">
				<div class="col-12">
					<p class="text-uppercase text-white hp-twitter-title">
						<?php echo get_field('twitter-titre'); ?>
					</p>
					<div class="text-center hp-twitter-text my-2 text-white">
						<?php echo get_field('twitter-txt'); ?>
					</div>
					<ul class="hp-twitter-list text-uppercase text-center">
						<?php foreach(get_field('comptes-twitter') as $compte){ ?>
							<li>
								<a href="http://www.twitter.com/<?php echo $compte['nom-twitter'] ?>" target="_blank" class="text-white d-inline-block my-1 tewt-uppercase twitter-link">@<?php echo $compte['nom-twitter'] ?></a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div><!--End .row-->
</div>