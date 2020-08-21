<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaFormRequest extends FormRequest
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
            'tipoDocumento' =>'required|max:10',
            'valorDocumento'=>'required|max:13',
            'nombres'=>'required|max:50',
            'email'=>'required|unique',
            'direccion'=>'max:100',
            'telefonoDomicilio'=>'max:100',
            'telefonoCelular'=>'required|max:13',
            'tipoPersona'=>'required|max:15',
            'nombreComercial'=>'required|max:50',
            'representanteLegal'=>'required|max:50',
            'estadoPersona'=>'required',
        ];
    }
}
