@extends('layouts.app', ['title' => __('Processos')])

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        @if (session('sucesso'))
        <div class="alert alert-success">
            <p>{{ session('sucesso') }}</p>
        </div>
        @endif

        <h1 class="h3 mb-3"><i class="align-middle me-1" data-feather="clipboard" style="width:2%;height:2%"></i> <strong>Informações</strong> de Processos</h1>

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
                                <h3 class="mb-0"><i class="align-middle me-1" data-feather="list" style="width:4%;height:4%">
                                    </i> Ficha:
                                </h3>
                                Número do Processo: <strong>{{ $processo->proc_numero_proc}}</strong><br>
                                Data de início da doença: {{ $processo->proc_data_ini_doenca }}<br>
                                Data de início da incapacidade: {{ $processo->proc_data_ini_incapacidade }} <br>
                                Parte Atingida: {{ $processo->parte_atingida_id }}<br>
                            </div>
                            <div class="col-5">
                                Resultado: {{ $processo->proc_resultado }}
                                <br>
                                História: {{ $processo->proc_historia }}
                                <br>
                                Considerações: {{ $processo->proc_consideracoes }}
                                <br>
                                Atividade:
                                @if($processo->proc_ativo == 0)
                                    Não ativo
                                @endif
                                @if($processo->proc_ativo == 1)
                                    Ativo
                                @endif
                                <br>
                                Notificação feita em <strong>{{$processo->created_at->format('d/m/Y')}}</strong>
                            </div>
                            <div class="col-2 text-right">
                                <a href="#" class="btn btn-sm btn-primary">Novo processo</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">

                    </div>

                    <div class="table-responsive table-hover">
                        <table class="table align-items-center table-flush">
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
                                {{-- @include('processos.modal_processo') --}}
                                <tr>
                                    <td>
                                        {{ $questionario->questionario_id }}
                                    </td>
                                    <td>
                                        {{ $questionario->created_at }}
                                    </td>
                                    <td>

                                    </td>
                                    <td style="vertical-align: top;" class="table-action text-left poppins-regular15 last-cell">
                                        <a href="{{ route('questionarios.destroy', $questionario->questionario_id) }}" class="btn btn-sm btn-danger"><i class="align-middle" data-feather="trash"></i></a>
                                    </td>
                                    {{-- <td>
                                        {{ $processo->proc_numero_proc }}
                                        <td style="vertical-align: top;">
                                            <button type="button" class="btn btn-sm btn-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop-processo-{{ $cliente->getKey() }}">
                                                <i class="align-middle text-primary" data-feather="eye"></i>
                                            </button>     
                                        </td>
                                    <td>
                                        <span class="@switch ($processo->tipo_processo_id) @case('1') {{ 'badge bg-warning' }} @break @case('2') {{ 'badge bg-primary'}} @break @endswitch">
                                            @if($processo->tipo_processo_id == 1)
                                                Administrativo
                                            @endif
                                            @if($processo->tipo_processo_id == 2)
                                                Judiciário
                                            @endif
                                        </span>
                                    </td>
                                    <td>
                                        <span class="@switch ($processo->proc_ativo) @case('0') {{ 'badge bg-secondary' }} @break @case('1') {{ 'badge bg-success' }} @break @endswitch">
                                            @if($processo->proc_ativo == 0)
                                                Não ativo
                                            @endif
                                            @if($processo->proc_ativo == 1)
                                                Ativo
                                            @endif
                                        </span>
                                    </td>
                                    <td>
                                        {{ $processo->proc_resultado }}
                                    </td>
                                    <td>{{ $processo->created_at->format('d/m/Y') }}</td>
                                    <td class="text-right"></td>
                                    <td class="table-action">
                                        <a href="#" title="Editar monitoramento">
                                            <i class="align-middle me-1" data-feather="edit"></i>
                                        </a>
                                    </td>
                                </tr> --}}
                                @empty
                                <tr>
                                    <td conlspan="4">Nenhum questionário encontrada</td>
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
</main>
@endsection