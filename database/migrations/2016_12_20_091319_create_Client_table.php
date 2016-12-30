<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientTable extends Migration {

	public function up()
	{
		Schema::create('Client', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('adresse', 50);
			$table->integer('code_postal');
			$table->enum('sexe', array('Homme', 'Femme'));
			$table->string('ville', 50);
			$table->string('mail');
		});
	}

	public function down()
	{
		Schema::drop('Client');
	}
}