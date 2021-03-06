<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PedidosController;
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

/*Rutas en las cuales se manejan las redireciones entre paginas */

Route::get('/', function () {
    return view('welcome');
});
Route::get('/formularioDePedido', function(){
    return view('formPedido');
});
Route::get('/quienes', [App\Http\Controllers\NavegacionController::class, 'quienes']);
Route::get('/hacen', [App\Http\Controllers\NavegacionController::class, 'hacen']);
Route::get('/puntos', [App\Http\Controllers\NavegacionController::class, 'puntos']);
Route::get('/producto', [App\Http\Controllers\NavegacionController::class, 'producto']);
Route::get('/index', [App\Http\Controllers\NavegacionController::class, 'index']);
Route::post('/contactar', [App\Http\Controllers\ContactoController::class, 'contactar']);
Route::post('/pedido', [App\Http\Controllers\PedidosController::class, 'realizarPedido']);
/*
Route::get('lista', function(){
    return view('lista');
})->name('lista');
*/

//Rutas del Modal
Route::get('/pesado', function () {
    return view('pesado');
});

Route::get('/citrus', function () {
    return view('citrus');
});
Route::get('/verde', function () {
    return view('verde');
});
//Rutas para el formulario de los diferentes bolsones
Route::get('/pedir-pesado', function () {
    return view('pedir-pesado');
});
Route::get('/pedir-citrus', function () {
    return view('pedir-citrus');
});
Route::get('/pedir-verde', function () {
    return view('pedir-verde');
});
//Rutas del fomulario
Route::get('/formulario', function () {
    return view('formulario');
});
//Ruta de Administrador
Route::get('/admin', function () {
    return view('admin');
});
