<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use CBA\Cliente;
use CBA\User;
use CBA\NutricionalInicial;

class actividadInicialController extends Controller
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
    public function create($id)
    {
        $nuevoCliente= Cliente::findOrFail($id);
        
        return view ('registroActividadInicial', compact("nuevoCliente"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $nuevoFisica = new ActividadInicial();
        $nuevoFisica->tiempo_libre = $request->tiempo_libre;
        $nuevoFisica->tiene_hobbies = $request->tiene_hobbies;
        $nuevoFisica->aun_practica = $request->aun_practica;
        $nuevoFisica->cual_hobbies = $request->cual_hobbies;
        $nuevoFisica->compañia_hobbies = $request->compañia_hobbies;
        $nuevoFisica->cual_hobbies = $request->actividades;
        $nuevoFisica->cual_hobbies = $request->trabajos;
        $nuevoFisica->cual_hobbies = $request->aun_fisica;
        $nuevoFisica->cual_hobbies = $request->cual_fisica;
        $nuevoFisica->cual_hobbies = $request->frecuencia_fisica;
        $nuevoFisica->compañia_hobbies = $request->compañia_fisica;
        $nuevoFisica->desea_fisica = $request->desea_fisica;
        $nuevoFisica->observaciones_actfi = $request->observaciones_actfi;
        $nuevoFisica->evaluacion= $request->evaluacion;
        $nuevoFisica->encargado= Auth::user()->id;
        $nuevoDelta->save();
       
        return back();

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
