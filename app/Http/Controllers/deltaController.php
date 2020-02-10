<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use CBA\Cliente;
use CBA\User;
use CBA\testDelta;


class deltaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        #$encargados = user();
        $nuevoCliente= Cliente::findOrFail($id);
        
        return view ('registroDeltaValoraciones', compact("nuevoCliente"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $nuevoDelta = new testDelta();
        $nuevoDelta->dependencia_movilizacion = $request->dependencia_movilizacion;
        $nuevoDelta->dependencia_deambulacion = $request->dependencia_deambulacion;
        $nuevoDelta->dependencia_aseo = $request->dependencia_aseo;
        $nuevoDelta->dependencia_vestido = $request->dependencia_vestido;
        $nuevoDelta->dependencia_alimentacion = $request->dependencia_alimentacion;
        $nuevoDelta->dependencia_esfinteriana = $request->dependencia_esfinteriana;
        $nuevoDelta->dependencia_tratamientos = $request->dependencia_tratamientos;
        //$nuevoDelta->encargado_enfermeria = $request->encargado_enfermeria;
        $nuevoDelta->cuidados_enfermeria = $request->cuidados_enfermeria; 
        $nuevoDelta->necesidad_vigilancia = $request->necesidad_vigilancia;
        $nuevoDelta->colaboracion = $request->colaboracion;
        $nuevoDelta->total_dependencia_general = $request->total_dependencia_general;
        $nuevoDelta->descripcion_dependencia = $request->descripcion_dependencia;
        $nuevoDelta->fisica_estabilidad = $request->fisica_estabilidad;
        $nuevoDelta->vision_audicion = $request->vision_audicion;
        $nuevoDelta->fisica_locomotor = $request->fisica_locomotor;
        $nuevoDelta->fisica_neurologicas = $request->fisica_neurologicas;
        $nuevoDelta->fisica_cardiovascular = $request->fisica_cardiovascular;
        $nuevoDelta->total_deficiencia_fisica = $request->total_deficiencia_fisica;
        $nuevoDelta->descripcion_fisica = $request->descripcion_fisica;
        $nuevoDelta->encargado_fisica = $request->encargado_fisica;
        $nuevoDelta->lenguaje_comprension = $request->lenguaje_comprension;
        $nuevoDelta->orientacion_memoria = $request->orientacion_memoria;
        $nuevoDelta->trastorno_comportamiento = $request->trastorno_comportamiento;
        $nuevoDelta->capacidad_juicio = $request->capacidad_juicio;
        $nuevoDelta->alteracion_sueño = $request->alteracion_sueño;
        $nuevoDelta->total_deficiencia_psiquica = $request->total_deficiencia_psiquica;
        //$nuevoDelta->encargado_psiquica = $request->encargado_psiquica;
        $nuevoDelta->descripcion_psiquica = $request->descripcion_psiquica;
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
