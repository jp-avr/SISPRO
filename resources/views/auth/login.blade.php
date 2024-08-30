@extends('layouts.app')

@section('content')
<style>
    .login-container {
        background-color: #ffffff; /* Fundo branco */
        border: 1px solid #dee2e6; /* Borda cinza clara */
        border-radius: 10px; /* Bordas arredondadas */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
        padding: 2rem;
        max-width: 600px; /* Aumentar a largura do contêiner */
        margin-top: 3rem;
    }
    .login-logo {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 2rem; /* Aumentar a margem inferior */
    }
    .login-logo span {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 2.5rem; /* Aumentar o tamanho da fonte */
        color: #343a40; /* Preto */
    }
    .login-header {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        color: #343a40; /* Preto */
        text-align: center;
        margin-bottom: 1.5rem; /* Aumentar a margem inferior */
    }
    .login-description {
        font-family: 'Poppins', sans-serif;
        color: #6c757d; /* Cinza */
        text-align: center;
        margin-bottom: 2.5rem; /* Aumentar a margem inferior */
    }
    .form-label {
        font-weight: bold;
        color: #343a40; /* Preto */
    }
    .form-control {
        border: 1px solid #dee2e6; /* Borda cinza clara */
    }
    .form-control:focus {
        box-shadow: none;
        border-color: #343a40; /* Preto */
    }
    .btn-primary {
        background-color: #343a40; /* Preto */
        border: none;
    }
    .btn-primary:hover {
        background-color: #495057; /* Preto escuro */
    }
    .input-group-text {
        background-color: #ffffff; /* Branco */
        border: 1px solid #dee2e6; /* Borda cinza clara */
    }
    .alert-danger {
        font-family: 'Poppins', sans-serif;
    }
</style>

@if ($errors->any())
    <div class="alert alert-danger m-3">
        Erro! :(
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="d-flex justify-content-center">
    <div class="login-container">
        <div class="login-logo">
            <span>SISPRO</span>
        </div>

        <h1 class="login-header">Entre na sua conta</h1>
        <p class="login-description">Bem-vindo(a) de volta! Se você já tem uma conta, utilize suas credenciais para acessar o sistema.</p>

        <form method="POST" action="{{ route('login') }}" autocomplete="off">
            @csrf
            <div class="d-flex flex-column gap-3">
                <div>
                    <label class="form-label">Email</label>
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">
                                <i data-feather="user"></i>
                            </span>
                        </div>
                        <input id="email" placeholder="Digite o seu Email" class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                        
                </div>
                
                <div>
                    <label class="form-label">Senha</label>
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">
                                <i data-feather="lock"></i>
                            </span>
                        </div>
                        <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Digite a sua senha" required autocomplete="current-password" />
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
    
                <div class="d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            Lembrar-se de mim
                        </label>
                    </div>
                </div>
    
                <button type="submit" class="btn btn-primary">
                    Entrar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection