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
        return parent::messages();
    
    }
}
