@extends('adminlte::page')

@section('content')
    <main class="content">
        <div class="container-fluid p-5">
            <form name="inserir" id="inserir" method="post" action="{{ isset($cliente) ? route('cliente.processo_judiciario.store', ['cliente' => $cliente->cliente_id]) : route('processo_judiciario.store') }}" autocomplete="off">
                @csrf
                @if(isset($cliente))
                    <div class="row">
                        @include('cards.processo')
                    </div>
                @else
                    <div class="row">
                        @include('cards.cliente')          
                    </div>
                    <div class="row">
                        @include('cards.processo')
                    </div>
                @endif
            </form>
        </div>
    </main>
@endsection
