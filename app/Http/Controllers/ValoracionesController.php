<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use CBA\Valoracion;

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
        return view ('registro_valoracion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoValoracion = new Valoracion();
        $nuevoValoracion->cédula= $request->id;
        $nuevoValoracion->médica=$request->medica;
        $nuevoValoracion->fisioterapeuta=$request->fisio;
        $nuevoValoracion->nutricionista=$request->nutricionista;
        $nuevoValoracion->psicologo=$request->psicologo;
        $nuevoValoracion->enfermera=$request->enfermera;
        $nuevoValoracion->profesional_deporte=$request->profesional_deporte;
        $nuevoValoracion->religiosas=$request->religiosas;
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
