<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
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
                'identificacion'    => 'required|unique:employees,identificacion',
                'primer_nombre'     => 'required',
                'primer_apellido'   => 'required',
                'fecha_nacimiento'  => 'required',
                'telefono'          => 'required',
                'usuario'           => 'required',
                'password'          => 'required',
                'rol_id'            => 'required'
        ];
    }
}
