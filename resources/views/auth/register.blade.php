@extends('adminlte::page')

@section('content')
<style>
    .container {
        padding-top: 6rem;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($usuario) ? __('Editar usuário') : __('Criar Usuário') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ isset($usuario) ? route('update', $usuario->user_id) : route('register') }}">
                        @csrf

                        @if(isset($usuario))
                            @method('PUT')
                        @endif

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Digite o nome do usuário" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $usuario->name ?? '') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Digite o email do usuário" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $usuario->email ?? '') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Função') }}</label>

                            <div class="col-md-6">
                                <select class="form-control @error('role') is-invalid @enderror" name="role">
                                    <option value="" selected disabled>Selecione a função</option>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" 
                                        @if (old('role', isset($usuario) ? $usuario->roles->first()->id ?? '' : '') == $role->id) 
                                            selected 
                                        @endif
                                    >
                                        {{ $role->name }}
                                    </option>

                                    @endforeach
                                </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="{{ isset($usuario) ? 'Digite uma nova senha se desejar alterar' : 'Digite a senha do usuário' }}" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmação de Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="{{ isset($usuario) ? 'Confirme a nova senha se alterou' : 'Confirme a senha do usuário' }}" class="form-control @error('password') is-invalid @enderror" name="password_confirmation"  autocomplete="new-password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ isset($usuario) ? __('Atualizar') : __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
