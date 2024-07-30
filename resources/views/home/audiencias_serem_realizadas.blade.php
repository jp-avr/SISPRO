<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Audiências marcadas</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <ul class="products-list product-list-in-box">
            @forelse( $processos as $audiencia )
            <li class="item">
                <div class="product-img">
                    <img src="{{ asset('img/calendario-3-128.png') }}" alt="Product Image">
                </div>
                <div class="product-info">
                    {{-- <a href="processo/view/{{ $audiencia->PROCESSO_ID }}" class="product-title">
                      {{ $audiencia->AUDIENCIA_LOCAL }}
                      <span class="label label-primary pull-right" title="Número do Processo Judicial">
                          {{ $audiencia->PROCESSO_NUM_JUDICIAL != null ? $audiencia->PROCESSO_NUM_JUDICIAL." / ".$audiencia->PROCESSO_ANO_JUDICIAL : "" }}
                      </span>
                    </a> --}}
                    <span class="product-description">
                        {{-- <i class="fa fa-calendar" title="Data"></i> {{ date("d/m/Y H:i", strtotime($audiencia->REDESIGNACAO_DATA == null ? $audiencia->AUDIENCIA_DATA : $audiencia->REDESIGNACAO_DATA)) }}<br>

                        <i class="fa fa-building" title="Local"></i> {{ $audiencia->AUDIENCIA_LOCAL }} <br>
                        <i class="fa fa-user" title="Preposto"></i> {{ $audiencia->FUNCIONARIO_NOME == null ? " Não informado" : $audiencia->FUNCIONARIO_NOME }}
                     --}}</span>
                </div>
            </li>
            @empty
                <span class='text-blue'><i class='fa  fa-info-circle'></i> Nenhum registro localizado.</span>
            @endforelse
        </ul>
    </div>
</div>
