<b>  <i data-feather="file-text"></i>  Informações do Processo  </b>
    <br>
    <br>
    Número do Processo: {{$processo->proc_adm_numero_proc}} <br>
    Médico: {{$processo->proc_adm_nome_perito}}  <br>
    CID: {{$processo->proc_adm_cid}} <br>
    Data de inicio dos sintomas: {{date_format(date_create($processo->proc_adm_data_ini_doenca), 'd/m/Y')}} <br>
    Data de inicio das incapacidades: {{date_format(date_create($processo->proc_adm_data_ini_incapacidade), 'd/m/Y')}} <br>
    Parte do corpo atingida: {{$processo->proc_adm_parte_atingida}} <br>