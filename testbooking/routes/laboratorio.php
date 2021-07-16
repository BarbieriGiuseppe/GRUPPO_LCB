<?php

use Illuminate\Support\Facades\Route;
use App\Mail\CodicePrivatoMail;
use App\Http\Controllers\Laboratorio\PrezzoTamponiController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Laboratorio\Auth;

// Home
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/prezzotamponi', 'HomeController@prezzotamponi');
Route::get('/modifica', 'HomeController@modifica')->name('modifica');


Route::get('/home', 'HomeController@mostraPrenotazioni');
Route::get('/click_edit_privato/{id}', 'HomeController@modificaEsitoPrivato');
Route::get('/click_edit_paziente/{id}', 'HomeController@modificaEsitoPaziente');
Route::get('/click_edit_dipendente/{id}', 'HomeController@modificaEsitoDipendente');
Route::get('/update/{id}','HomeController@updateEsitoPrivato');
Route::get('/update/{id}','HomeController@updateEsitoPaziente');
Route::get('/update/{id}','HomeController@updateEsitoDipendente');

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


Route::get('/savePrezzoTampone', 'PrezzoTamponiController@showPrezzoTamponiForm')->name('savePrezzoTampone');
Route::post('/savePrezzoTampone', 'PrezzoTamponiController@registerPrezzoTampone');
