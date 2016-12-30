<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaiementTable extends Migration {

	public function up()
	{
		Schema::create('Paiement', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('num_transaction');
			$table->integer('commande')->unsigned();
			$table->integer('methode')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Paiement');
	}
}