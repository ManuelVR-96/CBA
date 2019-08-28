<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use CBA\User;
use Carbon\Carbon;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = User::orderBy('nombres', 'ASC')->paginate(2);
        return view('consultarUser', compact ('users')); 
    }

    public function busqueda(Request $request)
    {  
        $nombre= $request->busqueda;
        if ($nombre==''){
            $users = User::orderBy('nombres', 'ASC')->paginate(2);
            }
            else {
                
                $users = User::where('nombres', $nombre)->paginate(2);
            }
            return view('consultarUser', compact ('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate ([
            'nombres'=>'required',
            'cedula' =>'required'
        ]);
        $nuevoOp = new CBA\User;        
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
        $nuevoOp->perfil = $request->perfil;
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
    public function show($id)
    {
        $user= User::findOrFail($id);

        return view('perfilUsuario', compact('user'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $users = User::orderBy('nombres', 'ASC')->paginate(2);

        return redirect()->to('/usuarios');
    }
}
