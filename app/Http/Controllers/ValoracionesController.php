<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use CBA\Valoracion;
use CBA\User;
use CBA\Especialidad;
use CBA\Cliente;
use Carbon\Carbon;

class ValoracionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Valoracion::orderBy('paciente', 'ASC')->paginate(2);
        return view('vistaValoracion', compact ('users'));
    }

    public function busqueda(Request $request)
    {
        $nombre= $request->busqueda;
        if ($nombre==''){
            $users = Valoracion::orderBy('paciente', 'ASC')->paginate(2);
            }
            else {

                $users = Valoracion::where('paciente', $nombre)->paginate(2);
            }
            return view('vistaValoracion', compact ('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $encargados = User::all();
        $especialidades = Especialidad::all();
        $miembros = Cliente::all();
        return view ('registro_valoracion', compact("encargados", "especialidades", "miembros"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   #return $request;
        $nuevoValoracion = new Valoracion();
        $nuevoValoracion->paciente= $request->miembro;
        $nuevoValoracion->encargado= $request->encargado;
        $nuevoValoracion->especialidad= $request->especialidad;
        $nuevoValoracion->descripción=$request->descripcion;
        $nuevoValoracion->save();
        return back()->with ('mensaje','Valoracion agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user= Valoracion::findOrFail($id);
        return view('perfilValoracion', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $valoracion = Valoracion::findOrFail($id);
        return view('actualizarValoracion', compact('valoracion'));
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
        $miembro = Valoracion::findOrFail($id);
        $miembro->paciente = $request->miembro;
        $miembro->encargado = $request->encargado;
        $miembro->especialidad = $request->especialidad;
        $miembro->descripción = $request->descripcion;
        $miembro->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Valoracion::findOrFail($id);
        $user->delete();
        $users = Valoracion::orderBy('paciente', 'ASC')->paginate(2);
        return redirect()->to('/valoraciones');
    }
}
