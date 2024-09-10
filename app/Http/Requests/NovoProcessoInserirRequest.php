<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NovoProcessoInserirRequest extends FormRequest
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
            'proc_numero_proc' => ['required','string'],
            'proc_data_ini_doenca' => ['required','date'],
            'proc_data_ini_incapacidade' => [ 'required','date'],
            'parte_atingida_id' => ['required','string'],
            'proc_historia' => [ 'required','string'],     
            'proc_consideracoes' => ['string', 'nullable']      
        ];
    }

    public function messages()
    {
        return [

            //--------------------- PROCESSOS -------------------------------------------
            'proc_numero_proc.string' => 'O campo Nº do Processo é inválido',
            'proc_numero_proc.required' => 'O campo Nº do Processo é obrigatório',

            'cid_id.integer' => 'O campo CID10 é inválido',
            'cid_id.required' => 'O campo CID10 é obrigatório',

            'proc_data_ini_doenca.date' => 'O campo Data Inicial dos Sintomas é inválido', 
            'proc_data_ini_doenca.required' => 'O campo Data Inicial dos Sintomas é obrigatório',

            'proc_data_ini_incapacidade.date' => 'O campo Data Inicial dos Sintomas é inválido',
            'proc_data_ini_incapacidade.required' => 'O campo Data Inicial dos Sintomas é obrigatório',

            'parte_atingida_id.string' => 'O campo Parte do corpo atingida é inválido',   
            'parte_atingida_id.required' => 'O campo Parte do corpo atingida é obrigatório',

            'proc_historia.string' => 'O campo História é inválido',
            'proc_historia.required' => 'O campo História é obrigatório',

            'proc_consideracoes.string' => 'O campo Considerações é inválido',
        ];
    }
}