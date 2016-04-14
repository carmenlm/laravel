<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class cocheRequest extends Request
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
            'marca' => 'required',
            'modelo' => 'required',
            'color' => 'required',
            'matricula' => 'required',
            'puertas' => 'required|numeric',
            'precio' => 'required|numeric',

        ];
    }

    public function messages()
    {
        return [

            'required' => 'El Campo :attribute . Es Un Campo Requerido',
            'puertas.numeric' => 'Numero De Puertas Formato Incorrecto',
            'precio.numeric' => 'Precio Formato Incorrecto',

        ];
    }
}
