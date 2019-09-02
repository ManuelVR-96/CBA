<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use CBA\Valoracion;
use CBA\User;
use CBA\Especialidad;
use CBA\Cliente;

class ValoracionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $encargados= user::all();
        $especialidades= Especialidad::all();
        $miembros= Cliente::all();
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
        $nuevoValoracion->Descripción=$request->descripcion;
        // $nuevoValoracion->fisioterapeuta=$request->fisio;
        // $nuevoValoracion->nutricionista=$request->nutricionista;
        // $nuevoValoracion->psicologo=$request->psicologo;
        // $nuevoValoracion->enfermera=$request->enfermera;
        // $nuevoValoracion->profesional_deporte=$request->profesional_deporte;
        // $nuevoValoracion->religiosas=$request->religiosas;
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
        //
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
        //
    }
}
