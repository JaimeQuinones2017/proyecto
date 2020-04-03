<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'cedula'=>'required|max:10',  
          

        ];
    }

public function messages()
{
    return [
        'cedula.required'   => 'El atributo placa es obligatorio.',
        'cedula.max'   => 'El atributo placa no puede tener mas de 10 caracteres.',
    ];
}
}