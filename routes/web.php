<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gastosController;
use App\Http\Controllers\detallesController;

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
/* 
Route::get('/',[\App\Http\controllers\controlador1::class,'index']);
Route::get('/nuevaRuta',[\App\Http\controllers\controlador1::class,'index2']); */

Route::resource('/gastos',gastosController::class);

Route::get('/gastos/{id}/confirmar',[\App\Http\controllers\gastosController::class,'confirmId']);
Route::get('/gastos/{id}/detalles/create',[\App\Http\controllers\detallesController::class,'create']);
Route::post('/gastos/{id}/detalles',[\App\Http\controllers\detallesController::class,'store']);
Route::get('/detalles/{id}/confirmDet',[\App\Http\controllers\detallesController::class,'confirmIdDet']);
Route::resource('/detalles',detallesController::class);
//Route::get('/gastos/{id}/detalles',[\App\Http\controllers\detallesController::class,'edit']);
//Route::get('/gastos/{id}/detalles/confirmar',[\App\Http\controllers\detallesController::class,'confirmIdDet']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
