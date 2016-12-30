<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitTable extends Migration {

	public function up()
	{
		Schema::create('Produit', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			$table->string('description');
			$table->float('prix', 3,2);
			$table->integer('quantite');
			$table->integer('categori')->unsigned();
			$table->string('image');
			$table->integer('evaluation')->unsigned();
			$table->integer('boutique')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Produit');
	}
}