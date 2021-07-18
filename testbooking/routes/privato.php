<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Privato\HomeController;
use App\Http\Controllers\Privato\TamponatoController;
use App\Http\Controllers\Privato\RiepilogoController;
use App\Http\Controllers\Privato\Controller;
use app\routes\web;
use App\Http\Controllers\Privato\PaymentController;


// Home
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/tamponato', 'HomeController@tamponato')->name('tamponato');
Route::get('/appuntamento', 'HomeController@appuntamento')->name('appuntamento');
Route::get('/riepilogo','HomeController@riepilogo')->name('riepilogo');

Route::get('/home', 'HomeController@mostraPrenotazioni');
Route::get('/click_delete/{id}','HomeController@cancellaPrenotazione');

Route::get('/modifica','ModificaController@modificaAnagrafica')->name('modifica');
Route::get('/aggiorna','ModificaController@updateAnagrafica');

Route::get('/downloadGuida','HomeController@downloadGuida')->name('downloadGuida');
Route::get('/downloadQuestionario','HomeController@downloadQuestionario')->name('downloadQuestionario');

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

Route::get('/appuntamento','TamponatoController@elencoLaboratori');
Route::get('/appuntamento/{codicelabpub}','TamponatoController@elencoTipologie');
Route::get('registerTamponato', 'TamponatoController@showTamponatoForm')->name('registerTamponato');
Route::post('registerTamponato', 'TamponatoController@registerTamponato');
Route::get('registerAppuntamento','AppuntamentoController@showAppuntamentoForm')->name('registerAppuntamento');
Route::post('registerAppuntamento','AppuntamentoController@registerAppuntamento');

Route::get('registerRiepilogo', 'RiepilogoController@showAggiornaForm')->name('registerRiepilogo');
Route::post('registerRiepilogo', 'RiepilogoController@registerRiepilogo');


Route::get('paypal/pay', 'PaymentController@payWithPayPal');
Route::get('paypal/status', 'PaymentController@payPalStatus');

Route::get('prezzi','RiepilogoController@prezzi');