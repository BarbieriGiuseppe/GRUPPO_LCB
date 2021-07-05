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

Route::get('/', 'App\Http\Controllers\IndexController@index');

Route::get('/labdib', 'App\Http\Controllers\IndexController@labdib');

Route::get('/labpoli', 'App\Http\Controllers\IndexController@labpoli');

Route::get('/loginprivato', 'App\Http\Controllers\LoginController@loginprivato');

