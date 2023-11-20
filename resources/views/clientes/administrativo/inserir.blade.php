@extends('layouts.app', ['title' => __('Solicitação Administrativa')])

@section('content')
    <main class="content">
        <div class="container-fluid p-5">
            <form method="post" action="#" autocomplete="off">
                @csrf
                <div class="row">
                    @include('cards.cliente')          

                    @include('cards.solicitacoes.administrativo')
        

                    <div>
                        <button type="submit" class="btn btn-success mt-4">{{ __('Salvar') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
