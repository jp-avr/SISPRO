<b>  <i data-feather="file-text"></i>  Informações do Processo  </b>
    <br>
    <br>
    Número do Processo: {{$processo->proc_numero_proc}} <br>
    {{-- Médico: {{$processo->administrativo->proc_adm_nome_perito}}  <br> --}}
    CID: {{$processo->cid->cid_codigo}} ({{$processo->cid->cid_descricao}}) <br>
    {{-- Data de inicio dos sintomas: {{date_format(date_create($processo->administrativo->proc_adm_data_ini_doenca), 'd/m/Y')}} <br>
    Data de inicio das incapacidades: {{date_format(date_create($processo->administrativo->proc_adm_data_ini_incapacidade), 'd/m/Y')}} <br>
    Parte do corpo atingida: {{$processo->administrativo->proc_adm_parte_atingida}} <br> --}}