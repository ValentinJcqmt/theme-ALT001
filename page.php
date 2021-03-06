<?php

get_header();

if(is_page('nos-offres-demploi')){
	include TEMPLATEPATH . '/archive/annonces.php';
}
elseif(is_page('blog')){
	include TEMPLATEPATH . '/archive/articles.php';
}
elseif(is_page('nos-fiches-metiers')){
	include TEMPLATEPATH . '/archive/metiers.php';
}
elseif(is_page('profil')){
	$redirect = get_home_url();
    if ( !is_user_logged_in() )
        exit( wp_redirect( $redirect ) );
    else{
		include TEMPLATEPATH . '/page/profil.php';
    }
}
else{
the_post(); ?>
<div class="main page">
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
	<div class="bg-light-gray page-title <?php if(!has_post_thumbnail()){echo'no-thumbnail';} ?>">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
					<h1 class="mt-3 mb-1 text-uppercase"><?php echo get_the_title(); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center page-share mb-2">
					<a href="https://plus.google.com/share?url=<?php echo get_permalink();?>" target="_blank" class="mx-2 d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-google.svg"></a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_template_directory_uri(); ?>" target="_blank" class="mx-2 d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-facebook.svg"></a>
					<a href="https://twitter.com/intent/tweet?text=%20&url=<?php echo get_permalink();?>" target="_blank" class="mx-2 d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-twitter.svg"></a>
					<a href="https://www.linkedin.com/shareArticle?url=<?php echo get_template_directory_uri(); ?>" target="_blank" class="mx-2 d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-linkedin.svg"></a>
				</div>
			</div>
		</div>
	</div>
	<?php if(has_post_thumbnail()) {?>
		<div class="page-thumbnail" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
	<?php } ?>
	<div class="bg-white page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 page-content-txt pt-4 pb-1">
					<?php echo get_the_content(); ?>
					<?php if(get_field('shortcode-form')){
						echo do_shortcode(get_field('shortcode-form'));
					} ?>
				</div>
				<?php if(get_field('contenus_txt_img_btn')){
					echo'<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 page-content-txt py-1">';
						echo'<div class="row">';
							include TEMPLATEPATH . '/contenus/contenu-btn-txt-img.php';
						echo'</div>';
					echo'</div>';
				} ?>
				<script type="text/javascript">
				jQuery(document).bind('gform_confirmation_loaded', function(event, formId){
					$('html, body').animate({
			        	scrollTop: 0
				    }, 700);
				    window.setTimeout(function(){
				        window.location.href = "<?php echo get_home_url(); ?>";
				    }, 5000);
				});
				</script>
			</div>
		</div>
	</div>
	<?php if(get_field('contenus'))
		include TEMPLATEPATH . '/contenus/contenu.php';
	?>
</div>
<?php }

get_footer();
