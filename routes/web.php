<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PedidosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

/*Rutas en las cuales se manejan las redireciones entre paginas */

Route::get('/', function () {
    return view('welcome');
});
Route::get('/formularioDePedido', function () {
    return view('formPedido');
});

//Rutas de Navegacion de la Página
Route::get('/quienes', [App\Http\Controllers\NavegacionController::class, 'quienes']);
Route::get('/hacen', [App\Http\Controllers\NavegacionController::class, 'hacen']);
Route::get('/puntos', [App\Http\Controllers\NavegacionController::class, 'puntos']);
Route::get('/producto', [App\Http\Controllers\NavegacionController::class, 'producto']);
Route::get('/bolson', [App\Http\Controllers\NavegacionController::class, 'bolson']);
Route::get('/index', [App\Http\Controllers\NavegacionController::class, 'index']);
Route::post('/contactar', [App\Http\Controllers\ContactoController::class, 'contactar']);
Route::post('/pedido', [App\Http\Controllers\PedidosController::class, 'realizarPedido']);

//Rutas del Modal
Route::get('/pesado', [App\Http\Controllers\NavegacionController::class, 'pesado']);
Route::get('/citrus', [App\Http\Controllers\NavegacionController::class, 'citrus']);
Route::get('/verde', [App\Http\Controllers\NavegacionController::class, 'verde']);

//Rutas para el formulario de los diferentes bolsones
Route::get('/pedir-pesado', [App\Http\Controllers\NavegacionController::class, 'pedirPesado']);
Route::get('/pedir-citrus', [App\Http\Controllers\NavegacionController::class, 'pedirCitrus']);
Route::get('/pedir-verde', [App\Http\Controllers\NavegacionController::class, 'pedirVerde']);
Route::get('/formPedido', [App\Http\Controllers\NavegacionController::class, 'formPedido']);
Route::get('pdf', [App\Http\Controllers\PdfController::class, 'generarPdf']);

//Rutas del fomulario
Route::get('/formulario', function () {
    return view('formulario');
});

//Ruta de Administrador
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);
Route::get('/lista-pedidos', [App\Http\Controllers\AdminController::class, 'listaPedidos']);
Route::get('/listarExistencias', [App\Http\Controllers\AdminController::class, 'listar']);
Route::get('/cantidad', [App\Http\Controllers\AdminController::class, 'cantidad']);
Route::get('/insertar', [App\Http\Controllers\AdminController::class, 'insertar']);
Route::get('/editar', [App\Http\Controllers\AdminController::class, 'editar']);
Route::get('/admin', [App\Http\Controllers\LoginController::class, 'loginAdmin']); // Login Ruta
Route::post('/log', [App\Http\Controllers\LoginController::class, 'loguear']); // Login Ruta
