<div class="col-12 pt-2">
	<a href="<?php echo $contenu['lien']; ?>" <?php if(isset($contenu['target'][0]) && $contenu['target'][0] == "blank" ){echo'target="_blank"';}?> class="my-1 py-1 px-5 bg-<?php echo $contenu['couleur']; ?> text-uppercase text-white <?php echo $contenu['couleur']; ?>-btn-arrow">
		<?php echo $contenu['texte']; ?>
	</a>
</div>