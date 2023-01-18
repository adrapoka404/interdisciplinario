<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditoresRequest extends FormRequest
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
            //
            'name'          => 'required|max:20|min:5|alpha|unique:editors',
            'mail'          => 'required|email',
            'speciality'    => 'required|max:30|min:5',
            'semblance'     => 'required|max:40|min:5',
            'status'        => 'required',
        ];
    }
    public function messages()
{
    return [
        'name.required' => 'El nombre del editor es necesario',
        'name.max' => 'El nombre debe contener máximo 20 caracteres',
        'name.min' => 'El nombre debe contener al menos 5 caracteres',
        'name.alpha' => 'No se admiten números',
        'name.unique' => 'Este nombre ya existe !',

        'mail.required'   => 'El e-mail es requerido',
        'mail.email' => 'No se identifica como formato de correo',

        'speciality.required' => 'La especialidad del Editor es necesaria',
        'speciality.max'    => 'El nombre de la especialidad debe contener máximo 30 caracteres',
        'speciality.min'    => 'El nombre debe contener al menos 5 caracteres',
        
        'semblance.required' => 'Es necesario agregar una descipcion',
        'semblance.max'     => 'La apariencia debe contener máximo 40 caracteres',
        'semblance.min'     => 'El apariencia debe contener al menos 5 caracteres',
    ];
}
}
