<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVendeurTable extends Migration {

	public function up()
	{
		Schema::create('Vendeur', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			$table->string('prenom');
			$table->enum('sexe', array('Homme', 'Femme'));
			$table->string('adresse');
			$table->integer('code_postale');
			$table->string('ville');
			$table->enum('pays', array('AFAfghanistan', 'ZAAfriqueduSud', 'ALAlbanie', 'DZAlgérie', 'DEAllemagne', 'ADAndorre', 'AOAngola', 'AIAnguilla', 'AQAntarctique', 'AGAntigua-et-Barbuda', 'ANAntillesnéerlandaises', 'SAArabiesaoudite', 'ARArgentine', 'AMArménie', 'AWAruba', 'AUAustralie', 'ATAutriche', 'AZAzerbaïdjan'));
			$table->integer('tel');
			$table->string('mail');
			$table->integer('boutique')->unsigned();
			$table->integer('num_CIN_vendeur');
		});
	}

	public function down()
	{
		Schema::drop('Vendeur');
	}
}