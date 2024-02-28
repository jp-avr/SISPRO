<?php

namespace App\Http\Requests;

use App\Http\Requests\MessagesRequest;
use Illuminate\Foundation\Http\FormRequest;

class ClienteInserirRequest extends MessagesRequest
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
            'cliente_nome' => ['required','string'],
            'profissao_id' => ['required', 'integer'],
            'cliente_data_nascimento' => ['required','date'],
            'cliente_sexo' => ['required','string'],
            'cliente_rg' => ['required','string'],
            'cliente_cpf' => ['required','string'],
            'cliente_email' => ['required','email'],
            'cliente_telefone' => ['required','string'],
            'cliente_estado_civil' => ['required','string']                  
        ];
    }

    public function messages()
    {
        return parent::messages();
    
    }
}
