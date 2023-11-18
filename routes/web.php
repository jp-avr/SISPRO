<?php

use Illuminate\Support\Facades\Auth;
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
*/;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth'])->name('home');
    
    Route::prefix('clientes')->group(function () {
        Route::get('index', [\App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.index');
        Route::get('inserir/judiciario/', [\App\Http\Controllers\ClienteController::class, 'inserirJudiciario'])->name('clientes.inserir.judiciario');
        Route::get('inserir/administrativo/', [\App\Http\Controllers\ClienteController::class, 'inserirAdministrativo'])->name('clientes.inserir.administrativo');
        Route::post('store_administrativo', [\App\Http\Controllers\ClienteController::class, 'store_administrativo'])->name('clientes.store.administrativo');
        Route::post('store_judiciario', [\App\Http\Controllers\ClienteController::class, 'store_judiciario'])->name('clientes.store.judiciario');
    });

    Route::prefix('processos')->group(function () {
        Route::get('index', [\App\Http\Controllers\ProcessoController::class, 'index'])->name('processos.index');
        Route::get('inserir', [\App\Http\Controllers\ProcessoController::class, 'inserir'])->name('processos.inserir');
        Route::post('store', [\App\Http\Controllers\ProcessoController::class, 'store'])->name('processos.store');
    });    
});
