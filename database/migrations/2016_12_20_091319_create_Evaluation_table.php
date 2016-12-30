<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvaluationTable extends Migration {

	public function up()
	{
		Schema::create('Evaluation', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('commentaire');
			$table->enum('evaluation', array('1', '2', '3', '4', '5'));
			$table->integer('client')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Evaluation');
	}
}