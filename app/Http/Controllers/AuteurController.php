<?php

namespace App\Http\Controllers;
use App\Http\Requests\AuteurRequest;
use Illuminate\Http\Request;
use App\Auteur;
use Illuminate\Support\Facades\Redirect;
class AuteurController extends Controller
{
    public function getForm (){
		return view('AuteurAdd');
	}
	public function addAuteur (AuteurRequest $req) {
		$auteur=new Auteur;
		$auteur->name=$req->input('name');
		$auteur->save();
		$msg='Auteur ajouter avex succse';
		return Redirect::to('auteurListe')->with('msg',$msg);
	}
	public function showAll(){
	   $auteurs= Auteur::get();
	 	return view('auteurListe',compact('auteurs'));
	}
	public function delete ($id) {
		$auteur=Auteur::find($id);
		$auteur->delete();
		$msg='Auteur supprimer avec succse';
		return Redirect::to('auteurListe')->with('msg',$msg);
	}
	public function update (Request $req,$id) {
		$auteur=Auteur::find($id);
		$auteur->name=$req->get('name');
		$auteur->update();
		$msg='Données a été modifier avec succée';
		return Redirect::to('auteurListe')->with('msg',$msg);
	}
	public function showId($id){
		$auteur=Auteur::findorFail($id);
	 	return view('auteurUpdate',compact('auteur'));
	}
}

	