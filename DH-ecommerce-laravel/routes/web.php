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
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/productos', 'EquipoController@listadoEquipos');

Route::get('/detalle', function () {
    return view('detalleProductos');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/agregar', 'EquipoController@cargarFormulario');

Route::post('/agregar', 'EquipoController@agregarEquipo');

Route::get('/carrito', function () {
    return view('carrito');
});




/*
Route::get('/listado', function () {
    return view('listadoProductos');
});
*/


Auth::routes();

Route::get('/registro', function () {
    return view('registro-sesion');
});

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
