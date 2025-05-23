<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\RutasController;

use App\Http\Controllers\UsuarioController;

Route::get('/usuario/{id}', [UsuarioController::class, 'verUsuario'])->name('ver.usuario');
Route::get('/mi-perfil', [UsuarioController::class, 'miPerfil'])->name('mi.perfil');

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
    return redirect()->route('login');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




// Ruta catch-all para cualquier URL no existente
Route::fallback(function () {
    return redirect()->route('login');
});