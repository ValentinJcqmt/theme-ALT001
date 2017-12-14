<?php
	$contenus = get_field('contenus_txt_img_btn');
	if($contenus){
		foreach ($contenus as $contenu) {
			if($contenu['acf_fc_layout'] == "titre"){
				include('titre.php');
			}
			elseif($contenu['acf_fc_layout'] == "texte"){
				include('texte.php');
			}
			elseif($contenu['acf_fc_layout'] == "image"){
				include('image.php');
			}
			elseif($contenu['acf_fc_layout'] == "texte_image"){
				include('texte_image.php');
			}
			elseif($contenu['acf_fc_layout'] == "image_texte"){
				include('image_texte.php');
			}
			elseif($contenu['acf_fc_layout'] == "bouton"){
				include('bouton.php');
			}
		}
	}
?>