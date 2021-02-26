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

Route::get('/', function () {
    return view('index');
});
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
/*
Route::get('lista', function(){
    return view('lista');
})->name('lista');


Route::get('lista/{nombre?}', function ($nombre=null) {
    $productos=['pescado', 'citrus', 'verde' ];
    return view('lista', array('productos'=>$producto, 'nombre' => $nombre));
}) ->name('lista');*/