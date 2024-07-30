<b> <i data-feather="file-text"></i>Dados</b>
    <br>
    <br>
    <strong>Número do Processo:</strong> {{ $processo->proc_numero_proc }}<br>
    <strong>Data de início da Doença:</strong> {{ date_format(date_create($processo->proc_data_ini_doenca), 'd/m/Y') }}<br>
    <strong>Data de início da incapacidade:</strong> {{ date_format(date_create($processo->proc_data_ini_incapacidade), 'd/m/Y') }}<br>
    <strong>Resultado do Processo:</strong> 
    @if($processo->proc_resultado == null)
        Em Andamento <br>
    @endif
    <strong>História:</strong> {{ $processo->proc_historia }} <br>
    <strong>Parte do corpo atingida:</strong> {{$processo->proc_parte_atingida}} <br>
    <strong>Considerações: </strong> {{ $processo->proc_consideracoes }}