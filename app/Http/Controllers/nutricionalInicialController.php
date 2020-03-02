<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use CBA\Cliente;
use CBA\User;
use CBA\NutricionalInicial;
use Illuminate\Support\Facades\DB;


class nutricionalInicialController extends Controller
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
    $exist = DB::table('nutricional_inicials')->where('paciente', $id)->exists();
        #return((string)$exist);
        
        if ($exist !=1){

        $nuevoCliente= Cliente::findOrFail($id);
        $encargados= user::where('estado','Activo');
        
        return view ('registroNutricionInicial', compact("encargados", "nuevoCliente"));
        }

        else {
            return "Ya existe";
        }        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $nuevoNutricional = new NutricionalInicial();
        $nuevoNutricional->paciente = $request->miembro;
        $nuevoNutricional->cantidad_comida = $request->cantidad_comida;
        $nuevoNutricional->perdida_peso = $request->perdida_peso;
        $nuevoNutricional->movilidad = $request->movilidad;
        $nuevoNutricional->situacion_estres = $request->situacion_estres;
        $nuevoNutricional->problemas_neuropsicologicos = $request->problemas_neuropsicologicos;
        $nuevoNutricional->imc = $request->imc;
        $nuevoNutricional->pantorrila = $request->pantorrila;
        $nuevoNutricional->total_cribaje = $request->cantidad_comida + $request->perdida_peso + $request->movilidad + $request->situacion_estres + $request->problemas_neuropsicologicos + $request->imc;
        #$nuevoNutricional->encargado_nutricional = $request->encargado_nutricional;
        $nuevoNutricional->antecedentes_nutricionales = $request->antecedentes_nutricionales;
        $nuevoNutricional->consumo_alimentos = $request->consumo_alimentos;
        $nuevoNutricional->altura = $request->altura;
        $nuevoNutricional->circunferencia_muñeca = $request->circunferencia_muñeca;
        $nuevoNutricional->contextura = $request->contextura;
        $nuevoNutricional->peso_ideal = $request->peso_ideal;
        $nuevoNutricional->peso_actual = $request->peso_actual;
        $nuevoNutricional->hallazgos_clinicos = $request->hallazgos_clinicos;
        $nuevoNutricional->diagnosticos_nutricional = $request->diagnosticos_nutricional;  
        $nuevoNutricional->encargado= Auth::user()->id;
        $nuevoNutricional->save();       
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
        #return((string)$exist);
        
        if ($exist ==1){
        $nutricional_inicial = NutricionalInicial::Where('paciente', $id)->first();
        $nuevoCliente= Cliente::findOrFail($id);
        return view ('Ver_NutricionalInicial', compact("nutricional_inicial", "nuevoCliente"));
        }

        else {
            return "No existe registro!";
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
