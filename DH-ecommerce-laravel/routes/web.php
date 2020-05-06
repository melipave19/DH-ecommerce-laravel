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
Route::post('/inicio', function () {
    Auth::logout();
    return view('inicio');
});

// Productos
Route::get('/productos', 'EquipoController@listadoEquipos');
Route::get('/detalle/{idProducto}', 'EquipoController@mostrarEquipo');

// Perfil
Route::get('/perfil', function () {
    return view('perfil');
});

// Agregar equipo
Route::get('/productos/agregar', 'EquipoController@cargarFormulario');
Route::post('/productos/agregar', 'EquipoController@agregarEquipo');

// Listado equipos para modificar
Route::get('/productos/actualizar', 'EquipoController@listadoEquiposActualizar');

// Modificar equipo
Route::get('/productos/actualizar/{idEquipo}', 'EquipoController@actualizarEquipo');
Route::post('/productos/actualizar/{idEquipo}', 'EquipoController@modificarEquipo');

//
// Eliminar equipo
Route::post('/productos/darBaja/{id}', 'EquipoController@darBajaEquipo');
Route::post('/productos/darAlta/{id}', 'EquipoController@darAltaEquipo');

// Carrito de compras
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
