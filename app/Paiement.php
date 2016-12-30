<?php

namespace Paiement;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model {

	protected $table = 'Paiement';
	public $timestamps = true;

	public function lier()
	{
		return $this->belongsTo('Commande');
	}

	public function contient()
	{
		return $this->hasOne('Methode_paiment', 'id');
	}

}