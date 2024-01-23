<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcessoAdministrativoInserirRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cid_id' => ['required','integer'],
            'estado_civil_id' => ['required','integer'],
            'cliente_nome' => ['required','string'],
            'cliente_data_nascimento' => ['required','date'],
            'cliente_sexo' => ['required','string'],
            'cliente_rg' => ['required','string'],
            'cliente_cpf' => ['required','string'],
            'cliente_email' => ['required','email'],
            'cliente_telefone' => ['required','string'],
            'proc_numero_proc' => ['required','string'],
            'proc_nome_perito' => ['required','string'],

            'proc_data_ini_doenca' => ['required','date'],
            'proc_data_ini_incapacidade' => [ 'required','date'],
            'proc_parte_atingida' => ['required','string'],
            'proc_historia' => [ 'required','string'],     
            'proc_consideracoes' => ['string', 'nullable']      
        ];
    }

    public function messages()
    {
        return [
            //---------------------- CLIENTES ----------------------------------
            'cliente_nome.string' => 'O campo Requerente é inválido',
            'cliente_nome.required' => 'O campo Requerente é obrigatório',

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

            'estado_civil_id.integer' => 'O campo Estado Civil é inválido',
            'estado_civil_id.required' => 'O campo Estado Civil é obrigatório',
            
            'cliente_telefone.string' => 'O campo Telefone é inválido',
            'cliente_telefone.required' => 'O campo Telefone é obrigatório',

            //--------------------- PROCESSOS -------------------------------------------
            'proc_numero_proc.string' => 'O campo Nº do Processo é inválido',
            'proc_numero_proc.required' => 'O campo Nº do Processo é obrigatório',

            'proc_nome_perito.string' => 'O campo Médico é inválido',
            'proc_nome_perito.required' => 'O campo Médico é obrigatório',

            // 'proc_data_exame.date' => 'O campo Data do Exame é inválido',
            // 'proc_data_exame.required' => 'O campo Data do Exame é obrigatório',

            'cid_id.integer' => 'O campo CID10 é inválido',
            'cid_id.required' => 'O campo CID10 é obrigatório',

            'proc_data_ini_doenca.date' => 'O campo Data Inicial dos Sintomas é inválido', 
            'proc_data_ini_doenca.required' => 'O campo Data Inicial dos Sintomas é obrigatório',

            'proc_data_ini_incapacidade.date' => 'O campo Data Inicial dos Sintomas é inválido',
            'proc_data_ini_incapacidade.required' => 'O campo Data Inicial dos Sintomas é obrigatório',

            'proc_parte_atingida.string' => 'O campo Parte do corpo atingida é inválido',   
            'proc_parte_atingida.required' => 'O campo Parte do corpo atingida é obrigatório',

            'proc_historia.string' => 'O campo História é inválido',
            'proc_historia.required' => 'O campo História é obrigatório',

            'proc_consideracoes.string' => 'O campo Considerações é inválido',
            'proc_consideracoes.required' => 'O campo Considerações é obrigatório',  
        ];
    }
}