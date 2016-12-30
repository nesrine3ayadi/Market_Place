<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Vendeur', function(Blueprint $table) {
			$table->foreign('boutique')->references('id')->on('Boutique')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Produit', function(Blueprint $table) {
			$table->foreign('categori')->references('id')->on('Categorie')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('Produit', function(Blueprint $table) {
			$table->foreign('evaluation')->references('id')->on('Evaluation')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Produit', function(Blueprint $table) {
			$table->foreign('boutique')->references('id')->on('Boutique')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Commande', function(Blueprint $table) {
			$table->foreign('Client')->references('id')->on('Client')
						->onDelete('no action')
						->onUpdate('restrict');
		});
		Schema::table('Commande', function(Blueprint $table) {
			$table->foreign('Livraison')->references('id')->on('Livraison')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Paiement', function(Blueprint $table) {
			$table->foreign('commande')->references('id')->on('Commande')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('Paiement', function(Blueprint $table) {
			$table->foreign('methode')->references('id')->on('methode_paiment')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('Evaluation', function(Blueprint $table) {
			$table->foreign('client')->references('id')->on('Client')
						->onDelete('no action')
						->onUpdate('cascade');
		});
		Schema::table('Boutique_livraison', function(Blueprint $table) {
			$table->foreign('id_livtaion')->references('id')->on('Livraison')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Boutique_livraison', function(Blueprint $table) {
			$table->foreign('id_boutique')->references('id')->on('Boutique')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Vendeur', function(Blueprint $table) {
			$table->dropForeign('Vendeur_boutique_foreign');
		});
		Schema::table('Produit', function(Blueprint $table) {
			$table->dropForeign('Produit_categori_foreign');
		});
		Schema::table('Produit', function(Blueprint $table) {
			$table->dropForeign('Produit_evaluation_foreign');
		});
		Schema::table('Produit', function(Blueprint $table) {
			$table->dropForeign('Produit_boutique_foreign');
		});
		Schema::table('Commande', function(Blueprint $table) {
			$table->dropForeign('Commande_Client_foreign');
		});
		Schema::table('Commande', function(Blueprint $table) {
			$table->dropForeign('Commande_Livraison_foreign');
		});
		Schema::table('Paiement', function(Blueprint $table) {
			$table->dropForeign('Paiement_commande_foreign');
		});
		Schema::table('Paiement', function(Blueprint $table) {
			$table->dropForeign('Paiement_methode_foreign');
		});
		Schema::table('Evaluation', function(Blueprint $table) {
			$table->dropForeign('Evaluation_client_foreign');
		});
		Schema::table('Boutique_livraison', function(Blueprint $table) {
			$table->dropForeign('Boutique_livraison_id_livtaion_foreign');
		});
		Schema::table('Boutique_livraison', function(Blueprint $table) {
			$table->dropForeign('Boutique_livraison_id_boutique_foreign');
		});
	}
}