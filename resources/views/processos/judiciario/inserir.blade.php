@extends('adminlte::page')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><i class="fas fa-clipboard"></i> <strong>Informações</strong> do Cliente</h1>

            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-header bg-dark text-white">
                            <h3 class="mb-0">Ficha</h3>
                        </div>
                        <div class="card-body">
                            @php
                                $date = new DateTime($cliente->cliente_data_nascimento);
                                $interval = $date->diff(new DateTime(date('Y-m-d')));
                                $idade = $interval->format('%Y');
                            @endphp
                            <p><strong>Cliente:</strong> {{ $cliente->cliente_nome }} ({{ $idade }} anos)</p>
                            <p><strong>Ocupação:</strong> {{ $cliente->profissao->profissao_descricao }}</p>
                            <p><strong>CBO:</strong> {{ $cliente->cbo }}</p>
                            <p><strong>CPF:</strong> {{ $cliente->cliente_cpf }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <p><strong>RG:</strong> {{ $cliente->cliente_rg }}</p>
                            <p><strong>Data de Nascimento:</strong> {{ date_format(date_create($cliente->cliente_data_nascimento), 'd/m/Y') }}</p>
                            <p><strong>Telefone:</strong> {{ $cliente->cliente_telefone }}</p>
                            <p><strong>Sexo:</strong>
                                @if($cliente->cliente_sexo == 0)
                                    Ignorado
                                @elseif($cliente->cliente_sexo == 1)
                                    Masculino
                                @else
                                    Feminino
                                @endif
                            </p>
                            <p><strong>Notificação feita em:</strong> {{ $cliente->created_at->format('d/m/Y') }}</p>
                        </div>
                        <div class="card-footer text-right">

                        </div>
                    </div>
                </div>
            </div>

        <div class="container-fluid p-5">
            <form name="inserir" id="inserir" method="post" action="{{ route('processo_judiciario.store', $cliente->cliente_id) }}" autocomplete="off">
                @csrf
                <div class="row">
                    @include('cards.processo')
                </div>
            </form>
        </div>
    </main>
@endsection
