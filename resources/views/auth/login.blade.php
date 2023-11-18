@extends('layouts.app', ['title' => __('SISCOP')])

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger m-3">Erro! :(
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



        <div class="d-flex justify-content-center">
            <div class="col-4">
                <div class="d-flex align-content-center gap-3 mb-5 mt-5">
                    <img src="{{url('img/CASPD.svg')}}" style="height: 2rem;" alt="">
                    <span style="font-family: 'Poppins'; font-weight: 600; font-size: 28px;" class="text-primary">SISPRO</span>
                </div>
    
                <h1 style="font-family: 'Poppins', sans-serif; font-weight: 600;" class="text-dark">Entre na sua conta.</h1>
                <p>Bem vindo(a) de volta! Se você já tem uma conta, utilize suas credenciais para acessar o sistema.</p>
    
                <form method="POST" action="{{ route('login') }}" autocomplete="off">
                    @csrf
                    <div class="d-flex flex-column gap-3">
                        <div>
                            <label class="form-label font-weight-bold">Email</label>
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
                            <label class="form-label font-weight-bold">Senha</label>
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
                            <div>
                            </div>
                        </div>
            
                        <button type="submit" class="btn btn-primary">
                            Entrar
                        </button>
                    </div>
                </form>
                <hr>
            </div>
        </div>


    
@endsection
