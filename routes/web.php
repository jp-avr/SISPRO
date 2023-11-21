<?php

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

Route::get('/processos', 'ProcessoController@index')->name('processos')->middleware('auth');
Route::get('/processo/administrativo', 'ProcessoAdministrativoController@inserir')->name('processo.adm.inserir')->middleware('auth');
Route::get('/processo/administrativo/index', 'ProcessoAdministrativoController@index')->name('processo.adm.index')->middleware('auth');
Route::post('/processo/administrativo', 'ProcessoAdministrativoController@store')->name('processo.adm.store')->middleware('auth');


Route::get('/clientes', 'ClienteController@index')->name('clientes')->middleware('auth');
