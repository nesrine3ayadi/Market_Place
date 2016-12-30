<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livraison extends Model {

	protected $table = 'Livraison';
	public $timestamps = true;
	protected $fillable=['nom','tarif'];

}