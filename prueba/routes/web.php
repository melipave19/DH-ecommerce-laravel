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

Route::resource('productos', 'ProductosController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/miPrimeraRuta', function() {
  return "Creé mi primera ruta en Laravel";
});

Route::get('/esPar/{id}', function($id){
  if($id%2==0){
    return "El número es par.";
  }
  else {
    return "El número es impar.";
  }
});

Route::get('/suma/{num1}/{num2}/{num3?}', function($num1, $num2, $num3=0){
  $result = $num1+$num2+$num3;
  return "La suma de $num1, $num2, $num3 es $result";
});

Route::get('/peliculas', function() {
  $array = [
    "1" => ["Titanic",9],
    "2" => ["Mi villano favorito", 7]
  ];
  $vac = compact("array");
  return view('peliculas', $vac);
});

Route::get('/peliculas/{id}', function($id){
  $array = [
    "1" => ["Titanic",9],
    "2" => ["Mi villano favorito", 7]
  ];
  $vac = compact("id", "array");
  return view('detallePelicula', $vac);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
