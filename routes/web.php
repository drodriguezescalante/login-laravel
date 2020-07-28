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

Route::view('/','home')->name('home');

Route::view('/home','home')->name('home');

Route::view('/contact','contact')->name('contact');

Route::get('/disclaimer','DisclaimerController@index')->name('DisclaimerController');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect')->name('SocialController');

Route::get('/callback/{provider}', 'SocialController@callback')->name('SocialController@callback');

Route::resource('disclaimer','DisclaimerController');

Route::post('contact','MessageController@store');