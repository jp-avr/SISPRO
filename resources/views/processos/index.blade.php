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
                                    {{-- @foreach ($dispositivos as $dispositivo)
                                        <option value="{{ $dispositivo->tipo_solicitacao_id }}">
                                            {{ $dispositivo->tipo_solicitacao_descricao }}
                                        </option> --}}
                                    {{-- @endforeach --}}
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
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th style="width: 10rem;">Cliente</th>
                                    <th style="width: 10rem;">CPF</th>
                                    <th style="width: 10rem;">Número do Processo</th>
                                    <th style="width: 10rem;"><i class="align-middle me-1" data-feather="calendar"></i> Data </th>
                                    <th style="width:7%"></th>
                                </tr>
                            </thead>

                            <tbody>
                                {{-- @forelse($solicitacoes as $solicitacao)
                                    <tr>
                                        <td> <strong> {{ $solicitacao->usuario->name }} </strong> </td>
                                        <td> {{ $solicitacao->usuario->cartao_sus }} </td>
                                        <td> {{ $solicitacao->tipo_solicitacao->tipo_solicitacao_descricao }} </td>

                                        <td> {{ date_format(date_create($solicitacao->created_at), 'd/m/Y') }} </td>
                                        <td> 
                                            <button title="Visualizar mais informações" style="border: 0; background: inherit;" data-toggle="modal" data-target="#staticBackdrop-{{ $solicitacao->getKey() }}">
                                                <i class="align-middle me-1 text-primary" data-feather="maximize-2"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td style="border: none;">Nenhuma solicitação encontrada</td>
                                    </tr>
                                @endforelse --}}
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

        {{-- @include('retaguarda.modal') --}}
    </div>
@endsection
