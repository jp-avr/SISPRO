<?php

use App\Http\Controllers\ClienteController;
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

// Auth::routes();

// Route::get('/processos', [ProcessoController::class, 'index'])->name('processos.index')->middleware('auth');
// Route::get('/processo/administrativo/inserir', [ProcessoController::class, 'inserir_administrativo'])->name('processo_administrativo.inserir')->middleware('auth');
// Route::get('/processo/judiciario/inserir', [ProcessoController::class, 'inserir_judiciario'])->name('processo_judiciario.inserir')->middleware('auth');
// Route::post('/processo/administrativo/store', [ProcessoController::class, 'store_administrativo'])->name('processo_administrativo.store')->middleware('auth');
// Route::post('/processo/judiciario/store', [ProcessoController::class, 'store_judiciario'])->name('processo_judiciario.store')->middleware('auth');

///ROTAS AUTH
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('/email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('/email/resend', 'Auth\VerificationController@resend')->name('verification.resend');    


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::prefix('processos')->group(function (){
        Route::get('/index', 'ProcessoController@index')->name('processos.index');
        Route::get('/informacoes/{processo}', 'ProcessoController@questionario')->name('processos.questionarios');
        Route::get('/show/{processo}', 'ProcessoController@show')->name('processo.show');
        Route::get('/inserir/administrativo', 'ProcessoController@inserir_administrativo')->name('processo_administrativo.inserir');
        Route::get('/inserir/judiciario', 'ProcessoController@inserir_judiciario')->name('processo_judiciario.inserir');
        Route::post('/store/administrativo', 'ProcessoController@store_administrativo')->name('processo_administrativo.store');
        Route::post('/store/judiciario', 'ProcessoController@store_judiciario')->name('processo_judiciario.store');
        Route::get('/edit/{processo}', 'ProcessoController@edit')->name('processo.edit');
        Route::get('/update/{processo}', 'ProcessoController@update')->name('processo.update');
        Route::get('/destroy/{processo}', 'ProcessoController@destroy')->name('processo.destroy');
    });

    Route::prefix('questionarios')->group(function (){
        Route::get('/{questionario}/resultado', 'QuestionarioController@resultado')->name('questionario.resultado');
        Route::get('/{processo}/inserir', 'QuestionarioController@inserir')->name('questionarios.inserir');
        Route::post('/{processo}/{pos}/store', 'QuestionarioController@store')->name('questionarios.store');
        Route::post('/{questionario}/edit', 'QuestionarioController@edit')->name('questionarios.edit');
        route::post('/{questionario}/update', 'QuestionarioController@update')->name('questionarios.update');
        Route::get('/destroy/{questionario}', 'QuestionarioController@destroy')->name('questionarios.destroy');
    });

    Route::prefix('clientes')->group(function (){
        Route::group(['middleware' => ['can:ver-lista-de-clientes']], function(){
            Route::get('/index', 'ClienteController@index')->name('clientes.index');
            Route::get('/processos/{cliente}', 'ClienteController@processos')->name('clientes.processos');
            Route::get('/show/{cliente}', 'ClienteController@show')->name('cliente.show');
        });

        Route::group(['middleware' => ['can:ver-formulario-de-processo']], function(){
            Route::get('/{cliente}/Novo Processo/', 'ProcessoController@store_novo_processo_administrativo')->name('cliente.novo.processo.Adm'); ///ROTA PARA STORE DO PROCESSO, DIRECIONADA PARA O CONTROLLER DE PROCESSOS
            Route::get('/{cliente}/Novo Processo/', 'ProcessoController@store_novo_processo_judiciario')->name('cliente.novo.processo.Jdc'); ///ROTA PARA STORE DO PROCESSO, DIRECIONADA PARA O CONTROLLER DE PROCESSOS
            Route::get('/inserir', 'ClienteController@inserir')->name('cliente.inserir');
            Route::post('/store', 'ClienteController@store')->name('cliente.store');
            Route::get('/edit/{cliente}', 'ClienteController@edit')->name('cliente.edit');
            Route::post('/update/{cliente}', 'ClienteController@update')->name('cliente.update');
        });

        Route::group(['middleware' => ['can:excluir-cliente']], function(){
            Route::get('/index', 'ClienteController@index')->name('clientes.index');
            Route::get('/processos/{cliente}', 'ClienteController@processos')->name('clientes.processos');
            Route::get('/destroy/{cliente}', 'ClienteController@destroy')->name('cliente.destroy');
        });
    });

    Route::group(['middleware' => ['can:criar-usuario']], function(){
        Route::prefix('auth')->group(function(){
            Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
            Route::post('/register', 'Auth\RegisterController@register');
        });
    });
});
