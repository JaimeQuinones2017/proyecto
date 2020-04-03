<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoFormRequest extends FormRequest
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
            'placa'=>'required|max:6',
            'tipo'=>'required|in:Automovil,Motocicleta,Buseta',
            
        ];
    }

    public function messages()
    {
        return [
            'placa.required'   => 'El atributo placa es obligatorio.',
            'placa.max'   => 'El atributo placa no puede tener mas de 6 caracteres.',

            'tipo.required'        => 'El atributo tipo de vehiculo debe ser seleccionado.',
            'tipo.in'        => 'El atributo tipo de vehiculo seleccionado no es valido.',
        ];
    }
}
