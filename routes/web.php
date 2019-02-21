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
    return redirect('home');
});
/*
Route::get('/documentacion', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/documentacion', 'MyController@documentacion');
Route::get('/example', 'MyController@example');
Route::get('/Usuarios', 'MyController@index');
Route::get('/pruebas', 'PruebaController@store');

//Route::resource('$Pruebas', '$PruebaController');

Route::resource('pruebas', 'PruebaController');