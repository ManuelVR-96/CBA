<?php

namespace CBA\Http\Controllers\Auth;

use CBA\User;
use CBA\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;


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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //  public function __construct()
    //  {
    //      $this->middleware('admin');
    //  }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombres' => ['required', 'string','alpha', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            
           
        

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
        
            'email' => $data['email'],
            'password' => Hash::make($data['password']),           
            'nombres' =>$data['nombres'],
            'cedula' =>$data['id'],
            'apellidos' =>$data['apellidos'],
            'cargo' => $data['cargo'],
            'nivel_educativo' =>$data['nivel'],
            'formación' =>$data['formacion'],
            'dirección' =>$data['direccion'],
            'telefono' =>$data['telefono'],
            'rol' =>$data['perfil'],
            
     #$nacimiento_ = Carbon::createFromFormat ('Y-m-d', $request->nacimiento);
     #echo($nacimiento_);
        'fecha_de_nacimiento' => $data['nacimiento'],
     #$vinculacion_ = Carbon::createFromFormat ('Y-m-d', $request->vinculacion);
        'fecha_de_vinculación' => $data['vinculacion'],
           


        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        #$this->guard()->login($user); // <- it's actually this line login the fresh user

    return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }
}
