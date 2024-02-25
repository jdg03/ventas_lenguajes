<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Route::get('/',[ProductoController::class,'inicio'])->name('inicio');

Route::get ('/ventas/crearProducto',[ProductoController::class,'crearProducto'])->name('crear.producto');
Route::post('/ventas/guardarProducto',[ProductoController::class,'guardarProducto'])->name('guardar.producto');

Route::get('/ventas/verVentas',[ProductoController::class, 'verVentas'])->name('ver.ventas');
Route::get('/ventas/Productos',[ProductoController::class, 'verProductos'])->name('ver.productos');

Route::get('/ventas/realizarVenta',[ProductoController::class, 'realizarVenta'])->name('realizar.venta');
Route::post('/ventas/guardarVenta',[ProductoController::class, 'guardarVenta'])->name('guardar.venta');