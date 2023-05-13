<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\PresentacionController;


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
    $titulo = 'Parcial 2 DAW';
    $intro = 'PARCIAL #2 DESARROLLO DE APLICACIONES WEB';
    $nombreJ = '$nombre = Josue Naum Dominguez Velasquez';
    $carnetJ = '$carnet = 077722';
    $nombreK = '$nombre = Kevin Armando Lemus Alas';
    $carnetK = '$carnet = 170622';
    $grupo = '$grupo = TDSV11-C';
    return view('Parcial_2/presentacion', compact('titulo','intro','nombreJ','carnetJ','nombreK','carnetK', 'grupo'));
})->name('presentacion');

/*Route::get('/', function () {


    return view('layouts/app');
});*/

Route::resource('clientes', ClienteController::class);
Route::resource('articulos', ArticuloController::class);
Route::resource('pedidos', PedidoController::class);
Route::resource('detalle_pedidos', DetallePedidoController::class);



