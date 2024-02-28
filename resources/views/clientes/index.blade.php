@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <main class="py-4">
            @yield('content')
        </main>

        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="d-flex align-items-center justify-content-between">                                                  
                            <h3 class="mb-0"> Listagem de Clientes </h3>                           
                        </div>
                    </div>                                          
                                                
                </div>

            </div>                

                <div class="table-responsive">                    
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Cliente</th>
                                <th>Grupo do Cliente</th>
                                <th>Perfil</th>
                                <th>Cidade</th>
                                <th>Ações</th>
                                <th style="width:7%"></th>
                                <th style="width:7%"></th>
                                <th style="width:7%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @forelse($clientes as $cliente)                               

                                <tr>
                                    <td><strong> {{ $cliente->cliente_nome }} </strong></td>
                                    <td>aa</td>
                                    <td>aa</td>
                                    <td>aa</td>
                                    <td>
                                        <button style="border: 0; background: inherit;" data-toggle="modal" data-target="#staticBackdrop-{{$cliente->cliente_consulta_id}}">
                                            <i class="align-middle me-1" data-feather="layers"></i>
                                        </button>
                                    </td>
                                    <td class="table-action">
                                        <a href="{{ route('cliente.edit', $cliente->cliente_id) }}" ><i class="align-middle me-1" data-feather="edit"></i></a>
                                        <a href="{{ route('cliente.destroy', $cliente->cliente_id) }}" ><i class="align-middle me-1" data-feather="trash"></i></a>
                                    </td>
                                    <td>
                                        <td>
                                            <a href="{{ route('questionarios.inserir', $cliente->cliente_id) }}"><i class="align-middle me-1" data-feather="clipboard"></i></a>
                                        </td>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td style="border: none;">Nenhum solicitação encontrado</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection
