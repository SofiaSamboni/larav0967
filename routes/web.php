<?php

use App\Http\Controllers\GatoController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/frmproducto',[ProductController::class,'formularioProducto']);
Route::post('/frmproducto',[ProductController::class,'productoStore'])->name('product.store');


Route::get('/frmgato',[GatoController::class,'formularioGato']);
Route::post('/frmgato',[GatoController::class,'productoStore'])->name('gato.store');