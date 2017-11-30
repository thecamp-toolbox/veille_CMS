<?php 

function makeImage($item) {
	if ($item->img() != '') {
		// Si il y a un lien, on le prend 
		$image = $item->img();
		return $image;
	}
	elseif ($item->slideimg() != '') {
		// Si une est sélectionnée, on y va 
		$file = $item->slideimg()->toFile();
		$image = $file->url(); 
		return $image;
	} elseif ($item->hasImages()) {
		// Dans le doute, on prend la première 
		$image = $item->images()->first()->url();
		return $image;
	} 
}

?>