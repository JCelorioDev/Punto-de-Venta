<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaVentasController;

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

Route::get('Ventas',[SistemaVentasController::class,'Index']);
Route::post('Ventas/Registrar',[SistemaVentasController::class,'Guardar']);
Route::get('VentasEdicion{Id}',[SistemaVentasController::class,'PagEdicion']);
Route::post('VentasEdicion-update{Id}',[SistemaVentasController::class,'Update']);