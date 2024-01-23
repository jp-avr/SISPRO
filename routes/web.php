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
Route::get('/processo/inserir', [ProcessoController::class, 'inserir'])->name('processo.inserir')->middleware('auth');
// Route::get('/processo/administrativo/index', [ProcessoController::class, 'index'])->name('processo.index')->middleware('auth');
Route::post('/processo/store', [ProcessoController::class, 'store'])->name('processo.store')->middleware('auth');


Route::get('/clientes', 'ClienteController@index')->name('clientes')->middleware('auth');
