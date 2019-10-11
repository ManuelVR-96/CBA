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
            'nombres' => ['required', 'string','regex:/^[\pL\s\-]+$/u', 'max:30'],
            'apellidos' => ['required', 'string','regex:/^[\pL\s\-]+$/u', 'max:30'],            
            'cédula' =>['required', 'string', 'unique:clientes', 'digits_between:8,10', 'numeric' ],            
            'nivel'=> ['required', 'string','alpha', 'max:30'],
            'direccion' => ['required', 'string', 'max:60'],
            'telefono' =>['required', 'string', 'digits:10', 'starts_with:3'],
            'lugar'=> ['required', 'string','alpha', 'max:40'],
            'nacimiento' =>['required', 'date', 'after_or_equal:1/1/1969'],
            #'vinculacion' =>['required', 'date', 'date_equals:1/1/1969'],
            'nacimiento'=>['required', 'date', 'before:1969/1/1'],          
            'seguridad'=> ['required', 'string','alpha', 'max:40'],
            'primer_acudiente'=> ['required', 'string', 'max:40'],
            'segundo_acudiente'=> ['required', 'string', 'max:40'],
            'servicio_funerario' => ['required', 'string', 'max:2'],
            'entidad_funeraria' => ['required', 'string','max:40'],
            'dependencia_economica'=> ['required', 'string', 'max:40'] ,
            'dependencia_afectiva'=> ['required', 'string', 'max:40'],
            'relacion_familiar'=> ['required', 'string', 'max:40'],
            'hobbies'=>['required', 'string', 'max:250'],
            'motivo_ingreso'=>['required', 'string', 'max:250'],
            'tipo_sangre'=>['required', 'string', 'max:5'],
            'eps'=> ['required', 'string', 'max:20'],
            'morbilidad'=>['required', 'string', 'max:250'],
            'genero'=>['required', 'string','alpha', 'max:250'],
            'medicinas'=>['required', 'string', 'max:250'],
            

        ];
    }

    public function messages()
    {
        return [

            'nacimiento.after' => 'La fecha de nacimiento debe ser menor o igual a 01/01/1969',
            'nacimiento.before' => 'La fecha de nacimiento debe ser menor o igual a 01/01/1969',
            'nombres.regex' => 'El nombre solo puede contener letras',
            'apellidos.regex' => 'Los apellidos solo pueden contener letras',            
            'cédula.unique'  => 'Ya está registrado un paciente con este número de identificación',
            'cédula.required'  => 'Debe ingresar un número de identificación',
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
            'cédula.digits_between' => 'El número de identificación debe contener entre 8 y 10 dígitos ',
            'email' => 'Introduzca una dirección de correo válida'
        ];
    }
}
