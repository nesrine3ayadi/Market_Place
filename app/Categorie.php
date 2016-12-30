<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model {

	protected $table = 'Categorie';
	public $timestamps = true;
	protected $fillable = array('nom');

	public function CatProd()
	{
		return $this->hasMany('Produit', 'id');
	}
}