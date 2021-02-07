<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\EditorialesController;
use App\Http\Controllers\LibrosController;

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

Route::get('/', [InicioController::class,'inicio']); //Ruta /

Route::get('editor/registro', [EditorialesController::class,'registro_editor'])->name('formulario_editorial');
Route::post('editor/registro', [EditorialesController::class, 'mensaje_editor'])->name('registro_Editorial');

Route::get('editor/listar', [EditorialesController::class,'listar'])->name('listaEditorial');

Route::get('editor/actualizar/{id}', [EditorialesController::class, 'formulario'])->name('formulario_edi');
Route::post('editor/actualizar/{id}', [EditorialesController::class, 'actualizar'])->name('actualizar_edi');

Route::get('libros/listlibros', [LibrosController::class,'listarLibro']);