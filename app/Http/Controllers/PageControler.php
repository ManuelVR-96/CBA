<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Carbon\Carbon;
class PageControler extends Controller
{   
    public function __construct()
{
    $this->middleware('auth');
}
    public function welcome(){
    	return view ('admin');
    }

    public function registro() {
   	 return view ('registro');
    }

  

 	public function registro_user(Request $request) {
   	 return view ('registro');
    }

    public function registrar_user(Request $request) {
   
    }

    public function agregar_programa(Request $request) {
   	 return view ('registro');
    }

    public function programa_form(Request $request) {
    $request ->validate ([
    	
    	'encargado' =>'required'
    ]);
   	 $nuevoPrograma = new CBA\Programa;
   	 $nuevoPrograma->agenda = $request->agenda;
   	 $nuevoPrograma->encargado = $request->encargado;
   	 $nuevoPrograma->save();

   	 return back()->with ('mensaje','Programa agregado correctamente');
    }

public function agregar_valoracion(Request $request) {
   	 return view ('registro');
    }

    public function valoracion_form(Request $request) {
    $request ->validate ([
    	
    	'encargado' =>'required'
    ]);
   	$nuevoValoracion = new CBA\Valoracion;
   	$nuevoValoracion->cédula= $request->cedula;
    $nuevoValoracion->médica=$request->medica;
    $nuevoValoracion->fisioterapeuta=$request->fisioterapeuta;
    $nuevoValoracion->nutricionista=$request->nutricionista;
    $nuevoValoracion->psicologo=$request->psicologo;
    $nuevoValoracion->enfermera=$request->enfermera;
    $nuevoValoracion->profesional_deporte=$request->profesional_deporte;
    $nuevoValoracion->religiosas=$request->religiosas;
   	$nuevoValoracion->save();

   	 return back()->with ('mensaje','Valoracion agregado correctamente');
    }


    
    public function login() {
    return view ('login');
    }

    public function admin() {
    return view ('admin');
    }
}
