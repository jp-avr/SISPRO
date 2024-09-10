
Nome: {{$cliente->cliente_nome}} <br>
Data de Nascimento: {{date_format(date_create($cliente->cliente_data_nascimento), 'd/m/Y')}} <br>
@if($cliente->cliente_sexo == 0)
Gênero: Feminino <br>
@endif
@if($cliente->cliente_sexo == 1)
Gênero: Masculino <br>
@endif
Ocupação: {{$cliente->profissao->profissao_descricao}}<br>
CBO: {{ $cliente->cbo}}<br>
CPF: {{$cliente->cliente_cpf}} <br>
RG: {{$cliente->cliente_rg}} <br>
Email: {{$cliente->cliente_email}} <br>
Telefone: {{$cliente->cliente_telefone}} <br>
