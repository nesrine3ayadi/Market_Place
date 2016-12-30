<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model {

	protected $table = 'Produit';
	public $timestamps = true;
	protected $fillable = array('nom','description', 'prix', 'quantite', 'categori', 'image', 'evaluation');

	public function ProdCat()
	{
		return $this->belongsTo('Categorie', 'id');
	}

	public function appartenir()
	{
		return $this->belongsToMany('Commande', 'id');
	}

	public function appartient()
	{
		return $this->belongsTo('Boutique');
	}

}