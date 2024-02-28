<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessagesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function messages()
    {
        return [

            //MENSAGENS DE CLIENTES

            'cliente_nome.string' => 'O campo Requerente é inválido',
            'cliente_nome.required' => 'O campo Requerente é obrigatório',

            // 'profissao_id.required' => 'O campo Profissão é obrigatório',
            // 'profissao_id.integer' => 'O campo Profissão é inválido',

            'cliente_data_nascimento.date' => 'O campo Nascimento é inválido',
            'cliente_data_nascimento.required' => 'O campo Nascimento é obrigatório',

            'cliente_sexo.string' => 'O campo Gênero é inválido',
            'cliente_sexo.required' => 'O campo Gênero é obrigatório',

            'cliente_rg.string' => 'O campo RG é inválido',
            'cliente_rg.required' => 'O campo RG é obrigatório',

            'cliente_cpf.string' => 'O campo CPF é inválido',
            'cliente_cpf.required' => 'O campo CPF é obrigatório',

            'cliente_email.string' => 'O campo Email é inválido',
            'cliente_email.required' => 'O campo Email é obrigatório',
            'cliente_estado_civil.integer' => 'O campo Estado Civil é inválido',
            'cliente_estado_civil.required' => 'O campo Estado Civil é obrigatório',
            'cliente_telefone.string' => 'O campo Telefone é inválido',
            'cliente_telefone.required' => 'O campo Telefone é obrigatório',

            //MENSAGENS DE PROCESSOS JUDICIARIOS

            'proc_judiciarios_numero_proc.string' => 'O campo Nº do Processo é inválido',
            'proc_judiciarios_numero_proc.required' => 'O campo Nº do Processo é obrigatório',

            'proc_judiciarios_numero_req.integer' => 'O campo Nº Requerimento é inválido',   
            'proc_judiciarios_numero_req.required' => 'O campo Nº Requerimento é obrigatório',

            // 'proc_judiciarios_nome_perito.string' => 'O campo Médico é inválido',
            // 'proc_judiciarios_nome_perito.required' => 'O campo Médico é obrigatório',

            'proc_judiciarios_data_exame.date' => 'O campo Data do Exame é inválido',
            'proc_judiciarios_data_exame.required' => 'O campo Data do Exame é obrigatório',

            'cid_id.integer' => 'O campo CID10 é inválido',
            'cid_id.required' => 'O campo CID10 é obrigatório',

            'proc_judiciarios_data_ini_doenca.date' => 'O campo Data Inicial dos Sintomas é inválido',
            'proc_judiciarios_data_ini_doenca.required' => 'O campo Data Inicial dos Sintomas é obrigatório',

            'proc_judiciarios_data_ini_incapacidade.date' => 'O campo Data de Início da Incapacidade é inválido',
            'proc_judiciarios_data_ini_incapacidade.required' => 'O campo Data de Início da Incapacidade é obrigatório',

            'proc_judiciarios_parte_atingida.string' => 'O campo Parte do corpo atingida é inválido',   
            'proc_judiciarios_parte_atingida.required' => 'O campo Parte do corpo atingida é obrigatório',

            'proc_judiciarios_historia.string' => 'O campo História é inválido',

            'proc_judiciarios_consideracoes.string' => 'O campo Considerações é inválido',
            'proc_judiciarios_consideracoes.required' => 'O campo Considerações é obrigatório',

            //MENSAGENS DE PROCESSOS ADMINISTRATIVOS

                      
        ];
    }
}
