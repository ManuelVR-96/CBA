<?php

namespace CBA\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class MiembroStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombres' => ['required', 'string','alpha', 'max:30'],
            'apellidos' => ['required', 'string','alpha', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cédula' =>['required', 'string', 'unique:clientes', 'digits_between:8,10', 'numeric' ],
            
            'nivel'=> ['required', 'string','alpha', 'max:30'],
            'direccion' => ['required', 'string','alpha_dash', 'max:60'],
            'telefono' =>['required', 'string', 'digits:10', 'starts_with:3'],
            'lugar'=> ['required', 'string','alpha', 'max:40'],
            'nacimiento' =>['required', 'date', 'after:1/1/1969'],
            #'vinculacion' =>['required', 'date', 'date_equals:1/1/1969'],
            'nacimiento'=>['required', 'date', 'before:1969/1/1'],          
           'seguridad'=> ['required', 'string','alpha', 'max:40'],
           'primer_acudiente'=> ['required', 'string','alpha', 'max:40'],
            'segundo_acudiente'=> ['required', 'string','alpha', 'max:40'],
            'servicio_funerario' => ['required', 'string','alpha', 'max:2'],
            'entidad_funeraria' => ['required', 'string','alpha_dash', 'max:40'],
            'dependencia_economica'=> ['required', 'string','alpha', 'max:40'] ,
            'dependencia_afectiva'=> ['required', 'string','alpha', 'max:40'],
            'relacion_familiar'=> ['required', 'string','alpha', 'max:40'],
            'hobbies'=>['required', 'string','alpha_dash', 'max:250'],
            'motivo_ingreso'=>['required', 'string','alpha_dash', 'max:250'],
           'tipo_sangre'=>['required', 'string','alpha_dash', 'max:5'],
            'eps'=> ['required', 'string','alpha_dash', 'max:20'],
            'morbilidad'=>['required', 'string','alpha_dash', 'max:250'],
            'genero'=>['required', 'string','alpha', 'max:250'],
           'medicinas'=>['required', 'string','alpha_dash', 'max:250'],
            

        ];
    }

    public function messages()
    {
        return [
              // 'email.unique' => 'Ya lo están usando!!',
        'cédula.unique'  => 'Ya está registrado un paciente con este número de identificación',
        'cédula.required'  => 'Debe ingresar un número de identificación',
        // 'cargo.string'  => 'Debe ser string',
        // 'cargo.unique'  => 'Debe ser único',
        'required'    => 'El campo :attribute es requerido.',
        'formacion.required' => 'El campo formación es requerido',
        'formacion.string' => 'El campo formación solo puede contener letras',
        'direccion.required' => 'El campo dirección es requerido',
        'unique' => 'El campo :attribute debe ser único',
        'numeric' => 'El campo :attribute debe ser completamente numérico',
        'alpha' => 'El campo :attribute solo puede contener letras',
        'password.alpha_numeric' => 'La contraseña solo puede contener caracteres alfanuméricos',
        'telefono.starts_with' => 'Verifique el número de celular ingresado ',
        'telefono.digits' => 'El número de teléfono debe contener entre 8 y 10 dígitos ',
        'id.digits' => 'El número de identificación debe contener entre 8 y 10 dígitos ',
        'email' => 'Introduzca una dirección de correo válida'
        ];
    }
}
