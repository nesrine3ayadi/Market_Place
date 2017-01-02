<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Methode_paiment extends Model {

	protected $table = 'methode_paiment';
	public $timestamps = true;
    protected $fillable=['nom','taxe'];

	public function utiliser()
	{
		return $this->belongsToMany('Paiement', 'id');
	}

}