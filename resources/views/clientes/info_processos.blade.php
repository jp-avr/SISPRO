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
                                <?php
                                $date = new DateTime($cliente->cliente_data_nascimento);
                                $interval = $date->diff(new DateTime(date('Y-m-d')));
                                $idade = $interval->format('%Y');
                                ?>
                                <h3 class="mb-0"><i class="align-middle me-1" data-feather="list" style="width:4%;height:4%">
                                    </i> Ficha:
                                </h3>
                                Cliente: <strong>{{ $cliente->cliente_nome}}</strong> ({{ $idade }} anos)
                                <br>Ocupação: {{ $cliente->profissao->profissao_descricao }}<br>
                                CBO: {{ $cliente->cbo }} <br>
                                CPF: {{ $cliente->cliente_cpf }}<br>
                            </div>
                            <div class="col-5">
                                RG: {{ $cliente->cliente_rg }}
                                <br>
                                Data de Nascimento: {{ date_format(date_create($cliente->cliente_data_nascimento), 'd/m/Y') }}
                                <br>
                                Telefone: {{ $cliente->cliente_telefone }}
                                <br>
                                Sexo:
                                @if($cliente->cliente_sexo == 0)
                                    Ignorado
                                @endif
                                @if($cliente->cliente_sexo == 1)
                                    Masculino
                                @endif
                                @if($cliente->cliente_sexo == 2)
                                    Feminino
                                @endif
                                <br>
                                Notificação feita em <strong>{{$cliente->created_at->format('d/m/Y')}}</strong> por Alguém
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
                                    <th scope="col">Número do Processo</th>
                                    <th scope="col" style="width:10%"></th>
                                    <th scope="col">Questionário</th>
                                    <th scope="col">Tipo de Processo</th>
                                    <th scope="col">Atividade</th>
                                    <th scope="col">Resultado</th>
                                    <th scope="col"><i class="align-middle me-1" data-feather="calendar"></i>Data de criação</th>
                                    <th scope="col"></th>
                                    <th scope="col" style="width:7%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($processos as $processo)
                                @include('processos.modal_processo')
                                @include('processos.modal_resposta')
                                <tr>
                                    <td>
                                        {{ $processo->proc_numero_proc }}
                                    </td>
                                    <td style="vertical-align: top;">
                                        <a type="button" href="{{route("processos.questionarios", $processo->processo_id)}}">
                                            <i class="align-middle text-primary" data-feather="eye"></i>
                                        </a>     
                                    </td>
                                    <td style="vertical-align: top;">
                                        <button type="button" class="btn btn-sm btn-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop-resposta-{{ $cliente->getKey() }}">
                                            <i class="align-middle text-primary" data-feather="clipboard"></i>
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
                                </tr>
                                @empty
                                <tr>
                                    <td conlspan="4">Nenhum processo encontrada</td>
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