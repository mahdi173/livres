<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    protected $table='auteurs';
	public $timestamps = false;
	
	public function livres() 
	{
		return $this->hasMany('App\Livre');  // cette fonction permet de trouver les livres de l'auteur
	}
}
