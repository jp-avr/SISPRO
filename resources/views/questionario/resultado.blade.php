@extends('adminlte::page')

@section('title', 'Resultado do Questionário')

@section('content')
<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-dark">
                <h3 class="card-title tamanho">Porcentagem</h3>
            </div>
            <div class="card-body">
                <strong class="tamanho">{{ $questionario->questionario_porcentagem }}%</strong>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-dark">
                <h3 class="card-title tamanho">Resultado</h3>
            </div>
            <div class="card-body">
                <strong class="tamanho">{{ $questionario->questionario_resultado }}</strong>
            </div>
        </div>
    </div>
</div>

    <div class="card">
        <div class="card-header bg-dark text-white">
            <h1>Resultado do Questionário</h1>
        </div>

        <div class="card-body">
            @for ($i = 1; $i <= 10; $i++)
                @php
                    $secaoKey = 'secao_' . $i;
                @endphp
                <div class="secao mb-4">
                    <h3 class="text-secondary">{{ $questions['secao_' . $i] }}</h3>
                    <p class="text-dark">{{ $answers['secao_'.$i] }}</p>
                </div>
{{--                 @if(!$loop->last)
                    <hr>
                @endif --}}
            @endfor
        </div>
    </div>
@stop

@section('css')
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        .tamanho{
            font-size: 20px;
        }
        .card {
            border: none;
            border-radius: 0.75rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #343a40;
            color: white;
            font-weight: bold;
        }
        .card-body {
            background-color: #ffffff;
        }
        .card-body p {
            margin-bottom: 0.5rem;
        }
        .card-body h3 {
            color: #6c757d;
        }
        .card-footer {
            background-color: #e9ecef;
        }
        .mt-4 {
            margin-top: 1.5rem;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Dashboard loaded');
    </script>
@stop