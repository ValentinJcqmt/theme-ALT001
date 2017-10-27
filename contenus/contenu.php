<?php
	$contenus = get_field('contenus');
	if($contenus){
		foreach ($contenus as $contenu) {
			if($contenu['acf_fc_layout'] == "social-connect"){
				include('social-connect.php');
			}
			elseif($contenu['acf_fc_layout'] == "savoir-plus-candidature-spontanee"){
				include('savoir-plus-candidature-spontanee.php');
			}
		}
	}
?>