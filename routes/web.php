<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', function () {return view('layouts.welcome');})->name('hello');
Route::get('/home', function () {return view('home');})->middleware('auth');
Route::get('/', 'IndexController@index');


Route::get('/home','IndexController@index')->name('index');

Route::get('deconnexion','UserController@deconnexion')->name('deconnexion');

Route::get('detailproduit/{id}','ProduitController@detailproduit')->name('detailproduit');
/******************************gestion de la cart*****************************************/
Route::get('addtocart/{id}','ProduitController@Addtocart')->name('addtocart');
// route for cart
//Route::get('cart','ProduitController@cart');
Route::post('/panier/ajouter/{id}','cartcontroller@panier');
Route::get('/deletepanier/{id}','cartController@delete')->name('deletepanier');
Route::get('/allpanier','cartController@allpanier')->name('allpanier');
Route::get('/addcmd/{total}','cartController@addcmd')->name('addcmd');
/**********************************les taches accessible par l'administrateur************************************************ */
/********************************gestion des utlisateurs **********************************/
Route::get('/home','HomeController@index')->name('home')->middleware('auth');
Route::post('/addustlisateur','UserController@add')->name('adduser')->middleware('auth');
Route::get('/deleteutlisateur/{id}','UserController@delete')->name('deleteuser')->middleware('auth');
Route::get('/toadmin/{id}','UserController@toadmin')->name('toadmin')->middleware('auth');
Route::get('/togerant/{id}','UserController@togerant')->name('togerant')->middleware('auth');
Route::get('/searchuser','UserController@search')->name('searchuser')->middleware('auth');

/********************************gestion des categories **********************************/
Route::get('/categories','CategorieController@index')->name('categories')->middleware('auth');
Route::get('/deletecategorie/{id}','CategorieController@delete')->name('deletecategorie')->middleware('auth');
Route::post('/updatecategorie/{id}','CategorieController@update')->name('updatecategorie')->middleware('auth');
Route::post('/addcategorie','CategorieController@add')->name('addcategorie')->middleware(['admin','auth']);
Route::get('/detailcategorie/{id}','CategorieController@detail')->name('detailcategorie')->middleware('auth');

/**************************** gestion produits******************/
Route::get('/products','ProduitController@index')->name('products')->middleware('auth');
Route::get('/deleteproduit/{id}','ProduitController@delete')->name('deleteproduit')->middleware('auth');
Route::post('/updateproduit/{id}','ProduitController@update')->name('updateproduit')->middleware('auth');
Route::post('/addproduit','ProduitController@add')->name('addproduit')->middleware('auth');
Route::post('/searchproduit','ProduitController@search')->name('searchproduit');
///php artisan db:seed --class=UserSeeder