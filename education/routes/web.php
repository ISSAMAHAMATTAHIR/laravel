<?php

use Illuminate\Support\Facades\Route;
//namespace App\Http\Controllers;

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


Route::get('', '\App\Http\Controllers\Controlleraccueil@accueil');

Route::get('/creer', '\App\Http\Controllers\Controllercreer@afficher');
Route::post('/creer','\App\Http\Controllers\Controllercreer@envoyer');



Route::get('/connecter', '\App\Http\Controllers\Controllerconnecter@afficher');
Route::post('/connecter', '\App\Http\Controllers\Controllerconnecter@traitement');


Route::get('/compte', '\App\Http\Controllers\Controllercompte@compte');
Route::post('/compte', '\App\Http\Controllers\Controllercompte@envoyer');

Route::get('/liste', '\App\Http\Controllers\Controllerliste@afficher');


Route::get('/niveau', '\App\Http\Controllers\Controllermail@afficher');
