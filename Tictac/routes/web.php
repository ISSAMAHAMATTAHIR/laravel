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

Route::get('/home', '\App\Http\Controllers\Controllerhome@afficher');

Route::get('/creer', '\App\Http\Controllers\Controllercreer@afficher');
Route::post('/creer','\App\Http\Controllers\Controllercreer@envoyer');

Route::get('', '\App\Http\Controllers\Controllerconnecter@afficher');
Route::post('', '\App\Http\Controllers\Controllerconnecter@traitement');

Route::get('/deconnexion', 'App\Http\Controllers\Controllerconnecter@afficher');

Route::get('/users', 'App\Http\Controllers\ControllerUser@afficher');

Route::get('/amis', 'App\Http\Controllers\ControllerAmis@afficher');

Route::get('/message', 'App\Http\Controllers\ControllerSms@afficher');

Route::get('/photo', 'App\Http\Controllers\Controllerphoto@afficher');

Route::get('/video', 'App\Http\Controllers\ControllerVideo@afficher');

Route::get('/musique', 'App\Http\Controllers\ControllerMusique@afficher');
