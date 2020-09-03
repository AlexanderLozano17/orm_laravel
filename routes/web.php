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

use App\Articulo;
use App\Calificaciones;
use App\Cliente;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente/{id}/articulo', function ($id) {

    return Cliente::findOrFail($id)->articulo;

});

Route::get('/articulo/{id}/cliente', function ($id) {

    return Articulo::findOrFail($id)->cliente;

});

Route::get('/articulos/{id}', function ($id) {

    // $articulos = Cliente::findOrFail($id)->articulos->where('pais_origen', 'Colombia');
    $articulos = Cliente::findOrFail($id)->articulos;
    
    foreach ($articulos as $articulo) {
        echo $articulo->nombre_articulo . "<br/>";
    }
});

Route::get('/cliente/{id}/perfil', function ($id) {

    $cliente = Cliente::findOrFail($id)->perfils;

    foreach ($cliente as $perfil) {
        return $perfil->nombre;
    }
});

Route::get('/calificacion/{id}', function ($id) {

    $cliente = Cliente::findOrFail($id);

    foreach ($cliente->Calificaciones as $calificacion) {
        echo $calificacion->calificacion . "<br/>";
    }
});

Route::get('/cliente/{id}/articulos', function ($id) {

    $pedidos = Cliente::findOrFail($id);

    foreach ($pedidos->articulosCliente as $pedido) {
        echo $pedido->id . "<br/>";
    }
});