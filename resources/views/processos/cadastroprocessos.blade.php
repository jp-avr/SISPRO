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
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @extends('layouts.app')

@section('content')
<main class="content">
    <div class="container">
        <form method="post" action="{{ route('processos.store')}}" autocomplete="off">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="navbar-brand" href="{{ route('clientes.index') }}">
                                Listagem de Processos
                            </a>
                            &nbsp
                            <a class="navbar-brand">
                                Cadastrar Processos
                            </a>
                        </div>                

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-md-5">
                                    <label class="form-label">Nº do Processo</label>
                                    <input id="numero_processo" type="text" maxlength="14" class="form-control  @error('proc_judiciarios_numero_proc') is-invalid @enderror" placeholder="Digite o nome do Requerente" value="{{old('proc_judiciarios_numero_proc')}}" name="proc_judiciarios_numero_proc">
                                    @error('proc_judiciarios_numero_proc')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>


                                <div class="col-md-5">
                                    <label class="form-label">Médico</label>
                                    <input id="proc_judiciarios_nome_perito" type="text" maxlength="150" class="form-control  @error('proc_judiciarios_nome_perito') is-invalid @enderror" placeholder="Nome do médico" value="{{old('proc_judiciarios_nome_perito')}}" name="proc_judiciarios_nome_perito">
                                    @error('proc_judiciarios_nome_perito')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-5">
                                    <label class="form-label">CID10</label>
                                    <input id="cid_id" type="text" maxlength="14" class="form-control  @error('cid_id') is-invalid @enderror" placeholder="Digite o CID" value="{{old('cid_id')}}" name="cid_id">
                                    @error('cid_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-5">
                                    <label class="form-label">Data Inicial dos Sintomas</label>
                                    <input id="rg" type="date" maxlength="14" class="form-control  @error('proc_judiciarios_data_ini_doenca') is-invalid @enderror" value="{{old('proc_judiciarios_data_ini_doenca')}}" name="proc_judiciarios_data_ini_doenca">
                                    @error('proc_judiciarios_data_ini_doenca')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-5">
                                    <label class="form-label">Parte do corpo atingida</label>
                                    <input id="proc_judiciarios_parte_atingida" type="text" maxlength="100" class="form-control  @error('proc_judiciarios_parte_atingida') is-invalid @enderror" placeholder="Digite a parte atingida" value="{{old('proc_judiciarios_parte_atingida')}}" name="proc_judiciarios_parte_atingida">
                                    @error('proc_judiciarios_parte_atingida')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-5">
                                    <label class="form-label">Considerações</label>
                                    <textarea id="proc_judiciarios_consideracoes" type="text" maxlength="500" class="form-control  @error('proc_judiciarios_consideracoes') is-invalid @enderror" placeholder="Suas Considerações" value="{{old('proc_judiciarios_consideracoes')}}" name="proc_judiciarios_consideracoes"></textarea>
                                    @error('proc_judiciarios_consideracoes')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div> 

                                <div class="col-md-5">
                                    <label class="form-label" >Anexar documentação <input class="form-control" type="file" multiple="multiple" name="doc_proc_judiciarios_documento"></label>  
                                </div>                             
                                
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-5">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Salvar') }}
                                        </button>
                                    </div>
                                </div>                     
                            </div>
                        </div>
                    </div>                  
                </div>        
            </div>
        </div>
    </form>
</main>
@endsection
</body>
</html>
