<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use CBA\Cliente;
use CBA\seguimiento_miembro;
use CBA\test_delta;
use Carbon\Carbon;
use Image;
use Route;
use CBA\Http\Requests\MiembroStoreRequest;

class MiembrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){   
        
        $route = Route::currentRouteName();
        $users = Cliente::where('estado', 'activo')->orderBy('nombres', 'ASC')->paginate(10);
        
        return view('Miembros/consultarMiembro', compact ('users', 'route')); 
    }

    public function inactivos(){   
        
        $route = Route::currentRouteName();
        $users = Cliente::where('estado', 'inactivo')->orderBy('nombres', 'ASC')->paginate(10);
        
        return view('Miembros/consultarMiembro', compact ('users', 'route')); 
    }

    public function busqueda(Request $request){

        $route = Route::currentRouteName();
        $entrada= $request->busqueda;
        $tipo = $request->tipo_busqueda;
        $route = Route::currentRouteName();
        if ($tipo=="Nombre"){
            if ($entrada==''){
                $users = Cliente::where('estado', 'activo')->orderBy('nombres', 'ASC')->paginate(10);
                }
            else {    
                    $users = Cliente::where('estado', 'activo')->where('nombres', 'like', '%' . $entrada . '%')->paginate(10);
            }
        }

        elseif ($tipo=="Cédula"){
            if ($entrada==''){
            $users = Cliente::where('estado', 'activo')->orderBy('cédula', 'ASC')->paginate(10);
            }
            else {    
                $users = Cliente::where('estado', 'activo')->where('cédula', $entrada)->paginate(10);
            }
        }

        elseif ($tipo=="Apellidos"){
            if ($entrada==''){
            $users = Cliente::where('estado', 'activo')->orderBy('apellidos', 'ASC')->paginate(10);
            }
            else {
                $users = Cliente::where('estado', 'activo')->where('apellidos', 'like', '%' . $entrada . '%')->paginate(10);
            }
        }

        else{
                $users = Cliente::where('estado', 'activo')->where('nombres', $entrada)->paginate(10); 
        }        

        return view('Miembros/consultarMiembro', compact ('users', 'route'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('Miembros/registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MiembroStoreRequest $request){  
        $nuevoCliente = new Cliente();
        
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().'.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(130,130)->save(public_path('/uploads/avatar/' . $filename));
            $nuevoCliente->avatar = $filename;
        }
        $nuevoCliente->cédula = $request->cédula;
        $nuevoCliente->nombres = $request->nombres;
        $nuevoCliente->apellidos = $request->apellidos;
        $nuevoCliente->nivel_educativo = $request->nivel;
        $nuevoCliente->dirección = $request->direccion;
        $nuevoCliente->telefono = $request->telefono;
        $nuevoCliente->Lugar_de_nacimiento = $request->lugar;       
        $nuevoCliente->fecha_de_nacimiento = $request->nacimiento;       
        $nuevoCliente->fecha_de_ingreso = $request->vinculacion;
        $nuevoCliente->seguridad_social = $request->seguridad;
        $nuevoCliente->primer_acudiente = $request->primer_acudiente;
        $nuevoCliente->segundo_acudiente = $request->segundo_acudiente;
        $nuevoCliente->servicio_funerario = $request->servicio_funerario;
        $nuevoCliente->entidad_funeraria = $request->entidad_funeraria;
        $nuevoCliente->dependencia_económica = $request->dependencia_economica;
        $nuevoCliente->dependencia_afectiva = $request->dependencia_afectiva;
        $nuevoCliente->relación_familiar = $request->relacion_familiar;
        $nuevoCliente->hobbies = $request->hobbies;
        $nuevoCliente->motivo_ingreso = $request->motivo_ingreso;
        $nuevoCliente->Tipo_Sangre = $request->tipo_sangre;
        $nuevoCliente->EPS = $request->eps;
        $nuevoCliente->morbilidad = $request->morbilidad;
        $nuevoCliente->género = $request->genero;
        $nuevoCliente->medicinas = $request->medicinas;    
        $nuevoCliente->save();
        $nuevoSeguimiento = new seguimiento_miembro();
        $nuevoSeguimiento->paciente = $nuevoCliente->id;
        $nuevoDelta = new test_delta();
        $nuevoDelta->paciente = $nuevoCliente->id;        
        $nuevoSeguimiento->save();
        $nuevoDelta->save();

        return redirect()->route('Miembros/delta.edit', [$nuevoCliente]);

        #return  view('registroDelta', compact ($nuevoCliente));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $user= Cliente::findOrFail($id);
        return view('Miembros/perfilMiembro', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $miembro = Cliente::findOrFail($id);
        return view('Miembros/actualizarMiembros', compact('miembro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $miembro = Cliente::findOrFail($id);
        $miembro->cédula = $request->cédula;
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().'.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(130,130)->save(public_path('/uploads/avatar/' . $filename));
            $miembro->avatar = $filename;
        }
        $miembro->cédula = $request->cédula;
        $miembro->nombres = $request->nombres;
        $miembro->apellidos = $request->apellidos;
        $miembro->nivel_educativo = $request->nivel;
        $miembro->dirección = $request->direccion;
        $miembro->telefono = $request->telefono;
        $miembro->Lugar_de_nacimiento = $request->lugar;
        $nacimiento_ = Carbon::createFromFormat ('Y-m-d', $request->nacimiento);
        $miembro->fecha_de_nacimiento = $nacimiento_;
        $vinculacion_ = Carbon::createFromFormat ('Y-m-d', $request->vinculacion);
        $miembro->fecha_de_ingreso = $vinculacion_;
        $miembro->seguridad_social = $request->seguridad;
        $miembro->primer_acudiente = $request->primer_acudiente;
        $miembro->segundo_acudiente = $request->segundo_acudiente;
        $miembro->servicio_funerario = $request->servicio_funerario;
        $miembro->entidad_funeraria = $request->entidad_funeraria;
        $miembro->dependencia_económica = $request->dependencia_economica;
        $miembro->dependencia_afectiva = $request->dependencia_afectiva;
        $miembro->relación_familiar = $request->relacion_familiar;
        $miembro->hobbies = $request->hobbies;
        $miembro->motivo_ingreso = $request->motivo_ingreso;
        $miembro->Tipo_Sangre = $request->tipo_sangre;
        $miembro->EPS = $request->eps;
        $miembro->morbilidad = $request->morbilidad;
        $miembro->género = $request->genero;
        $miembro->medicinas = $request->medicinas;
        $miembro->save();
         return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        $user = Cliente::findOrFail($id);
        if($user->estado=='Activo'){
            $user->estado = 'Inactivo';
        }
        else{
            $user->estado='Activo';
        }
        $user->save();
        return redirect()->to('/miembros');

    }
}
