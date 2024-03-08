@extends('layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-5">
            <form name="inserir" id="inserir" method="post" action="{{ route('questionarios.store', $cliente->cliente_id, $pos_operatorio) }}" autocomplete="off">
                @csrf
                {{-- @dd($pos_operatorio) --}}
                @include('cards.formulario')   

                <div>
                    <button type="submit" class="btn btn-primary mt-4">{{ __('Salvar') }}</button>
                </div>
            </form>
        </div>
    </main>
@endsection
