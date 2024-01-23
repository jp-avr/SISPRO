@extends('layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-5">
            <form name="inserir" id="inserir" method="post" action="{{ route('processo_administrativo.store') }}" autocomplete="off">
                @csrf
                <div class="row">
                    @include('cards.cliente')          
                </div>
                <div class="row">
                    @include('cards.processo')
                </div>
                    
                <div>
                    <button type="submit" class="btn btn-success mt-4">{{ __('Salvar') }}</button>
                </div>
            </form>
        </div>
    </main>
@endsection
