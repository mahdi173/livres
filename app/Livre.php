<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $table='livres';
	protected $primaryKey = 'idLive';
	public $timestamps = false;
	
	public function auteur() 
	{
		return $this->belongsTo('App\Auteur');  // cette fonction permet de trouver l'auteur auquel appartient le livre
	}
}
