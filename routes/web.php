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


Route::get('lista/{nombre?}', function ($nombre=null) {
    $productos=['pescado', 'citrus', 'verde' ];
    return view('lista', array('productos'=>$producto, 'nombre' => $nombre));
}) ->name('lista');*/