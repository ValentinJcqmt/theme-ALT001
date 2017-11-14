<?php

get_header();

if(is_singular('annonce')){
	include('single/annonce.php');
}
elseif(is_singular('post')){
	include('single/article.php');
}
elseif(is_singular('metier')){
	include('single/metier.php');
}

get_footer();
