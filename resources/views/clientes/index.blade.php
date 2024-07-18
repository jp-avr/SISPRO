@extends('adminlte::page')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        @if (session('sucesso'))
        <div class="alert alert-success">
            <p>{{ session('sucesso') }}</p>
        </div>
        @endif



        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3"></div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-5">
                                <h3 class="mb-0 poppins-regular18"><i class="align-middle me-1" data-feather="user" style="width:4%;height:4%">
                                    </i> Listagem de Clientes:
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">

                    </div>

                    <div class="table-responsive table-hover">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light poppins-regular15">
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
                                    <td class="text-left poppins-regular15" style="vertical-align: top;color: #666666;">{{ $cliente->cliente_nome }}</td>
                                    <td class="text-left poppins-regular15">
                                        {{ $cliente->cliente_data_nascimento }}
                                    </td>
                                    <td style="vertical-align: top;">
                                        <a href="{{ route('clientes.processos', $cliente->cliente_id) }}">
                                            <i class="fas fa-fw fa-clipboard"></i>
                                        </a>    
                                    </td>
                                    <td style="vertical-align: top;" class="table-action text-left poppins-regular15 last-cell">
                                        <a href="{{ route('cliente.edit', $cliente->cliente_id) }}" class="btn btn-sm btn-success"><i class="align-middle fas fa-fw fa-pen" data-feather="edit"></i></a>
                                        <a href="{{ route('cliente.destroy', $cliente->cliente_id) }}" class="btn btn-sm btn-danger"><i class="align-middle fas fa-fw fa-trash" data-feather="trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Nenhum solicitação encontrado</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $clientes->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection