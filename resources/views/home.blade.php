@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-blue"><i class="fa fa-folder-open"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total de Processos</span>
                    <span class="info-box-number">
                        {{ $total_processos }}
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-secondary"><i class="far fa-envelope"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">Processos Administrativos</span>
                    <span class="info-box-number">
                        {{ $total_processos_administrativos }}
                    </span>
                </div>
            </div>
        </div>

        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-balance-scale"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Processos Judiciarios</span>
                    <span class="info-box-number">
                        {{ $total_processos_judiciarios }}
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-check-circle"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Processos Finalizados</span>
                    <span class="info-box-number">
                        {{ $total_processos_finalizados }}
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {{-- @include('home.audiencias_serem_realizadas') --}}
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-xs-12">
                    {{-- @include('home.include_processos_hoje') --}}
                </div>
                <div class="col-xs-12">
                    {{-- @include('home.processos_prazo_decisao_vencer') --}}
                </div>
                <div class="col-xs-12">
                    {{-- @include('home.documentos_prazo_decisao_vencer') --}}
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            {{-- @include('home.tramitacoes_sem_retorno') --}}
        </div>
    </div>
@stop
