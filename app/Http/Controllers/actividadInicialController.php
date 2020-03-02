<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use CBA\Cliente;
use CBA\User;
use CBA\ActividadInicial;
use Illuminate\Support\Facades\DB;


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

        $exist = DB::table('actividad_inicials')->where('paciente', $id)->exists();
        #return($exist);
        
        if ($exist !=1){

        $nuevoCliente= Cliente::findOrFail($id);
        $encargados= user::Where('estado','Activo');
        
        return view ('registroActividadInicial', compact("nuevoCliente"));
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
    {  $ds = implode(",", $request->get('desea_fisica'));
       $nuevoActividad = new ActividadInicial();
       $nuevoActividad->paciente=$request->miembro;
       $nuevoActividad->trabajos=$request->trabajos;
       $nuevoActividad->aun_fisica=$request->aun_fisica;
       $nuevoActividad->cual_fisica=$request->cual_fisica;
       $nuevoActividad->frecuencia_fisica=$request->frecuencia_fisica;
       $nuevoActividad->compañia_fisica=$request->compañia_fisica;
       $nuevoActividad->desea_fisica= $ds;
       $nuevoActividad->tiempo_libre=$request->tiempo_libre;
       $nuevoActividad->tiene_hobbies=$request->tiene_hobbies; 
       $nuevoActividad->cual_hobbies=$request->cual_hobbies;
       $nuevoActividad->compañia_recreacion=$request->compañia_recreacion;
       $nuevoActividad->quiere_realizar_recreacion= implode(",", $request->get('quiere_realizar_recreacion'));
       $nuevoActividad->observaciones=$request->observaciones;
       $nuevoActividad->evaluacion=$request->evaluacion; 
       $nuevoActividad->encargado=Auth::user()->id;
       $nuevoActividad->save();


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
        $exist = DB::table('actividad_inicials')->where('paciente', $id)->exists();
        
        if ($exist==1){
        $acti_Inicial = ActividadInicial::Where('paciente', $id)->first();
        $nuevoCliente= Cliente::findOrFail($id);
        $array_fisica=explode(",", $acti_Inicial->desea_fisica);
        $array_recreacion=explode("," , $acti_Inicial->quiere_realizar_recreacion);
        $b= in_array("Integraciones",$array_recreacion);
        echo (string)$b;
        return view ('Ver_ActividadInicial', compact("acti_Inicial", "nuevoCliente", "array_recreacion","array_fisica"));
        }

        else {
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
