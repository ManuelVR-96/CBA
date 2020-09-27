<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use CBA\Cliente;
use CBA\programa_cliente;
use CBA\Programa;

class listaProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        return view('Programas/Agregar_Miembros');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_programa){

        $programa= Programa::Where('id',$id_programa)->first();
        $miembros= Cliente::Where('estado', 'Activo')->get();
        $miembros_vinculados_ = programa_cliente::where('programa', $id_programa)->get(['paciente'])->toArray();
        $miembros_vinculados = [];
        foreach($miembros_vinculados_ as $array){

            $miembros_vinculados2 = array_values($array);
            
            foreach($miembros_vinculados2 as $value){
                array_push($miembros_vinculados, $value);
            }

        }
        

        #return (string)in_array(1, $miembros_vinculados);
        return view('Programas/Agregar_Miembros', compact ('programa', 'miembros', 'miembros_vinculados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $miembros=$request->miembros;
        $programa = $request->programa;
        $miembros_vinculados_ = programa_cliente::where('programa', $programa)->get(['paciente'])->toArray();
        $miembros_vinculados = [];

        foreach($miembros_vinculados_ as $array){
            $miembros_vinculados2 = array_values($array);
            foreach($miembros_vinculados2 as $value){
                array_push($miembros_vinculados, $value);
            }
        }

        if (!empty($miembros)){

            foreach($miembros as $miembro){
                print($miembro);
                if(!in_array($miembro, $miembros_vinculados)){
                $vinculacion= new programa_cliente();
                $vinculacion->programa=$programa;
                $vinculacion->paciente=$miembro;
                $vinculacion->save();
                }
            }
         }
        
 
        if(empty($miembros)){
            $borrar = programa_cliente::where('programa', $programa);
            $borrar->delete();
        }
        else{

            foreach($miembros_vinculados as $miembro){

                if(!in_array($miembro, $miembros)){
                    $borrar = programa_cliente::where('programa', $programa)->where('paciente', $miembro);
                    $borrar->delete();
                }
            }
        }
        return back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }
}
