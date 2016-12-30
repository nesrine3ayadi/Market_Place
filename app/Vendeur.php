<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vendeur extends Model {

	protected $table = 'Vendeur';
	public $timestamps = true;
	protected $fillable = ['nom', 'prenom', 'sexe', 'adresse', 'code_postale', 'ville', 'pays', 'tel','mail','num_CIN_vendeur','boutique'];

	public function VendBout()
	{
		return $this->hasOne('Boutique', 'boutique');
	}

	public static function getEnumValues($table, $column)
{
 $type = DB::select( DB::raw("SHOW COLUMNS FROM $table WHERE Field = '$column'") )[0]->Type;
 preg_match('/^enum\((.*)\)$/', $type, $matches);
 $enum = array();
 foreach( explode(',', $matches[1]) as $value )
 {
   $v = trim( $value, "'" );
   $enum = array_add($enum, $v, $v);
 }
 return $enum;
}

}