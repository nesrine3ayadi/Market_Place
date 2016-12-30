<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	protected $table = 'Client';
	public $timestamps = true;

    protected $fillable = ['Nom','Prenom','adresse','code_postal','sexe','ville','mail'];

	public function peut()
	{
		return $this->hasMany('Evaluation', 'id');
	}

}