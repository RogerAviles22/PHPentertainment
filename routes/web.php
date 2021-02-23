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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/inicio', [PagesController::class, 'home'])->middleware(['auth'])->name('home');
Route::get('/detalle/{id}', [PagesController::class, 'detalle'])->middleware(['auth'])->name('entretenimiento.detalle');

Route::get('/editar/{id}', [PagesController::class, 'editar'])->middleware(['auth'])->name('entretenimiento.editar');
Route::put('/editar/{id}', [PagesController::class, 'update'])->name('entretenimiento.update');
Route::delete('/eliminar/{id}', [PagesController::class, 'eliminar'])->name('entretenimiento.eliminar');

Route::get('/registro', [PagesController::class, 'registro'])->middleware(['auth'])->name('registro');
Route::post('/registro', [PagesController::class, 'crear'])->name('entretenimiento.crear');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
