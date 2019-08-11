<?php

namespace CBA\Http\Controllers\Auth;

use CBA\User;
use CBA\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombres' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \CBA\User
     */
    protected function create(array $data)
    {
        return User::create([
            #'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
           
            'nombres' =>$data['nombres'],
            #'cédula' =>$data['cedula'],
            'apellidos' => $data['apellidos'],
           # 'cargo' => $data['cargo'];
            #'nivel_educativo' => $data['nivel_educativo'];
            #'formación' => $data['formacion'];
            #'dirección' = $data['direccion'];
            
     #$nacimiento_ = Carbon::createFromFormat ('Y-m-d', $request->nacimiento);
     #echo($nacimiento_);
           # 'fecha_de_nacimiento' => $data['nacimiento'];
     #$vinculacion_ = Carbon::createFromFormat ('Y-m-d', $request->vinculacion);
            #'fecha_de_vinculación' = $data['vinculacion'];
            #'email = $request->email;


        ]);
    }
}
