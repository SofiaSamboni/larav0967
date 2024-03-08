<?php

use App\Http\Controllers\GatoController;
use App\Http\Controllers\PrimoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TallerController;
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

Route::get('/frmTaller',[TallerController::class,'formularioTaller']);
Route::post('/frmTaller',[TallerController::class,'tallerStore'])->name('tallerStore');

Route::get('/frmprimo',[PrimoController::class,'formularioPrimo']);