<div class="social-login-bloc" style="background-image: url(<?php echo $contenu['img-bg']['url']; ?>);">
	<div class="container-fluid py-5">
		<div class="row py-5">
			<div class="col-12 text-white text-uppercase social-connect-subtitle">
				<?php echo $contenu['sous-titre']; ?>
			</div>
			<div class="col-12 text-white text-uppercase social-connect-title my-3">
				<?php echo $contenu['titre']; ?>
			</div>
			<div class="col-12 social-login-btn">
				<?php do_action('oa_social_login'); ?>
			</div>
		</div>
	</div><!--End .container-fluid-->
</div><!--End .social-login-bloc-->