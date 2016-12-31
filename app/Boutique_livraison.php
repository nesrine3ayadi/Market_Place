<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boutique_livraison extends Model {

	protected $table = 'Boutique_livraison';
	public $timestamps = true;
    protected $fillable=['id_livtation','id_boutique'];
	public function a()
	{
		return $this->hasOne('Livraison', 'id');
	}

	public function appartenir()
	{
		return $this->belongsToMany('Boutique', 'id');
	}

}