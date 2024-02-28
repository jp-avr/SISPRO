<? 
use App\User;
?>
<b>  <i data-feather="user"></i>  Informações do Cliente  </b>
    <br> 
    <br>
    Nome: {{$processo->cliente->cliente_nome}} <br>
    Data de Nascimento: {{date_format(date_create($processo->cliente->cliente_data_nascimento), 'd/m/Y')}} <br>
    Gênero: {{$processo->cliente->cliente_sexo}} <br>
    CPF: {{$processo->cliente->cliente_cpf}} <br>
    RG: {{$processo->cliente->cliente_rg}} <br>
    Email: {{$processo->cliente->cliente_email}} <br>
    {{-- Estado Civil: {{$processo->cliente->cliente_estado_civil}} <br> --}}
    Telefone: {{$processo->cliente->cliente_telefone}} <br>
