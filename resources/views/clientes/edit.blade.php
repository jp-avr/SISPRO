@extends('adminlte::page')

@section('content')
    <main class="content">
        <div class="container-fluid p-5">
            <form name="inserir" id="inserir" method="post" action="{{ route('cliente.update', $cliente->cliente_id) }}" autocomplete="off">
                @csrf
                <div class="row">
                    @include('cards.cliente')   
                           
                </div>
                    
                <div>
                    <button type="submit" class="btn btn-success mt-4">{{ __('Salvar') }}</button>
                </div>
            </form>
        </div>
    </main>
@endsection
