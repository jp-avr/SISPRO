@extends('adminlte::page')

@section('title', 'Resultado do Questionário')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            @if (session('sucesso'))
                <div class="alert alert-success">
                    <p>{{ session('sucesso') }}</p>
                </div>
            @endif

            <h1 class="h3 mb-3"><i class="align-middle me-1" data-feather="clipboard" style="width:2%;height:2%"></i> <strong>Informações</strong> do Processo</h1>

            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card shadow">
                                <div class="card-header bg-dark text-white">
                                    <h3 class="mb-0"><i class="align-middle me-1" data-feather="list"></i> Ficha</h3>
                                </div>
                                <div class="card-body">
                                    <p><strong>Número do Processo:</strong> {{ $processo->proc_numero_proc }}</p>
                                    <p><strong>Data de início da doença:</strong> {{ $processo->proc_data_ini_doenca }}</p>
                                    <p><strong>Data de início da incapacidade:</strong> {{ $processo->proc_data_ini_incapacidade }}</p>
                                    <p><strong>Parte Atingida:</strong> {{ $processo->parte_atingida->parte_atingida_descricao }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow">
                                <div class="card-body">
                                    <p><strong>Resultado:</strong> {{ $processo->proc_resultado }}</p>
                                    <p><strong>História:</strong> {{ $processo->proc_historia }}</p>
                                    <p><strong>Considerações:</strong> {{ $processo->proc_consideracoes }}</p>
                                    <p><strong>Atividade:</strong>
                                        @if($processo->proc_ativo == 0)
                                            Não ativo
                                        @else
                                            Ativo
                                        @endif
                                    </p>
                                    <p><strong>Notificação feita em:</strong> {{ $processo->created_at->format('d/m/Y') }}</p>
                                </div>
                                <div class="card-footer text-right">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-resposta-{{ $processo->getKey() }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Novo questionário</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="h4 mb-3 mt-4">Questionários</h2>
            <div class="row">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Número do questionário</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Informações</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($questionarios as $questionario)
                                        <tr>
                                            <td>{{ $questionario->questionario_id }}</td>
                                            <td>{{ date_format(date_create($questionario->created_at), 'd/m/Y') }}</td>
                                            <td>
                                                <a href="{{ route('questionario.resultado', $questionario->questionario_id) }}">
                                                    <i class="align-middle me-1 fas fa-expand"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('questionarios.destroy', $questionario->questionario_id) }}" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i> Excluir
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">Nenhum questionário encontrado</td>
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

    @include('processos.modal_resposta_info_processos')

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