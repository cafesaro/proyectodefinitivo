<?php

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

Route::get('/', function () {
    return view('proyecto');
});
Route::get('/carlos', function () {
    return view('proyecto');
});

Route::get('/recibe', 'ControladorPrueba@formStore');
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminsController@index');
Route::resource('dibujo', 'controladordibujo');
Route::get('/tables', 'controladordibujo@index');
Route::get('/dibujo', 'controladordibujo@index');
Route::get('/show', 'controladordibujo@show');
