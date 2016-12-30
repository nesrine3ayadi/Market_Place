<?php

namespace methode_paiment;

use Illuminate\Database\Eloquent\Model;

class Methode_paiment extends Model {

	protected $table = 'methode_paiment';
	public $timestamps = true;

	public function utiliser()
	{
		return $this->belongsToMany('Paiement', 'id');
	}

}