<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoutiqueLivraisonTable extends Migration {

	public function up()
	{
		Schema::create('Boutique_livraison', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_livtaion')->unsigned();
			$table->integer('id_boutique')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Boutique_livraison');
	}
}