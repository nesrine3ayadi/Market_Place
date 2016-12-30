<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model {

	protected $table = 'Commande';
	public $timestamps = true;
	protected $fillable = array('type');

	public function commander()
	{
		return $this->belongsTo('Client', 'id');
	}

	public function livrer()
	{
		return $this->hasOne('Livraison', 'id');
	}

	public function contenir()
	{
		return $this->hasMany('Produit', 'id');
	}

}