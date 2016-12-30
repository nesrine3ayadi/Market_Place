<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommandeTable extends Migration {

	public function up()
	{
		Schema::create('Commande', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->enum('type', array('panier', 'commande', 'valide'));
			$table->integer('Client')->unsigned();
			$table->integer('Livraison')->unsigned();
			$table->float('tva', 3,3);
			$table->float('total', 3,3);
			$table->float('remise', 3,3);
		});
	}

	public function down()
	{
		Schema::drop('Commande');
	}
}