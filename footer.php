<?php if(!is_page('profil')){ ?>
<div class="py-5 footer-cta-thumb" style="background-image: linear-gradient(to right, rgba(0,0,0,.95)0%, rgba(0,0,0,.6)30%, rgba(0,0,0,0)60%), url('<?php echo get_field('img-cta', 'option')['sizes']['footer-thumb']; ?>');">	
	<div class="container-fluid py-5">
		<div id="cta-footer" class="px-1 py-5 my-5">
			<div class="row">
				<div class="col-12">
					<div class="cta-footer-subtitle text-white text-uppercase">
						<?php echo get_field('sous-titre-cta-footer', 'option'); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="cta-footer-title text-white text-uppercase my-2">
						<?php echo get_field('titre-cta-footer', 'option'); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<a href="<?php echo get_field('url-cta-footer', 'option');?>" class="my-1 py-1 px-5 bg-black text-uppercase text-white cta-footer-btn gray-btn-arrow">
						<?php echo get_field('txt-btn-cta-footer', 'option'); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<div id="back-to-top" class="bg-light-gray">
	<div class="container-fluid">
		<div>
			<div class="row">
				<div class="col text-center">
					<img class="my-2" id="back-to-top-arrow" src="<?php echo get_template_directory_uri(); ?>/img/back-to-top.png" />
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="px-1 bg-black">
	<div class="container-fluid">
		<div class="row pt-1">
			<div class="d-flex mr-auto my-auto">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-big.png" class="img-fluid">
			</div>
			<div class="d-flex mr-auto ml-0 mr-sm-0 ml-sm-auto py-2 py-sm-0">
				<div class="footer-social">
					<?php
					$twitter_url = get_field('lien_twitter', 'option');
					$linkedin_url = get_field('lien_linkedin', 'option');
					$rss_url = get_home_url()."/feed";
					$scoopit_url = get_field('lien_scoopit', 'option');
					$twitter_picto = get_field('picto_twitter', 'option')['url'];
					$linkedin_picto = get_field('picto_linkedin', 'option')['url'];
					$rss_picto = get_field('picto_rss', 'option')['url'];
					$scoopit_picto = get_field('picto_scoopit', 'option')['url'];
					if($twitter_url){ ?>
						<a href="<?php echo $twitter_url; ?>" target="_blank">
							<img src="<?php echo $twitter_picto; ?>" class="img-fluid">
						</a>
					<?php }
					if($linkedin_url){ ?>
						<a class="pl-1" href="<?php echo $linkedin_url; ?>" target="_blank">
							<img src="<?php echo $linkedin_picto; ?>" class="img-fluid">
						</a>
					<?php }
					if($rss_url){ ?>
						<a class="pl-1" href="<?php echo $rss_url; ?>" target="_blank">
							<img src="<?php echo $rss_picto; ?>" class="img-fluid">
						</a>
					<?php }
					if($scoopit_url){ ?>
						<a class="pl-1" href="<?php echo $scoopit_url; ?>" target="_blank">
							<img src="<?php echo $scoopit_picto; ?>" class="img-fluid">
						</a>
					<?php }
					?>
				</div>
			</div>
		</div>
		<?php
		$after = '<div class="d-inline-block mx-1 separator-bar">|</div>';
		?>
		<div class="row">
			<div class="col my-2 text-white text-uppercase">
				<?php
					$menu = wp_nav_menu( array(
		                'menu'            => 'Menu footer 1',
		                'echo'            => false,
		                'after'           => $after,
		            )); 
	            	echo substr($menu, 0, strripos($menu, $after)).'</li></ul></div>';
            	?>
			</div>
		</div>
		<div class="row">
			<div class="d-flex my-2 mr-auto text-white text-uppercase">
				<?php
					$menu = wp_nav_menu( array(
		                'menu'            => 'Menu footer 2',
		                'echo'            => false,
		                'after'           => $after,
		            )); 
	            	echo substr($menu, 0, strripos($menu, $after)).'</li></ul></div>';
				?>
			</div>
			<div class="d-flex my-2 mr-auto ml-0 mr-sm-0 ml-sm-auto text-uppercase text-white copyright">
				<?php echo get_field('txt-copyright-footer', 'option'); ?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
