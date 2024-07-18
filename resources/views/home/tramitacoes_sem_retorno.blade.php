<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">Tramitações sem retorno</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table no-margin table-striped table-bordered table-hover table-condensed" style="font-size: 14px;">
                <thead class="text-blue">
                <tr>
                    <th>Id</th>
                    <th>Número Judicial / Ano</th>
                    <th>Data de envio</th>
                    <th>Dias de envio</th>
                    <th>Setores</th>
                </tr>
                </thead>
                <tbody>
                    {{-- @forelse( $tramitacoes_sem_retorno as $tramitacao )
                    <tr>
                        <td><a href="processo/view/{{ $tramitacao->PROCESSO_ID }}">{{ $tramitacao->PROCESSO_ID }}</a></td>
                        <td>{{ $tramitacao->PROCESSO_NUM_JUDICIAL }} / {{ $tramitacao->PROCESSO_ANO_JUDICIAL }}</td>
                        <td>{{ date("d/m/Y", strtotime($tramitacao->TRAMITACAO_DT_SAIDA)) }}</td>
                        <td>{{ $tramitacao->DIAS_DE_ENVIO }}</td>
                        <td>{!! $tramitacao->SETORES !!}</td>
                    </tr>
                    @empty
                        <span class='text-blue'><i class='fa  fa-info-circle'></i> Nenhum registro localizado.</span>
                    @endforelse --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
