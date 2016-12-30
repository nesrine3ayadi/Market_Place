<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoutiqueTable extends Migration {

	public function up()
	{
		Schema::create('Boutique', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			$table->string('adresse');
			$table->string('description');
			$table->string('mail');
		});
	}

	public function down()
	{
		Schema::drop('Boutique');
	}
}