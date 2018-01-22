<?php if(get_field('zip')){ ?>
	<script type="text/javascript">
		var zipcode = '<?php echo get_field('zip'); ?>';
	</script>
<?php }
if(isset($_GET['modal']) && $_GET['modal'] == "open"){ ?>
	<script type="text/javascript">
		$(window).on('load', function (){
			$('#modal-candidature').modal('show');
		});
	</script>
<?php }
if( ( isset($_POST['is_submit_7']) && $_POST['is_submit_7'] ) || (isset($_POST['is_submit_10']) && $_POST['is_submit_10']) ){?>
	<div class="valid-form p-1 font-weight-bold">
		Votre candidature a bien été pris en compte.
	</div>
<?php } ?>
<div class="main single-offre">
	<div class="modal text-center" id="modal-candidature" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content bg-light-gray d-inline-block px-5 py-2">
			<div class="modal-arrow-top bg-white">
				<img src="<?php echo get_template_directory_uri(); ?>/img/btn-arrow-black-small-down.png" class="img-fluid">
			</div>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span class="text-black" aria-hidden="true">&times;</span>
	        </button>
	        <?php
	        $candidatures = array();
	        if(is_user_logged_in()){
	        	$current_user = wp_get_current_user();
				$user_id = "user_".$current_user->ID;
				$userfields = get_field_objects($user_id);
				$candidatures = array();
				if(isset($userfields) && isset($userfields['offres-postulees']) && isset($userfields['offres-postulees']['value']))
	        		$candidatures = $userfields['offres-postulees']['value'];
	        }
			$idOfferForm = get_the_ID();
			if(in_array($idOfferForm, $candidatures)){?>
				<div class="deja-postule">Vous avez déjà postulé à cette offre</div>
			<?php }
			else{
				if(is_user_logged_in()){ ?>
		        	<div id="candidature-form">
						<div class="row">
							<div class="col-12">
								<div class="text-center">
									<?php
									$user_url = "";
									$user_cv = "";
									if(isset($userfields['url-linkedin']['value'])){
										$user_url = $userfields['url-linkedin']['value'];
									}
									if(isset($userfields['cv']['value']['url'])){
										$user_cv = $userfields['cv']['value']['url'];
									}
									echo (do_shortcode('[gravityform id=10 title=false description=false ajax=false field_values="candidature-url='.$userfields['url-linkedin']['value'].'&cv-url-prepopulate='.$user_cv.'&id-offer-form='.$idOfferForm.'"]'));	
									?>
								</div>
							</div>
						</div>
					</div>
		        <?php }
		        else{ ?>
					<div id="candidature-form">
						<div class="row">
							<div class="col-12">
								<div class="text-center">
									<?php echo do_shortcode('[gravityform id=7 title=false description=false ajax=false field_values="id-offer-form='.$idOfferForm.'"]'); ?>
									<div id="candidature-go-to-login" class="btn-change-form">
										Connectez-vous pour simplifier votre candidature
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="candidature-login" style="display:none;">
						<div class="row">
							<div class="col-12 text-black text-uppercase py-2 text-center font-weight-bold titre-social-connect">
								<?php echo get_field('titre-rs', 'option'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-12 text-center social-connect">
								<?php do_action('oa_social_login'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="text-center">
									<form method="POST" id="candidature-login-form">
										<label class="text-left text-black text-uppercase">adresse mail</label>
										<input type="text" name="loginmail" placeholder="...">
										<label class="text-left text-black text-uppercase">mot de passe</label>
										<input type="password" name="loginmdp" placeholder="...">
										<div class="text-uppercase bg-green text-white font-weight-bold btn-login-green">
											<input type="submit" form="candidature-login-form" name="login" class="text-uppercase bg-green text-white font-weight-bold" value="<?php echo get_field('txt-btn-connect', 'option'); ?>">
										</div>
									</form>
									<form method="POST" id="candidature-pwd-forgot-form" style="display:none;">
										<label class="text-left text-black text-uppercase">adresse mail</label>
										<input type="text" name="mail-pwd-forgot" placeholder="...">
										<div class="text-uppercase bg-green text-white font-weight-bold btn-login-green">
											<input type="submit" form="candidature-pwd-forgot-form" name="pwd-forgot" class="text-uppercase bg-green text-white font-weight-bold" value="Envoyer">
										</div>
									</form>
									<div id="candidature-go-to-form" class="btn-change-form">
										Revenir à la candidature
									</div>
									<div id="candidature-pwd-forgot" class="btn-change-form">
										<?php echo get_field('txt-btn-pwd-forgot', 'option'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php }
			} ?>
		</div>
	</div>
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
	<div class="bg-white">
		<div class="container-fluid">
			<div class="row bc-offre">
				<div class="col-12 col-md-9 breadcrumb-offre text-left pt-2 pb-1">
					<div class="d-inline text-black"><a href="<?php echo get_permalink(4735); ?>">offres d'emploi</a> / </div><div class="d-inline text-green font-weight-bold"><?php echo get_the_title(); ?></div>
				</div>
				<div class="col-12 col-md-3 text-left text-md-right">
					<div data-toggle="modal" data-target="#modal-candidature" class="px-5 my-1 d-inline-block text-center py-1 bg-green text-uppercase text-white postulat-btn-arrow">
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
					<a href="https://plus.google.com/share?url=<?php echo get_permalink();?>" target="_blank" class="mx-2 d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-google.svg"></a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_template_directory_uri(); ?>" target="_blank" class="mx-2 d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-facebook.svg"></a>
					<a href="https://twitter.com/intent/tweet?text=%20&url=<?php echo get_permalink();?>" target="_blank" class="mx-2 d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-twitter.svg"></a>
					<a href="https://www.linkedin.com/shareArticle?url=<?php echo get_template_directory_uri(); ?>" target="_blank" class="mx-2 d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-linkedin.svg"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 offre-update">
					<?php $splitDescr = preg_split("/[M, m]ission[s]?[ ]?:[ ]?/", get_field('descrassignement'));
					if(count($splitDescr) == 2){ ?>
						<div class="info-offre-update">
							<?php echo $splitDescr[0]; ?>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 offre-details">
					<h2 class="my-2 text-uppercase">détails de l'annonce</h2>
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
							<?php if(count($splitDescr) == 2){ ?>
								<div class="info-offre-update">
									<?php echo $splitDescr[1]; ?>
								</div>
							<?php }
							else{
								echo get_field('descrassignement');
							} ?>
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
			<?php if(get_field('zip')){ ?>
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 offre-map">
						<h2 class="my-2 text-uppercase">votre localisaiton</h2>
						<div id="map-localisation"></div>
					</div>
				</div>
			<?php } ?>
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 py-4 offre-apply text-center">
					<div data-toggle="modal" data-target="#modal-candidature" class="px-5 my-1 d-inline-block text-center py-1 bg-green text-uppercase text-white postulat-btn-arrow">
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
					<div class="row">
						<div class="col-12 col-lg-4 text-center text-lg-left">
							<a href="<?php echo get_permalink(get_previous_post()); ?>" class="my-1 d-inline-block mr-auto py-1 px-3 bg-black text-uppercase text-white prev-offre-btn">
								voir l'offre précédente
							</a>
						</div>
						<div class="col-12 col-lg-4 text-center">
							<a href="<?php echo get_permalink(4735); ?>" class="d-inline-block my-1 py-1 px-3 bg-white text-uppercase text-black offre-back-btn">
								Retour aux offres d'emploi
							</a>
						</div>
						<div class="col-12 col-lg-4 text-center text-lg-right">
							<a href="<?php echo get_permalink(get_next_post()); ?>" class="my-1 d-inline-block ml-auto py-1 px-3 bg-black text-uppercase text-white next-offre-btn">
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
				<div class="col-12 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 py-2">
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
				<div class="col-12 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
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
										<div class="date-box bg-red">
											<div class="d-inline-block clock bg-white">
												<img src="<?php echo get_template_directory_uri(); ?>/img/clock-red.svg">
											</div>
											<div class="d-inline-block date px-1 text-white bg-red text-uppercase font-weight-bold">
												<?php echo get_the_date('d M Y', $urgent_post); ?>
											</div>
										</div>
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
										if(get_field('descrassignement', $urgent_post)){
											$descrSplit = preg_split("/[M, m]ission[s]?[ ]?:[ ]?/", get_field('descrassignement', $urgent_post));
											if(count($descrSplit)==2){ ?>
												<div class="offre-update my-1"><?php echo $descrSplit[0]; ?></div>
											<?php }
											else{ ?>
												<div class="offre-update my-1"><?php echo substr(get_field('descrassignement', $urgent_post), 0, 140)."[...]"; ?></div>
											<?php }
										} ?>
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
											<div class="date-box bg-black">
												<div class="d-inline-block clock bg-white">
													<img src="<?php echo get_template_directory_uri(); ?>/img/clock-black.svg">
												</div>
												<div class="d-inline-block date px-1 text-white bg-black text-uppercase font-weight-bold">
													<?php echo get_the_date('d M Y', $annonce['ID']); ?>
												</div>
											</div>
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
											if(get_field('descrassignement', $annonce['ID'])){
												$descrSplit = preg_split("/[M, m]ission[s]?[ ]?:[ ]?/", get_field('descrassignement', $annonce['ID']));
												if(count($descrSplit)==2){ ?>
													<div class="offre-update my-1"><?php echo $descrSplit[0]; ?></div>
												<?php }
												else{ ?>
													<div class="offre-update my-1"><?php echo substr(get_field('descrassignement', $annonce['ID']), 0, 140)."[...]"; ?></div>
												<?php }
											}?>
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