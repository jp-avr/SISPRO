@extends('adminlte::page')

@section('content')
    <main class="content">
        <div class="container-fluid p-5">
            <form name="inserir" id="inserir" method="post" action="{{ route('processo_judiciario.store') }}" autocomplete="off">
                @csrf
                <div class="row">
                    @include('cards.cliente')          
                </div>
                <div class="row">
                    @include('cards.processo')
                </div>
            </form>
        </div>
    </main>
@endsection
