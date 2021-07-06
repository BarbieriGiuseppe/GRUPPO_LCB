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

/*
Route che identifica l'utente
*/
Route::get('users/user/{id}','UserController@showUsers');
Route::get('users/create','UserController@createPrivatoUser');
Route::post('users/create','UserController@savePrivatoUser')->name('createuser');


/*

Route dell'index
*/
Route::get('/', 'App\Http\Controllers\IndexController@index');

Route::get('/labdib', 'App\Http\Controllers\IndexController@labdib');

Route::get('/labpoli', 'App\Http\Controllers\IndexController@labpoli');

/*

Route dei login
*/
Route::get('/loginprivato', 'App\Http\Controllers\LoginController@loginprivato');

Route::get('/loginlab', 'App\Http\Controllers\LoginController@loginlab');

Route::get('/loginasl', 'App\Http\Controllers\LoginController@loginasl');

Route::get('/loginmedico', 'App\Http\Controllers\LoginController@loginmedico');

Route::get('/loginazienda', 'App\Http\Controllers\LoginController@loginazienda');


/*

Route delle registrazioni
*/
Route::get('/registrazioneprivato', 'App\Http\Controllers\RegistrazioneController@registrazioneprivato');

Route::get('/convenzionalab', 'App\Http\Controllers\RegistrazioneController@convenzionalab');

Route::get('/registrazionemedico', 'App\Http\Controllers\RegistrazioneController@registrazionemedico');

Route::get('/registrazioneazienda', 'App\Http\Controllers\RegistrazioneController@registrazioneazienda');

/*

Route delle aree riservate
*/

Route::get('/aziendasanitariaindex', 'App\Http\Controllers\AreaRiservataController@aziendasanitariaindex');

Route::get('/laboratorioindex', 'App\Http\Controllers\AreaRiservataController@laboratorioindex');

Route::get('/laboratoriomodifica', 'App\Http\Controllers\AreaRiservataController@laboratoriomodifica');

Route::get('/datorelavoroindex', 'App\Http\Controllers\AreaRiservataController@datorelavoroindex');

Route::get('/datorelavoromodifica', 'App\Http\Controllers\AreaRiservataController@datorelavoromodifica');

Route::get('/datorelavoroprenotazione', 'App\Http\Controllers\AreaRiservataController@datorelavoroprenotazione');

Route::get('/medicocuranteindex', 'App\Http\Controllers\AreaRiservataController@medicocuranteindex');

Route::get('/medicocurantemodifica', 'App\Http\Controllers\AreaRiservataController@medicocurantemodifica');

Route::get('/medicocuranteprenotazione', 'App\Http\Controllers\AreaRiservataController@medicocuranteprenotazione');

Route::get('/privatoindex', 'App\Http\Controllers\AreaRiservataController@privatoindex');

Route::get('/privatomodifica', 'App\Http\Controllers\AreaRiservataController@privatomodifica');

Route::get('/privatoprenotazione', 'App\Http\Controllers\AreaRiservataController@privatoprenotazione');

/*
Route::post(')


*/ 