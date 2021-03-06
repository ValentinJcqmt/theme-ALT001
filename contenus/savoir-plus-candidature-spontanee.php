<div class="col2-bg-black-white font-weight-bold">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-lg-6 savoir-plus text-black text-uppercase">
				<div class="row py-5 px-1 px-sm-2 px-md-5 px-lg-0">
					<div class="col-12 know-more-title mb-2">
						<?php echo $contenu['sous-titre-col']; ?>
					</div>
					<div class="col-12 know-more-subtitle">
						<?php echo $contenu['sous-titre-entreprise']; ?>
					</div>
					<div class="col-12 know-more-txt">
						<?php echo $contenu['txt-entreprise']; ?>
					</div>
					<div class="col-12 know-more-btn py-1">
						<a href="<?php echo $contenu['url-btn-entreprise']; ?>" class="my-1 py-1 px-1 px-sm-2 px-md-3 px-lg-5 bg-black text-uppercase text-white gray-btn-arrow">
							<?php echo $contenu['txt-btn-entreprise']; ?>
						</a>
					</div>
					<div class="col-12 know-more-subtitle mt-3">
						<?php echo $contenu['sous-titre-candidat']; ?>
					</div>
					<div class="col-12 know-more-txt">
						<?php echo $contenu['txt-candidat']; ?>
					</div>
					<div class="col-12 know-more-btn py-1">
						<a href="<?php echo $contenu['url-btn-candidat']; ?>" class="my-1 py-1 px-1 px-sm-2 px-md-3 px-lg-5 bg-black text-uppercase text-white gray-btn-arrow">
							<?php echo $contenu['txt-btn-candidat']; ?>
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 candidature-spont text-white">
				<div class="row py-5 pl-1 pl-sm-2 pl-md-5 pr-1 pr-sm-2 pr-md-5 pr-lg-1">
					<div class="col-12 cand-spont-title text-uppercase">
						<?php echo $contenu['txt-principal']; ?>
					</div>
					<div class="col-12 cand-spont-txt my-1">
						<?php echo $contenu['txt-secondaire']; ?>
					</div>
						<?php if($contenu['picto-btn']){ ?>
							<style type="text/css">
								.cand-spont-btn.btn-1 .white-btn-arrow:after{
									content: url(<?php echo $contenu['picto-btn']['url'] ?>);
								}
							</style>
						<?php }
						if($contenu['url-btn'] && $contenu['txt-btn']){ ?>
							<div class="col-12 cand-spont-btn btn-1 my-1 text-uppercase">
								<a href="<?php echo $contenu['url-btn']; ?>" class="d-inline-block my-1 py-1 px-1 px-sm-2 px-md-3 px-lg-5 bg-white text-uppercase text-black white-btn-arrow">
									<?php echo $contenu['txt-btn']; ?>
								</a>
							</div>
						<?php }
						if($contenu['picto-btn-2']){ ?>
							<style type="text/css">
								.cand-spont-btn.btn-2 .white-btn-arrow:after{
									content: url(<?php echo $contenu['picto-btn-2']['url'] ?>);
								}
							</style>
						<?php }
						if($contenu['url-btn-2'] && $contenu['txt-btn-2']){ ?>
							<div class="col-12 cand-spont-btn btn-2 my-1 text-uppercase">
								<a href="<?php echo $contenu['url-btn-2']; ?>" class="d-inline-block my-1 py-1 px-1 px-sm-2 px-md-3 px-lg-5 bg-white text-uppercase text-black white-btn-arrow">
									<?php echo $contenu['txt-btn-2']; ?>
								</a>
							</div>
						<?php } ?>
					<hr class="cand-spont-separator my-2">
					<div class="col-12 cand-spont-contact text-light-gray my-1">
						<?php echo $contenu['txt-contact']; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>