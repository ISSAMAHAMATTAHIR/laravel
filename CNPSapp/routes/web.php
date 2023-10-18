<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', 'App\Http\Controllers\Controlleraccueil@accueil');


Route::get('/creer', 'App\Http\Controllers\Controllercreer@afficher');
Route::post('/creer','App\Http\Controllers\Controllercreer@envoyer');


Route::get('/connexion', 'App\Http\Controllers\Controllerconnexion@afficher');
Route::post('/connexion', 'App\Http\Controllers\Controllerconnexion@traitement');

Route::get('/deconnexion', 'App\Http\Controllers\Controlleremploye@deconnexion');
Route::get('/employe', 'App\Http\Controllers\Controlleremploye@afficher');
Route::get('/employe', '\App\Http\Controllers\Controlleremploye@retour');

Route::get('/modifier', 'App\Http\Controllers\Controllermodifier@afficher');
Route::post('/modifier', 'App\Http\Controllers\Controllermodifier@modifier');

Route::get('/liste', '\App\Http\Controllers\Controllerliste@afficher');




Route::get('/ajouter', 'App\Http\Controllers\Controllerajouter@afficher');
Route::post('/ajouter', 'App\Http\Controllers\Controllerajouter@traiter');

Route::get('/banque', 'App\Http\Controllers\Controllerbanque@afficher');
Route::post('/banque', 'App\Http\Controllers\Controllerbanque@traiter');


Route::get('/update_employe/{id}', 'App\Http\Controllers\Controllerupdate@afficher');
Route::post('/update_employe', 'App\Http\Controllers\Controllerupdate@traiter');


Route::get('/delete_employe/{id}', 'App\Http\Controllers\Controllerupdate@delete');
