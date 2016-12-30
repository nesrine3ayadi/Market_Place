<?php

namespace Evaluation;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model {

	protected $table = 'Evaluation';
	public $timestamps = true;
	protected $fillable = array('commentaire', 'evaluation');

	public function ProdEval()
	{
		return $this->belongsTo('Produit', 'evaluation');
	}

	public function donner()
	{
		return $this->hasOne('Client', 'id');
	}

}