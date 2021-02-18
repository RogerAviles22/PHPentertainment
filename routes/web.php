<?php

use App\Http\Controllers\PagesController;
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
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/detalle/{id}', [PagesController::class, 'detalle'])->name('entretenimiento.detalle');

Route::get('/editar/{id}', [PagesController::class, 'editar'])->name('entretenimiento.editar');
Route::put('/editar/{id}', [PagesController::class, 'update'])->name('entretenimiento.update');
Route::delete('/eliminar/{id}', [PagesController::class, 'eliminar'])->name('entretenimiento.eliminar');

Route::get('/register', [PagesController::class, 'registro'])->name('registro');
Route::post('/register', [PagesController::class, 'crear'])->name('entretenimiento.crear');