@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4"> <!-- Adicionando margem superior -->
        <main class="py-4">

        </main>

        <div class="col-md-12">
            <div class="table-responsive mt-3">
                <table style="border-top: none" class="table table-hover align-items-center white-background-table">
                    <thead class="thead-light"> 
                        <tr>
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="background-color: #6c7ae0; border-radius: 10px 0 0 0px; color: #fff" class="text-center poppins-regular18">Cliente</th>
                                    <th scope="col" style="background-color: #6c7ae0; color: #fff" class="text-left poppins-regular18">Nº do Processo</th>
                                    <th scope="col" style="background-color: #6c7ae0; color: #fff" class="text-left poppins-regular18">Tipo de processo</th>
                                    <th scope="col" style="width:7%; background-color: #6c7ae0; color: #fff" class="text-center poppins-regular18">Questionário</th>
                                    <th scope="col" style="width:7%; background-color: #6c7ae0; color: #fff" class="text-center poppins-regular18">Informações</th>
                                    <th scope="col" style="background-color: #6c7ae0; color: #fff; border-radius: 0 10px 0 0" class="text-center poppins-regular18">Ações</th>
                                </tr>
                            </thead>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($clientes as $cliente)                               
                            @include('processos.modal_cliente')
                            @include('processos.modal_resposta')
                            <tr>
                                <td class="text-center poppins-regular15" style="vertical-align: top;color: #666666;">{{ $cliente->cliente_nome }}</td>
                                @if($cliente->processos->isNotEmpty())
                                    <td class="poppins-regular15" style="vertical-align: top;color: #666666;">{{ $cliente->processos->first()->proc_numero_proc }}</td>
                                    <td class="poppins-regular15" style="vertical-align: top;color: #666666;">{{ $cliente->processos->first()->tipo_processo_id == 1 ? 'Administrativo' : 'Judiciário' }}</td>
                                @else
                                    <td style="vertical-align: top;">-</td>
                                    <td style="vertical-align: top;">-</td>
                                @endif
                                <td style="vertical-align: top;">
                                    <button type="button" class="btn btn-sm btn-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop-resposta-{{ $cliente->getKey() }}">
                                        <i class="align-middle text-primary" data-feather="clipboard"></i>
                                    </button>
                                </td>
                                <td style="vertical-align: top;">
                                    <button type="button" class="btn btn-sm btn-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $cliente->getKey() }}">
                                        <i class="align-middle text-primary" data-feather="maximize-2"></i>
                                    </button>     
                                </td>
                                <td style="vertical-align: top;" class="table-action text-center poppins-regular15 last-cell">
                                    <a href="{{ route('cliente.edit', $cliente->cliente_id) }}" class="btn btn-sm btn-success"><i class="align-middle" data-feather="edit"></i></a>
                                    <a href="{{ route('cliente.destroy', $cliente->cliente_id) }}" class="btn btn-sm btn-danger"><i class="align-middle" data-feather="trash"></i></a>
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
        </div>
    </div>
</div>
@endsection
