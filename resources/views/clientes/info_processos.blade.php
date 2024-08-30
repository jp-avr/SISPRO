@extends('adminlte::page')

@section('title', 'Informações do Cliente')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            @if (session('sucesso'))
                <div class="alert alert-success">
                    <p>{{ session('sucesso') }}</p>
                </div>
            @endif

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
                            <p><strong>Notificação feita em:</strong> {{ $cliente->created_at->format('d/m/Y') }} por Alguém</p>
                        </div>
                        <div class="card-footer text-right">
                            <a data-bs-toggle="modal" data-bs-target="#staticBackdrop-processo-{{ $cliente->getKey() }}"class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Novo processo</a>
                        </div>
                    </div>
                </div>
            </div>
            @include('processos.modal_resposta_tipo_processo')

            <h2 class="h4 mb-3 mt-4">Processos</h2>
            <div class="row">
                <div class="col-12">
                    <div class="card shadow">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Número do Processo</th>
                                        <th scope="col">Visualizar</th>
                                        <th scope="col">Questionário</th>
                                        <th scope="col">Tipo de Processo</th>
                                        <th scope="col">Atividade</th>
                                        <th scope="col">Resultado</th>
                                        <th scope="col"><i class="fas fa-calendar-alt"></i> Data de criação</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($processos as $processo)
                                    <tr>
                                        <td>{{ $processo->proc_numero_proc }}</td>
                                        <td>
                                            <a href="{{ route('processos.questionarios', $processo->processo_id) }}">
                                                <i class="fas fa-eye text-primary"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop-resposta-{{ $processo->getKey() }}">
                                                <i class="fas fa-clipboard text-primary"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <span class="@switch($processo->tipo_processo_id) @case(1) badge bg-warning @break @case(2) badge bg-primary @break @endswitch">
                                                @if($processo->tipo_processo_id == 1)
                                                Administrativo
                                                @else
                                                Judiciário
                                                @endif
                                            </span>
                                        </td>
                                        <td>
                                            <span class="@switch($processo->proc_ativo) @case(0) badge bg-secondary @break @case(1) badge bg-success @break @endswitch">
                                                @if($processo->proc_ativo == 0)
                                                Não ativo
                                                @else
                                                Ativo
                                                @endif
                                            </span>
                                        </td>
                                        <td>{{ $processo->proc_resultado }}</td>
                                        <td>{{ $processo->created_at->format('d/m/Y') }}</td>
                                        <td class="text-right">
                                            <a href="#" title="Editar monitoramento">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @include('processos.modal_resposta_info_processos')
                                    @empty
                                    <tr>
                                        <td colspan="8">Nenhum processo encontrado</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer py-4">
                            <nav class="d-flex justify-content-end" aria-label="...">
                                {{-- {{ $processos->links() }} --}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/adminkit.js')}}"></script>
    </main>



@endsection

@section('css')
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
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
@endsection

@section('js')
    <script>
        console.log('Dashboard loaded');
    </script>
@endsection