@extends('layouts.app', ['title' => __('Solicitações')])

@section('content')
    <div class="content min-vh-100">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <div>
                        <h5 class="mb-2">
                            Selecione o processo para visualizar
                        </h5>
                        
                        <form method="GET" action="#">
                            <div class="d-flex gap-3 align-items-center">
                                <select class="form-control" name="tipo_solicitacao_id">
                                    <option value="" selected disabled> Nome do Cliente </option>
                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente->cliente_id }}">
                                            {{ $cliente->cliente_nome }}
                                        </option>
                                    @endforeach
                                </select>

                                <button type="submit" class="btn btn-primary d-flex align-items-center gap-2">
                                    Visualizar
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card shadow">
                    <div class="table-responsive table-hover">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Número do Processo</th>
                                    <th scope="col">Tipo de Processo</th>
                                    <th scope="col"><i class="align-middle me-1" data-feather="calendar"></i>Data</th>
                                    <th scope="col">Informações</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($processos as $processo)
                                @include('processos.modal')
                                    <tr>
                                        <td>
                                            {{ $processo->cliente->cliente_nome }}
                                            {{-- {{ $processo->cliente->cliente_nome}} --}}
                                        </td>
                                        <td>
                                            {{ $processo->proc_numero_proc }}
                                        </td>
                                        <td>
                                            @if($processo->tipo_processo_id === 1)
                                                Administrativo
                                            @endif
                                            @if($processo->tipo_processo_id === 2)
                                                Judiciário
                                            @endif

                                        </td>
                                        <td> {{date_format(date_create($processo->created_at), 'd/m/Y')}} </td>
                                        <td> 
                                            <a href="{{ route('processos.questionarios', $processo->processo_id)}}">
                                                <i class="align-middle me-1" data-feather="maximize-2"></i>
                                            </a> 
                                        </td>
                                        <td style="vertical-align: top;" class="table-action text-left poppins-regular15 last-cell">
                                            <a href="{{ route('cliente.edit', $cliente->cliente_id) }}" class="btn btn-sm btn-success"><i class="align-middle" data-feather="edit"></i></a>
                                            <a href="{{ route('cliente.destroy', $cliente->cliente_id) }}" class="btn btn-sm btn-danger"><i class="align-middle" data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td style="border: none;">Nenhuma solicitação encontrada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">
                            <nav class="d-flex justify-content-end">
                                {{-- @if ($solicitacoes != null)
                                    {{ $solicitacoes->appends($_GET)->links() }}
                                @endif --}}
                            </nav>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
