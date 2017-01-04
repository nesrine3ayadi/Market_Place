<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::resource('client', 'ClientController');
Route::resource('vendeur', 'VendeurController');
Route::resource('produit', 'ProduitController');
Route::resource('categorie', 'CategorieController');
Route::resource('boutique', 'BoutiqueController');
Route::resource('commande', 'CommandeController');
Route::resource('paiement', 'PaiementController');
Route::resource('livraison', 'LivraisonController');
Route::resource('evaluation', 'EvaluationController');
Route::resource('methode_paiment', 'Methode_paimentController');
Route::resource('boutique_livraison', 'Boutique_livraisonController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/boutique/produits/{id}','ProduitController@liste_par_boutique');
Route::get('/categorie/produits/{id}','ProduitController@liste_par_categorie');
Route::post('/commande/produits/{id}','CommandeController@ajout_panier')->name('ajouter');
Route::post('/search','ProduitController@search')->name('search');
Route::get('/inscrire','InscrireController@inscrire')->name('inscrire');


