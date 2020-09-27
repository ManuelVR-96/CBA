<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use CBA\planEstrategico;
use Auth;
use Illuminate\Support\Facades\DB;


class estrategicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
        $planes = planEstrategico::orderBy('created_at', 'ASC')->paginate(10);
        return view('Planes/ConsultarPlanes', compact('planes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        return view('Planes/RegistroPlanEstrategico');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $nuevoEstrategico = new planEstrategico();
        $nuevoEstrategico->titulo=$request->titulo;
        $nuevoEstrategico->descripcion=$request->descripcion;
        $nuevoEstrategico->creador = Auth::user()->id;
        if($request->hasFile('archivo')){
            $file = $request->file('archivo');
            $nombre = $file->getClientOriginalName();
            \Storage::disk('local')->put($nombre,  \File::get($file));
            $nuevoEstrategico->archivo = $nombre;
        }
        $nuevoEstrategico->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        
        $plan= planEstrategico::Where('id', $id)->first();

        if($plan->archivo==""){
            $has_file = "no";
        }
        else{
            $has_file = "si";
        }
       
        return view ('Planes/Ver_PlanEstrategico', compact('has_file','plan'));
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        $plan = planEstrategico::Where('id', $id)->first();
        return view('Planes/actualizarPlanEstrategico', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        
        $plan = planEstrategico::Where('id', $id)->first();
        $plan->titulo=$request->titulo;
        $plan->descripcion=$request->descripcion;
        $plan->actualizado_por = Auth::user()->id;
        if($request->hasFile('archivo')){
            $file = $request->file('archivo');
           $nombre = $file->getClientOriginalName();
           \Storage::disk('local')->put($nombre,  \File::get($file));
           $plan->archivo = $nombre;
            }
        $plan->save();
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
        //
    }
}
