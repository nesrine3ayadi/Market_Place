<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMethodePaimentTable extends Migration {

	public function up()
	{
		Schema::create('methode_paiment', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('methode_paiment');
	}
}