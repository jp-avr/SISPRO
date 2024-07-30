<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">Processos com prazo de decisão</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            @if($total_processos == null)
                <span class='text-blue'><i class='fa  fa-info-circle'></i> Nenhum registro localizado.</span>
            @else
            <table class="table no-margin table-striped table-bordered table-hover table-condensed" style="font-size: 14px;">
                <thead class="text-blue">
                <tr>
                    <th>Id</th>
                    <th>Número Judicial / Ano</th>
                    <th>Data do Processo</th>
                    <th>Prazo</th>
                    <th>Limite</th>
                </tr>
                </thead>
                <tbody>
      {{--               @foreach( $processos_a_vencer as $processo )
                    <tr>
                        <td><a href="processo/view/{{ $processo->PROCESSO_ID }}">{{ $processo->PROCESSO_ID }}</a></td>
                        <td>{{ $processo->PROCESSO_NUM_JUDICIAL }} / {{ $processo->PROCESSO_ANO_JUDICIAL }}</td>
                        <td>{{ $processo->PROCESSO_DATA }}</td>
                        <td>{{ $processo->PRAZO_DECISAO_FINAL }} {{ $processo->PROCESSO_PRAZO_DECISAO_TIPO == 2 ? "Dias" : "Horas" }}</td>
                        <td>{{ $processo->DATA_LIMITE }}</td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
