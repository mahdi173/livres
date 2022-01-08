<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\http\Requests\LivreRequest;
use App\http\Requests\ContactRequest;
use App\Auteur;
use App\Livre;
use App\Gestion\PhotoGestion;
use Illuminate\Support\Facades\Redirect;

class LivreController extends Controller
{  
	/*public function index($n){
	return view('Vue1')->with('num',$n);
}*/
public function home(){
	return view ('home');
	
}
/*public function contact (){
		return view('Contact');
}
public function addContact (ContactRequest $req){
		return view('Confirmation');
}

public function add(LivreRequest $req){
	return 'le nom est '.$req->input('name');
}
public function index2(){
	return view('Addlivre');

}*/

 public function getForm (){
	  $auteurs = Auteur::all();
		return view('Addlivre',compact('auteurs')); // pour envoyer tous les auteurs
	}
	public function addLivre (LivreRequest $req,PhotoGestion $pg) {
		$livre=new Livre;
		$img=$req->file('image');
		$imageNom=$pg->save($img);
		$livre->auteur_id=$req->input('auteur_id');
		$livre->titre=$req->input('titre');
	   $livre->prix=$req->input('prix');
		$livre->image=$req->input('image',$imageNom);
		$livre->save(); 

		$msg='Livre ajouter avec succès';
		return Redirect::to('livreListe')->with('msg',$msg);
	}

	
	public function showAll(){
		$chemin= config('images.path');
	   $livres= Livre::get();
	 	return view('livreListe',compact('livres','chemin'));
	}
	public function delete ($idLive) {
		$livre=Livre::find($idLive);
		$livre->delete();
		$msg='livre supprimer avec succès';
		return Redirect::to('livreListe')->with('msg',$msg);
	}
	public function update (Request $req,PhotoGestion $pg,$idLive) {
		$livre=Livre::find($idLive);
          $img=$req->file('image');
		  		if ($img){
		$imageNom=$pg->save($img);
		$livre->image=$req->input('image',$imageNom);
				}
		$livre->auteur_id=$req->input('auteur_id');
		if ($req->input('titre')){
		$livre->titre=$req->input('titre');
		}
		if ($req->input('prix')){
	   $livre->prix=$req->input('prix');
		}
		$livre->update();
		$msg='Données ont été modifier avec succès';
		return Redirect::to('livreListe')->with('msg',$msg);
	}
	public function showId($idLive){
		 $auteurs = Auteur::all();
		$livre=Livre::findorFail($idLive);
	 	return view('livreUpdate',compact('livre','auteurs'));
	}

/*public function add(Request $req){
	return 'le nom est '.$req->input('name'); // normale
} */
}