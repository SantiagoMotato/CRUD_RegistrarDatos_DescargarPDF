<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;

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
Route::get('/fuck', [RegistroController::class, 'index'])->name('registrarse');
Route::post('/fuck', [RegistroController::class, 'store']);

Route::get('/muro', [RedireccionController::class, 'index'])->name('redireccion.index');

Route::get('/mostrarDatos', [RegistroController::class, 'mostrarDatos'])->name('mostrarDatos');

Route::get('/users/{id}/update', [RegistroController::class, 'actualizar'])->name('usuario.actualizarDatos');
Route::put('/users/{id}/update', [RegistroController::class, 'actualizarDatos'])->name('usuario.actualidarDatos');

Route::delete('/users/{id}', [RegistroController::class, 'eliminarUsuario'])->name('usuario.eliminarUsuario');

Route::get('/user/formatoPDF/{id}',[RegistroController::class, 'formatoPDF'])->name('usuario.formatoPDF');

/* Route::put('/actualizarDatos', [RegistroController::class, 'actualizarDatos'])->name('actualizarDatos'); */

