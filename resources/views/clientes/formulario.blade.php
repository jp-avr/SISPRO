@extends('layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-5">
            <form name="inserir" id="inserir" method="post" action="{{ route('questionarios.inserir', $cliente->cliente_id) }}" autocomplete="off">
                @csrf

                    @include('cards.formulario')   
                           

                    
                <div>
                    <button type="submit" class="btn btn-success mt-4">{{ __('Salvar') }}</button>
                </div>
            </form>
        </div>
    </main>
@endsection
