<?php

namespace App\Http\Requests;

use App\Http\Requests\MessagesRequest;
use Illuminate\Foundation\Http\FormRequest;

class RegistroInserirRequest extends MessagesRequest
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
            'name' => ['required','string'],
            'email' => ['required', 'string'],
            'password' => ['required','string','confirmed'],
            'role' => ['required','integer'],              
        ];
    }

    public function messages()
    {
        return parent::messages();

    }
}