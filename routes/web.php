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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/documentation', function () {
    return view('documentacao');
});

Route::get('/redes_exemplo', function () {
    return view('redes_exemplo');
});

Route::get('/graficos_gantt', function () {
    return view('graficos_gantt');
});

Route::get('/compartilhando', function () {
    return view('compartilhando');
});

Route::get('/login', 'SessionsController@create');

// Login and Logou Routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Auth::routes();

Route::get('/home', 'RedesPert@index')->name('home')->middleware('auth');
Route::get('/search', 'RedesPert@index');

Route::get('/profile', 'ProfileController@index')->middleware('auth');

Route::get('/redes', function () {
    return view('visualizar_redes');
});

Route::post('/storeRedePert', 'RedesPert@store')->middleware('auth');
Route::post('/storeProfile', 'ProfileController@store')->middleware('auth');
Route::post('/redes/storeComentario', 'ComentariosController@store')->middleware('auth');

Route::get('/redes/{id}', 'RedesPert@visualizarRede');
Route::get('/redes2/{id}', 'RedesPert@visualizarRede2');
Route::get('/download/{id}', 'RedesPert@downloadRede');
Route::get('/redes_pert', 'RedesPert@index2');