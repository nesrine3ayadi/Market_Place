<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boutique extends Model {

	protected $table = 'Boutique';
	public $timestamps = true;
	protected $fillable = array('nom', 'adresse', 'description','mail','webSite');

}
?>