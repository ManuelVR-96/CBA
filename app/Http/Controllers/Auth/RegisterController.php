<?php

namespace CBA\Http\Controllers\Auth;

use CBA\User;
use CBA\Especialidad;
use CBA\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use Image;


use Illuminate\Auth\Events\Registered;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('admin');
     }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {    $message= array (
        
        'cedula.unique'  => 'Ya está registrado un paciente con este número de identificación',
        'cedula.required'  => 'Debe ingresar un número de identificación',
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
        'email' => 'Introduzca una dirección de correo válida',
        'nombres.regex' => 'El nombre solo puede contener letras',
        'apellidos.regex' => 'Los apellidos solo pueden contener letras',
        'password.size'  => 'El tamaño de la contraseña debe ser como mínimo de 8 dígitos',
    );
        return Validator::make($data, [
            'nombres' => ['required', 'string','regex:/^[\pL\s\-]+$/u', 'max:30'],
            'apellidos' => ['required', 'string','regex:/^[\pL\s\-]+$/u', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cedula' =>['required', 'string', 'unique:users', 'digits_between:6,10', 'numeric' ],
            'formacion' => ['required', 'string', 'max:40'],
            'direccion' => ['required', 'string', 'max:60'],
            'perfil' =>['required', 'string', 'alpha'],
            'nivel' =>['required', 'string'],
            'telefono' =>['required', 'string', 'digits:10', 'starts_with:3'],
            'cargo' =>['required', 'string', 'alpha_num'],
            'password' =>['required', 'string', 'alpha_num', 'size:8'],
        ],$message);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \CBA\User
     */
    protected function create(array $data, $filename)
    {  
        return User::create([            
            

            'avatar' => $filename,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),           
            'nombres' =>$data['nombres'],
            'cedula' =>$data['cedula'],
            'apellidos' =>$data['apellidos'],
            'cargo' => $data['cargo'],
            'nivel_educativo' =>$data['nivel'],
            'formación' =>$data['formacion'],
            'rol' =>$data['perfil'],
            'dirección' =>$data['direccion'],
            'fecha_de_nacimiento' => $data['nacimiento'],
            'fecha_de_vinculación' => $data['vinculacion'],
            'telefono' =>$data['telefono'],          
            'fecha_de_nacimiento' => $data['nacimiento'],          
            'fecha_de_vinculación' => $data['vinculacion'],          
        ]);
    }

    public function register(Request $request)

    {
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().'.' . $avatar->guessExtension();
            Image::make($avatar)->resize(130,130)->save(public_path('/uploads/avatar/' . $filename));
        }
        else{
            $filename= "default.jpg";
        }
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all(), $filename)));
        return $this->registered($request, $user)?: redirect($this->redirectPath());
    }
}
