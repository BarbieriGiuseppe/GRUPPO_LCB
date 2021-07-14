<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Privato\HomeController;
use App\Http\Controllers\Privato\PrenotazioneController;
use app\routes\web;


// Home
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/prenotazione', 'HomeController@prenotazione')->name('prenotazione');
Route::get('/preventivo', 'HomeController@preventivo')->name('preventivo');
//Route::get('/modifica', 'HomeController@modifica')->name('modifica');
Route::get('/home', 'HomeController@mostraPrenotazioni');
Route::get('/click_delete/{id}','HomeController@cancellaPrenotazione');

Route::get('/modifica','HomeController@Profilo');
Route::get('/modifica','HomeController@mostraProfilo');
Route::get('/click_edit/{id}','HomeController@modificaAnagrafica');
Route::post('/update/{id}','HomeController@updateAnagrafica');


// Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Register
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Reset Password
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Confirm Password
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Verify Email
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/preventivo','PrenotazioneController@elencoLaboratori');
Route::get('/preventivo/{codicelabpub}','PrenotazioneController@elencoTipologie');
Route::get('registerTamponato', 'PrenotazioneController@showTamponatoForm')->name('registerTamponato');
Route::post('registerTamponato', 'PrenotazioneController@registerTamponato');
