<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\http\Requests\PhotoRequest;
use App\Gestion\PhotoGestion;

class PhotoController extends Controller
{
    public function photo () {
		return view('Image');
		
	}
	public function addPhoto (PhotoRequest $req) {
		return view('confirmation');
		
	}
	
	/*public function save(PhotoRequest $req) {
$image= $req->file('fichier');
if ($image->isValid()){
	$chemin= config('images.path');
	$extension=$image->getClientOriginalExtension();
	//dd($chemin);
	do{
		$nom=$image->getClientOriginalName(). '.' .$extension;
   }while (file_exists($chemin. '/' .$nom));
	if($image->move($chemin,$nom)){
		return view('ConfImage');
		}
	}
	return redirect ('Image')->with ('error','Désolé mais votre image ne peut pas étre envoyée!');
	}*/
	
	public function PhotoSave(PhotoRequest $req,PhotoGestion $pg) {
		$img=$req->file('fichier');
		if ($pg->save($img)){
		return view('ConfImage');
		}
		return redirect ('Image')->with ('error','Désolé mais votre image ne peut pas étre envoyée!');
	}
}
