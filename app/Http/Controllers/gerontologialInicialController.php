<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use CBA\Cliente;
use CBA\User;
use CBA\GerontologiaInicial;
use Illuminate\Support\Facades\DB;


class gerontologialInicialController extends Controller
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
        $exist = DB::table('gerontologia_inicials')->where('paciente', $id)->exists();
        #return($exist);
        
        if ($exist !=1){

        $nuevoCliente= Cliente::findOrFail($id);
       
        return view ('RegistroGerontologiaInicial', compact("nuevoCliente"));
        }

        else {
            return "Ya existe";
        }
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request->
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $nuevaGerontologia = new GerontologiaInicial();
        $nuevaGerontologia->paciente=$request->miembro;
        $participacion_total = $request->participacion_uno + $request->participacion_dos + $request->participacion_tres + $request->participacion_cuatro + $request->participacion_cinco + $request->participacion_seis + $request->participacion_siete + $request->participacion_ocho;
        $quehacer_total = $request->quehacer_uno + $request->quehacer_dos + $request->quehacer_tres + $request->quehacer_cuatro + $request->quehacer_cinco + $request->quehacer_seis + $request->quehacer_siete + $request->quehacer_ocho;
        $relacionarse_total = $request->relacionarse_uno + $request->relacionarse_dos + $request->relacionarse_tres + $request->relacionarse_cuatro + $request->relacionarse_cinco;
        $autocuidado_total = $request->autocuidado_uno + $request->autocuidado_dos + $request->autocuidado_tres + $request->autocuidado_cuatro;
        $movilidad_total = $request->movilidad_uno + $request->movilidad_dos + $request->movilidad_tres + $request->movilidad_cuatro + $request->movilidad_cinco;
        $geron_total = $request->cognicion_uno +  $request->cognicion_dos + $request->cognicion_tres + $request->cognicion_cuatro+ $request->cognicion_cinco + $request->cognicion_seis;
        $nuevaGerontologia->cognicion_uno=$request->cognicion_uno;
        $nuevaGerontologia->cognicion_dos=$request->cognicion_dos;
        $nuevaGerontologia->cognicion_tres=$request->cognicion_tres;
        $nuevaGerontologia->cognicion_cuatro=$request->cognicion_cuatro;
        $nuevaGerontologia->cognicion_cinco=$request->cognicion_cinco;
        $nuevaGerontologia->cognicion_seis=$request->cognicion_seis;
        $nuevaGerontologia->cognicion_total=$request->cognicion_total;
        $nuevaGerontologia->cognicion_total = $geron_total;
        $nuevaGerontologia->movilidad_uno=$request->movilidad_uno;
        $nuevaGerontologia->movilidad_dos=$request->movilidad_dos;
        $nuevaGerontologia->movilidad_tres=$request->movilidad_tres;
        $nuevaGerontologia->movilidad_cuatro=$request->movilidad_cuatro;
        $nuevaGerontologia->movilidad_cinco=$request->movilidad_cinco;
        $nuevaGerontologia->movilidad_total=$movilidad_total;
        $nuevaGerontologia->autocuidado_uno=$request->autocuidado_uno;
        $nuevaGerontologia->autocuidado_dos=$request->autocuidado_dos;
        $nuevaGerontologia->autocuidado_tres=$request->autocuidado_tres;
        $nuevaGerontologia->autocuidado_cuatro=$request->autocuidado_cuatro;
        $nuevaGerontologia->autocuidado_total=$autocuidado_total;
        $nuevaGerontologia->relacionarse_uno=$request->relacionarse_uno;
        $nuevaGerontologia->relacionarse_dos=$request->relacionarse_dos;
        $nuevaGerontologia->relacionarse_tres=$request->relacionarse_tres;
        $nuevaGerontologia->relacionarse_cuatro=$request->relacionarse_cuatro;
        $nuevaGerontologia->relacionarse_cinco=$request->relacionarse_cinco;
        $nuevaGerontologia->relacionarse_total= $relacionarse_total;
        $nuevaGerontologia->quehacer_uno=$request->quehacer_uno;
        $nuevaGerontologia->quehacer_dos=$request->quehacer_dos;
        $nuevaGerontologia->quehacer_tres=$request->quehacer_tres;
        $nuevaGerontologia->quehacer_cuatro=$request->quehacer_cuatro;
        $nuevaGerontologia->quehacer_cinco=$request->quehacer_cinco;
        $nuevaGerontologia->quehacer_seis=$request->quehacer_seis;
        $nuevaGerontologia->quehacer_siete=$request->quehacer_siete;
        $nuevaGerontologia->quehacer_ocho=$request->quehacer_ocho;
        $nuevaGerontologia->quehacer_total= $quehacer_total;
        $nuevaGerontologia->participacion_uno=$request->participacion_uno;
        $nuevaGerontologia->participacion_dos=$request->participacion_dos;
        $nuevaGerontologia->participacion_tres=$request->participacion_tres;
        $nuevaGerontologia->participacion_cuatro=$request->participacion_cuatro;
        $nuevaGerontologia->participacion_cinco=$request->participacion_cinco;
        $nuevaGerontologia->participacion_seis=$request->participacion_seis;
        $nuevaGerontologia->participacion_siete=$request->participacion_siete;
        $nuevaGerontologia->participacion_ocho=$request->participacion_ocho;
        $nuevaGerontologia->participacion_total=$participacion_total;
        $nuevaGerontologia->gerontologia_total=$participacion_total+$quehacer_total+$relacionarse_total+$autocuidado_total+$quehacer_total+$participacion_total+$movilidad_total;
        $nuevaGerontologia->encargado=Auth::user()->id;
        $nuevaGerontologia->save();
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
        $exist = DB::table('nutricional_inicials')->where('paciente', $id)->exists();

        if($exist==1){
        $geron_inicial = GerontologiaInicial::Where('paciente', $id)->first();
        $nuevoCliente= Cliente::findOrFail($id);
        return view ('Ver_GeronInicial', compact("geron_inicial", "nuevoCliente"));
        }

        else{
            return "No existe";
        }
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
     * @param  \Illuminate\Http\Request  $request->
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
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
