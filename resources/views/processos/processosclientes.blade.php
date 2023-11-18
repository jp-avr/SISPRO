<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SISPRO') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        
        <nav class="navbar navbar-primary bg-primary navbar-expand-md navbar-primary bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                  SISPRO
                </a>

                
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Lado esquerdo da Navbar -->
                    <ul class="navbar-nav me-auto">
                      
                    </ul>

                    <!-- Lado Direito da Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Link de autenticação -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deslogar') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div style='text-align:right'>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="navbar-brand" href="{{ route('clientes.index') }}">
                    CLIENTES
                    </a>
                    <a class="navbar-brand" href="{{ route('processos.index') }}">
                    PROCESSOS
                    </a>
                    <a class="navbar-brand" href="{{ url('/home') }}">
                    INDEX
                    </a>
                </li>               
            </ul>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    <a class="navbar-brand">
                        Processos
                    </a>

                    &nbsp

                    <a class="navbar-brand" href="{{ route('processos.inserir') }}">
                        Cadastrar Processos
                    </a>

                </div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        {{-- Tudo que tá escrito aqui embaixo vai aparecer --}}
                    {{-- @foreach($processos as $processo)
                    {{ $processo->proc_judiciario_id }}
                    @endforeach --}}
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Processos</th>
                                <th style="width:5%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($processos_administrativos as $processo_administrativo)                               

                                <tr>
                                    <td><strong> {{ $processo_administrativo->proc_adm_id }} </strong></td>                                                                                            
                                    <td>
                                        <button style="border: 0; background: inherit;" data-toggle="modal" data-target="#staticBackdrop-{{$processo_administrativo->cliente_consulta_id}}">
                                            <i class="align-middle me-1" data-feather="layers"></i>
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td style="border: none;">Nenhum solicitação encontrado</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
