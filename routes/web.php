<?php

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
//Rutas del nav
Route::get('/quienes', function () {
    return view('quienes');
});
Route::get('/hacen', function () {
    return view('hacen');
});
Route::get('/puntos', function () {
    return view('puntos');
});
Route::get('/producto', function () {
    return view('producto');
});
Route::get('/index', function () {
    return view('index');
});

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
//Ruta de Administrador
Route::get('/admin', function () {
    return view('admin');
});
