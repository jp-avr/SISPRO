<?php

namespace App\Http\Requests;

use App\Http\Requests\MessagesRequest;
use Illuminate\Foundation\Http\FormRequest;

class FormularioRequest extends MessagesRequest
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
            'secao_1' => ['required','string'],
            'secao_2' => ['required','string'],
            'secao_3' => ['required','string'],
            'secao_4' => ['required','string'],
            'secao_5' => ['required','string'],
            'secao_6' => ['required','string'],
            'secao_7' => ['required','string'],
            'secao_8' => ['required','string'],
            'secao_9' => ['required','string'],
            'secao_10' => ['required','string'],
        ];
    }

    public function messages()
    {
        return [
            'secao_1.required' => 'O campo da Seção 1 é obrigatório',
            'secao_1.string' => 'O campo da Seção 1 é inválido',
            
            'secao_2.required' => 'O campo da Seção 2 é obrigatório',
            'secao_2.string' => 'O campo da Seção 2 é inválido',
            
            'secao_3.required' => 'O campo da Seção 3 é obrigatório',
            'secao_3.string' => 'O campo da Seção 3 é inválido',
            
            'secao_4.required' => 'O campo da Seção 4 é obrigatório',
            'secao_4.string' => 'O campo da Seção 4 é inválido',
            
            'secao_5.required' => 'O campo da Seção 5 é obrigatório',
            'secao_5.string' => 'O campo da Seção 5 é inválido',
            
            'secao_6.required' => 'O campo da Seção 6 é obrigatório',
            'secao_6.string' => 'O campo da Seção 6 é inválido',
            
            'secao_7.required' => 'O campo da Seção 7 é obrigatório',
            'secao_7.string' => 'O campo da Seção 7 é inválido',
            
            'secao_8.required' => 'O campo da Seção 8 é obrigatório',
            'secao_8.string' => 'O campo da Seção 8 é inválido',
            
            'secao_9.required' => 'O campo da Seção 9 é obrigatório',
            'secao_9.string' => 'O campo da Seção 9 é inválido',
            
            'secao_10.required' => 'O campo da Seção 10 é obrigatório',
            'secao_10.string' => 'O campo da Seção 10 é inválido',
            

        ];
    
    }
}
