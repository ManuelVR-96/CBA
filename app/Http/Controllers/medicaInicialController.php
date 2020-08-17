<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use CBA\Cliente;
use CBA\User;
use CBA\MedicinaInicial;
use Illuminate\Support\Facades\DB;

class medicaInicialController extends Controller
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
    $exist = DB::table('medicina_inicials')->where('paciente', $id)->exists();    
        
        if ($exist !=1){

            $nuevoCliente= Cliente::findOrFail($id);       
            return view ('RegistroMedicinaInicial', compact("nuevoCliente"));
        }

        else 
        {
            return view ('ValoracionExiste');
        }    
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $nuevoMedica = new MedicinaInicial();
        $nuevoMedica->paciente = $request->miembro;
        $nuevoMedica->antecedentes_patologicos = $request->antecedentes_patologicos;
        $nuevoMedica->morbilidad_actual = $request->morbilidad_actual;
        $nuevoMedica->consumo_medicinas = $request->consumo_medicinas;
        $nuevoMedica->signos_vitales = $request->signos_vitales;
        $nuevoMedica->resumen_fisico = $request->resumen_fisico;
        $nuevoMedica->diagnostico = $request->diagnostico;
        $nuevoMedica->conducta = $request->conducta;
        $nuevoMedica->encargado= Auth::user()->id;
        $nuevoMedica->save();       
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
        $exist = DB::table('medicina_inicials')->where('paciente', $id)->exists();
        if($exist==1){
        $medica_inicial = MedicinaInicial::Where('paciente', $id)->first();
        $nuevoCliente= Cliente::findOrFail($id);
        return view ('Ver_MedicaInicial', compact("medica_inicial", "nuevoCliente"));
        }
        else{
            return view ('ValoracionNoExiste');
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
