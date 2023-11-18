@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="accordion" id="accordionExample">                           
                        <div class="d-flex gap-3">
                            <a class="btn btn-outline-secondary">
                                Listagem de Clientes
                            </a>

                            <button class="btn btn-primary btn-md" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Cadastrar Cliente
                            </button>                                                
                        </div>                                            
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="dropdown my-3">
                                <a class="btn btn-primary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    O processo será Administrativo ou Judiciário?
                                </a>
    
                                <div class="dropdown-menu">
                                   
                                    <a class="dropdown-item" href="{{ route('clientes.inserir.administrativo') }}"> Criar Cliente com processo Administrativo </a>   
                                    
                                    <a class="dropdown-item" href="{{ route('clientes.inserir.judiciario') }}">Criar Cliente com processo Judiciario</a>
                                </div>
                            </div>
                        </div>
                    </div>                                           
                                                
                </div>

                </div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Cliente</th>
                                <th>Grupo do Cliente</th>
                                <th>Perfil</th>
                                <th>Cidade</th>
                                <th>Ações</th>
                                <th style="width:5%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($clientes as $cliente)                               

                                <tr>
                                    <td><strong> {{ $cliente->cliente_nome }} </strong></td>
                                    {{-- <td> {{ $cliente->tipocliente->tipo_solicitacoes_descricao }} </td>
                                    <td> {{ $cliente->especialidade->especialidades_descricao }} </td>
                                    <td>
                                        <span style="opacity: 0.8;" class="badge {{$cor}}">
                                            {{$cliente->status->status_descricao}}
                                        </span>
                                    </td> --}}
                                    
                                    
                                    <td>
                                        <button style="border: 0; background: inherit;" data-toggle="modal" data-target="#staticBackdrop-{{$cliente->cliente_consulta_id}}">
                                            <i class="align-middle me-1" data-feather="layers"></i>
                                        </button>
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
</div>
@endsection
</body>
</html>
