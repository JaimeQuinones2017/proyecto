<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Tipo_vehiculoFormResquest extends FormRequest
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
            'descripcion'   => 'required|min:1|max:8',
            'nombre'=>'requerid'
            
        ];
    }
    public function messages()
    {
        return [
            'descripcion.required'   => 'El atributo descripcion es obligatorio.',
            'descripcion.max' => 'No debe ser mayor a 13 caracteres',
            'nombre.required'   => 'El  nombres es obligatorio.',
            'nombre' => 'debes de dijitar solo letras',
          
        ];
    }
}
