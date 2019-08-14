<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Carbon\Carbon;
class PageControler extends Controller
{
    public function welcome(){
    	return view ('inicio');
    }

   /* public function inicio() {
    return view ('inicio');
    }*/

    public function registro() {
   	 return view ('registro');
    }

    public function registrar_op(Request $request) {
    $request ->validate ([
    	'nombres'=>'required',
    	'cedula' =>'required'
    ]);
   	 $nuevoOp = new CBA\Operador;
   	 $nuevoOp->nombres = $request->nombres;
   	 $nuevoOp->cédula = $request->cedula;
	 $nuevoOp->apellidos = $request->apellidos;
	 $nuevoOp->cargo = $request->cargo;
	 $nuevoOp->nivel_educativo = $request->nivel;
	 $nuevoOp->formación = $request->formacion;
	 $nuevoOp->dirección = $request->direccion;
	 $nuevoOp->contraseña = $request->password;
	 $nacimiento_ = Carbon::createFromFormat ('Y-m-d', $request->nacimiento);
	 echo($nacimiento_);
	 $nuevoOp->fecha_de_nacimiento = $nacimiento_;
	 $vinculacion_ = Carbon::createFromFormat ('Y-m-d', $request->vinculacion);
	 $nuevoOp->fecha_de_vinculación = $vinculacion_;
	 $nuevoOp->email = $request->email;
	 //$nuevoOp->is_admin;
	 //$nuevoOp->telefono = $request->;

   	 $nuevoOp->save();

   	 return back()->with ('mensaje','Operador agregado correctamente');
    }

 	public function registro_user(Request $request) {
   	 return view ('registro');
    }

    public function registrar_user(Request $request) {
    $request ->validate ([
    	'nombres'=>'required',
    	'cedula' =>'required'
    ]);
   	 $nuevoCliente = new CBA\Cliente;
   	 $nuevoCliente->cédula = $request->cedula;
     $nuevoCliente->nombres = $request->nombres;
     $nuevoCliente->apellidos = $request->apellidos;
     $nuevoCliente->nivel_educativo = $request->nivel_educativo;
     $nuevoCliente->dirección = $request->direccion;
     $nuevoCliente->telefono = $request->telefono;
     $nuevoCliente->Lugar_de_nacimiento = $request->Lugar_de_nacimiento;
     $nacimiento_ = Carbon::createFromFormat ('Y-m-d', $request->fecha_de_nacimiento);
     $nuevoCliente->fecha_de_nacimiento = $nacimiento_;
     $vinculacion_ = Carbon::createFromFormat ('Y-m-d', $request->fecha_de_ingreso);
     $nuevoCliente->fecha_de_ingreso = $request->vinculacion;
     $nuevoCliente->seguridad_social = $request->seguridad_social;
     $nuevoCliente->primer_acudiente = $request->primer_acudiente;
     $nuevoCliente->segundo_acudiente = $request->segundo_acudiente;
     $nuevoCliente->servicio_funerario = $request->servicio_funerario;
     $nuevoCliente->entidad_funeraria = $request->entidad_funeraria;
     $nuevoCliente->dependencia_económica = $request->dependencia_económica;
     $nuevoCliente->dependencia_afectiva = $request->dependencia_afectiva;
     $nuevoCliente->relación_familiar = $request->relación_familiar;
     $nuevoCliente->hobbies = $request->hobbies;
     $nuevoCliente->motivo_ingreso = $request->motivo_ingreso;
     $nuevoCliente->Tipo_Sangre = $request->Tipo_Sangre;
     $nuevoCliente->EPS = $request->EPS;
     $nuevoCliente->morbilidad = $request->morbilidad;
     $nuevoCliente->género = $request->genero;
     $nuevoCliente->medicinas = $request->medicinas;

   	 $nuevoCliente->save();

   	 return back()->with ('mensaje','Cliente agregado correctamente');
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
