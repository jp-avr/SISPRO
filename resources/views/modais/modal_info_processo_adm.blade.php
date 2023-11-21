<b>  <i data-feather="file-text"></i>  Informações do Processo  </b>
    <br>
    <br>
    Número do Processo: {{$processo->administrativo->proc_adm_numero_proc}} <br>
    Médico: {{$processo->administrativo->proc_adm_nome_perito}}  <br>
    CID: {{$processo->administrativo->proc_adm_cid}} <br>
    Data de inicio dos sintomas: {{date_format(date_create($processo->administrativo->proc_adm_data_ini_doenca), 'd/m/Y')}} <br>
    Data de inicio das incapacidades: {{date_format(date_create($processo->administrativo->proc_adm_data_ini_incapacidade), 'd/m/Y')}} <br>
    Parte do corpo atingida: {{$processo->administrativo->proc_adm_parte_atingida}} <br>