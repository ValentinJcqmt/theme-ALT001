	<div class="social-login-bloc" style="background-image: url(<?php echo get_field('social-connect-img')['url']; ?>);">
		<div class="container-fluid py-5">
			<div class="row py-5">
				<div class="col-12 text-white text-uppercase social-connect-subtitle">
					<?php echo get_field('social-connect-subtitle'); ?>
				</div>
				<div class="col-12 text-white text-uppercase social-connect-title my-3">
					<?php echo get_field('social-connect-txt'); ?>
				</div>
				<div class="col-12 social-login-btn">
					<div class="fb-login">
						<a href="<?php echo '#';?>" class="d-inline-block my-1 py-1 text-center bg-facebook text-uppercase text-white facebook-btn-arrow">
							Se connecter avec facebook
						</a>
					</div>
					<div class="twitter-login">
						<a href="<?php echo '#';?>" class="d-inline-block my-1 py-1 text-center bg-twitter text-uppercase text-white twitter-btn-arrow">
							Se connecter avec Twitter
						</a>
					</div>
					<div class="google-login">
						<a href="<?php echo '#';?>" class="d-inline-block my-1 py-1 text-center bg-google text-uppercase text-white google-btn-arrow">
							Se connecter avec google +
						</a>
					</div>
					<div class="linkedin-login">
						<a href="<?php echo '#';?>" class="d-inline-block my-1 py-1 text-center bg-linkedin text-uppercase text-white bg-linkedin linkedin-btn-arrow">
							Se connecter avec linkedin
						</a>
					</div>
				</div>
			</div>
		</div><!--End .container-fluid-->
	</div><!--End .social-login-bloc-->