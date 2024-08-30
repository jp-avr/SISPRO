@extends('adminlte::page')

@section('title', 'Listagem de Clientes')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        @if (session('sucesso'))
            <div class="alert alert-success">
                <p>{{ session('sucesso') }}</p>
            </div>
        @endif

        <h1 class="h3 mb-3 text-secondary"><i class="fas fa-user"></i> <strong>Listagem de Clientes</strong></h1>

        <div class="row mb-3">
            <div class="col-12">
                <input type="text" id="search" class="form-control" placeholder="Filtrar Clientes...">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg mb-4">
                    <div class="card-header bg-dark text-white">
                        <h3 class="mb-0"><i class="fas fa-users"></i> Clientes</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="clientes-table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Data de Nascimento</th>
                                    <th scope="col">Informações</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($clientes as $cliente)
                                    @include('processos.modal_cliente')
                                    @include('processos.modal_resposta')
                                    <tr>
                                        <td class="text-left text-muted">{{ $cliente->cliente_nome }}</td>
                                        <td class="text-left">{{ date('d/m/Y', strtotime($cliente->cliente_data_nascimento)) }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('clientes.processos', $cliente->cliente_id) }}" class="btn btn-info btn-sm">
                                                <i class="fas fa-clipboard"></i> Ver Processos
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            @can('update-cliente')
                                            <a href="{{ route('cliente.edit', $cliente->cliente_id) }}" class="btn btn-success btn-sm">
                                                <i class="fas fa-pen"></i> Editar
                                            </a>
                                            @endcan

                                            @can('excluir-cliente')
                                            <a href="{{ route('cliente.destroy', $cliente->cliente_id) }}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Excluir
                                            </a>   
                                            @endcan
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">Nenhuma solicitação encontrada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-3 bg-light">
                        <nav class="d-flex justify-content-end" aria-label="Paginação">
                            {{ $clientes->links() }}
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
        console.log('Clientes loaded');

        document.getElementById('search').addEventListener('keyup', function() {
            var value = this.value.toLowerCase();
            var rows = document.querySelectorAll('#clientes-table tbody tr');

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