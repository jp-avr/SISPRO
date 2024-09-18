@extends('adminlte::page')

@section('content')
    <main class="content">
        <div class="container-fluid p-5">
            <form name="inserir" id="inserir" method="post" action="{{ route('processo.update', $processo->processo_id) }}" autocomplete="off">
                @csrf
                <div class="row">
                    @include('cards.processo')
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">{{ __('Salvar') }}</button>
                </div>
            </form>
        </div>
    </main>
@endsection
