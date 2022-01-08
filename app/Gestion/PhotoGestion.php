<?php
namespace App\Gestion;

class PhotoGestion implements PhotoGestionInterface {
	
	/*public function save($image) {
    if ($image->isValid()){
	$chemin= config('images.path');
	$extension=$image->getClientOriginalExtension();
	do{
		$nom=$image->getClientOriginalName(). '.' .$extension;
		
	}while(file_exists($chemin. '/' .$nom));
	
	/*if($image->move($chemin,$nom)){
		return view('ConfImage');
		
	}
	}
	return false;
	}
	
*/
public function save($image) {
    if ($image->isValid()){
	$chemin= config('images.path');
	$extension=$image->getClientOriginalExtension();
	
		$nom=$image->getClientOriginalName(). '.' .$extension;
		
	
	
	$image->move($chemin,$nom);
	}
	return $nom;
	}
}

