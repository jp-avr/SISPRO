<?php

use App\Http\Controllers\ProcessoController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/processos', [ProcessoController::class, 'index'])->name('processos.index')->middleware('auth');
Route::get('/processo/administrativo/inserir', [ProcessoController::class, 'inserir_administrativo'])->name('processo_administrativo.inserir')->middleware('auth');
Route::get('/processo/judiciario/inserir', [ProcessoController::class, 'inserir_judiciario'])->name('processo_judiciario.inserir')->middleware('auth');
Route::post('/processo/administrativo/store', [ProcessoController::class, 'store_administrativo'])->name('processo_administrativo.store')->middleware('auth');
Route::post('/processo/judiciario/store', [ProcessoController::class, 'store_judiciario'])->name('processo_judiciario.store')->middleware('auth');



Route::get('/clientes', 'ClienteController@index')->name('clientes')->middleware('auth');
