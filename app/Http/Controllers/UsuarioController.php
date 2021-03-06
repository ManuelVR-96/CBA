<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use CBA\User;
use CBA\Especialidad;
use Carbon\Carbon;
use Image;
use Route;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){   
        
        $route = Route::currentRouteName();
        $users = User::Where('estado', 'Activo')->orderBy('nombres', 'ASC')->paginate(10);
        return view('Usuarios/consultarUser', compact ('users', 'route')); 
    }

    public function inactivos(){   
        
        $route = Route::currentRouteName();
        $users = User::where('estado', 'inactivo')->orderBy('nombres', 'ASC')->paginate(10); 
        return view('Usuarios/consultarUser', compact ('users', 'route')); 
    }

    public function busqueda(Request $request){

        $route = Route::currentRouteName();
        $entrada= $request->busqueda;
        $tipo = $request->tipo_busqueda;
        if ($tipo=="Nombre"){
            if ($entrada==''){
                $users = User::Where('estado', 'Activo')->orderBy('nombres', 'ASC')->paginate(10);
                }
                else {
                    
                    $users = User::Where('estado', 'Activo')->where('nombres', 'like', '%' . $entrada . '%')->paginate(10);
                }
        }

        elseif ($tipo=="Cédula"){
            if ($entrada==''){
            $users = User::Where('estado', 'Activo')->orderBy('cedula', 'ASC')->paginate(10);
            }
            else {
                
                $users = User::Where('estado', 'Activo')->where('cedula', $entrada)->paginate(10);
            }
        }

        elseif ($tipo=="Apellidos"){
            if ($entrada==''){
            $users = User::Where('estado', 'Activo')->orderBy('apellidos', 'ASC')->paginate(10);
            }
            else {
                
                $users = User::Where('estado', 'Activo')->where('apellidos', 'like', '%' . $entrada . '%')->paginate(10);
            }
        }

        else{
                $users = User::Where('estado', 'Activo')->where('nombres', $entrada)->paginate(10);    
        }
            return view('Usuarios/consultarUser', compact ('users', 'route'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){   
        
        $especialidades = Especialidad::all();
        return view ('auth.register', compact('especialidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $nuevoOp = new User();

        if($request->hasFile('avatar')){
            return ("hola");
            $avatar = $request->file('avatar');
            $filename = time().'.' . $avatar->guessExtension();
            Image::make($avatar)->resize(130,130)->save(public_path('/uploads/avatar/' . $filename));
            $nuevoOp->avatar = $filename;
        }        
        $nuevoOp->cedula = $request->id;
        $nuevoOp->nombres = $request->nombres;
        $nuevoOp->apellidos = $request->apellidos;
        $nuevoOp->cargo = $request->cargo;
        $nuevoOp->nivel_educativo = $request->nivel;
        $nuevoOp->formación = $request->formacion;
        $nuevoOp->dirección = $request->direccion;
        $nacimiento_ = Carbon::createFromFormat ('Y-m-d', $request->nacimiento);echo($nacimiento_);
        $nuevoOp->fecha_de_nacimiento = $nacimiento_;
        $vinculacion_ = Carbon::createFromFormat ('Y-m-d', $request->vinculacion);
        $nuevoOp->fecha_de_vinculación = $vinculacion_;
        $nuevoOp->telefono = $request->telefono;
        $nuevoOp->rol = $request->perfil;
        $nuevoOp->email = $request->email;
        $nuevoOp->contraseña = $request->password;
        $nuevoOp->save();
        return back()->with ('mensaje','Operador agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $user= User::findOrFail($id);

        return view('Usuarios/perfilUsuario', compact('user'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        $usuario = User::findOrFail($id);

        return view('Usuarios/actualizarUsuarios', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $nuevoOp = User::findOrFail($id);
                
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().'.' . $avatar->guessExtension();
            Image::make($avatar)->resize(130,130)->save(public_path('/uploads/avatar/' . $filename));
            $nuevoOp->avatar = $filename;           
        }
        $nuevoOp->cedula = $request->id;
        $nuevoOp->nombres = $request->nombres;
        $nuevoOp->apellidos = $request->apellidos;
        $nuevoOp->cargo = $request->cargo;
        $nuevoOp->nivel_educativo = $request->nivel;
        $nuevoOp->formación = $request->formacion;
        $nuevoOp->dirección = $request->direccion;        
        $nacimiento_ = Carbon::createFromFormat ('Y-m-d', $request->nacimiento);
        echo($nacimiento_);
        $nuevoOp->fecha_de_nacimiento = $nacimiento_;
        $vinculacion_ = Carbon::createFromFormat ('Y-m-d', $request->vinculacion);
        $nuevoOp->fecha_de_vinculación = $vinculacion_;
        $nuevoOp->telefono = $request->telefono;
        $nuevoOp->rol = $request->perfil;
        $nuevoOp->email = $request->email;
        if(!empty($request->password)) {
            $nuevoOp->password = bcrypt($request->password);
           
        }      
        $nuevoOp->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        $user = User::findOrFail($id);
        if($user->estado=='Activo'){
        $user->estado = 'Inactivo';
        }
        else{
            $user->estado='Activo';
        }
        $user->save();
        return redirect()->to('/usuarios');
        
    }
}
