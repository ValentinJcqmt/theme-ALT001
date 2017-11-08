<?php

get_header();

if(is_singular('annonce')){
	include('single/annonce.php');
}
elseif(is_singular('post')){
	include('single/article.php');
}

get_footer();
