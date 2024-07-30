@extends('adminlte::page')

@section('title', 'Seleção de Processos')

@section('content')
<main class="content min-vh-100">
    <div class="container-fluid p-0">
        @if (session('sucesso'))
            <div class="alert alert-success">
                <p>{{ session('sucesso') }}</p>
            </div>
        @endif

        <h1 class="h3 mb-3 text-secondary"><i class="fas fa-file-alt"></i> <strong>Selecione o Processo</strong> para Visualizar</h1>

        <div class="row mb-3">
            <div class="col-12">
                <input type="text" id="search" class="form-control" placeholder="Filtrar Processos...">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg mb-4">
                    <div class="card-header bg-dark text-white">
                        <h3 class="mb-0"><i class="fas fa-clipboard-list"></i> Processos</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="processos-table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Número do Processo</th>
                                    <th scope="col">Tipo de Processo</th>
                                    <th scope="col"><i class="fas fa-calendar-alt"></i> Data</th>
                                    <th scope="col">Informações</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($processos as $processo)
                                    {{-- @include('processos.modal') --}}
                                    <tr>
                                        <td class="text-left text-muted">{{ $processo->cliente->cliente_nome }}</td>
                                        <td class="text-left">{{ $processo->proc_numero_proc }}</td>
                                        <td>
                                            @if($processo->tipo_processo_id === 1)
                                                Administrativo
                                            @elseif($processo->tipo_processo_id === 2)
                                                Judiciário
                                            @endif
                                        </td>
                                        <td>{{ date('d/m/Y', strtotime($processo->created_at)) }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('processos.questionarios', $processo->processo_id) }}" class="btn btn-info btn-sm">
                                                <i class="fas fa-clipboard"></i> Ver Informações
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('cliente.edit', $processo->cliente->cliente_id) }}" class="btn btn-success btn-sm">
                                                <i class="fas fa-pen"></i> Editar
                                            </a>
                                            <a href="{{ route('cliente.destroy', $processo->cliente->cliente_id) }}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Excluir
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">Nenhuma solicitação encontrada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-3 bg-light">
                        <nav class="d-flex justify-content-end" aria-label="Paginação">
                            {{-- @if ($solicitacoes != null)
                                {{ $solicitacoes->appends($_GET)->links() }}
                            @endif --}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #343a40;
            color: white;
            font-weight: bold;
        }
        .card-footer {
            background-color: #f1f1f1;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table th {
            background-color: #f1f1f1;
            color: #333333;
            font-weight: bold;
        }
        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
        }
        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
@endsection

@section('js')
    <script>
        console.log('Processos loaded');

        document.getElementById('search').addEventListener('keyup', function() {
            var value = this.value.toLowerCase();
            var rows = document.querySelectorAll('#processos-table tbody tr');

            rows.forEach(function(row) {
                var showRow = false;
                row.querySelectorAll('td').forEach(function(cell) {
                    if (cell.textContent.toLowerCase().includes(value)) {
                        showRow = true;
                    }
                });
                row.style.display = showRow ? '' : 'none';
            });
        });
    </script>
@endsection