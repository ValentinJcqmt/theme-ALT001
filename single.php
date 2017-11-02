<?php

get_header();

if(is_singular('annonce')){
	include('single/annonce.php');
}

get_footer();
