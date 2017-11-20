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
	<div style="background-image: url(<?php echo get_field('img-bg-header', 'option')['url']; ?>);">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 py-3">
					<img class="logo-atlantis-rh img-fluid" src="<?php echo get_field('logo-header', 'option')['url']; ?>">
				</div>
			</div>
		</div>
	</div>
	<div class="bg-light-gray page-title">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
					<h1 class="mt-3 mb-1 text-uppercase"><?php echo get_the_title(); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center page-share mb-2">
					<a href="https://plus.google.com/share?url=<?php echo get_permalink();?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-google.png"></a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_template_directory_uri(); ?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-facebook.png"></a>
					<a href="https://twitter.com/intent/tweet?text=%20&url=<?php echo get_permalink();?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-twitter.png"></a>
					<a href="https://www.linkedin.com/shareArticle?url=<?php echo get_template_directory_uri(); ?>" target="_blank" class="d-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/img/share-linkedin.png"></a>
				</div>
			</div>
		</div>
	</div>
	<?php if(has_post_thumbnail( )) {?>
		<div class="page-thumbnail" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
	<?php } ?>
	<div class="bg-white page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 page-content-txt py-4">
					<?php echo get_the_content(); ?>
				</div>
			</div>
		</div>
	</div>
	<?php if(get_field('contenus'))
		include TEMPLATEPATH . '/contenus/contenu.php';
	?>
</div>
<?php }

get_footer();
