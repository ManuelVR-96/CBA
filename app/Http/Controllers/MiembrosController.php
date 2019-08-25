<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;

use CBA\Cliente;
use Carbon\Carbon;

class MiembrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = Cliente::orderBy('nombres', 'ASC')->paginate(2);
        return view('consultarUser2', compact ('users')); 
    }

    public function busqueda(Request $request)
    {  
        $nombre= $request->busqueda;
        if ($nombre==''){
            $users = Cliente::orderBy('nombres', 'ASC')->paginate(2);
            }
            else {
                
                $users = Cliente::where('nombres', $nombre)->paginate(2);
            }
            return view('consultarUser2', compact ('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request ->validate ([
        //     'nombres'=>'required',
        //     'cédula' =>'required'
        // ]);
        $nuevoCliente = new Cliente();
        $nuevoCliente->cédula = $request->id;
         $nuevoCliente->nombres = $request->nombres;
         $nuevoCliente->apellidos = $request->apellidos;
         $nuevoCliente->nivel_educativo = $request->nivel;
         $nuevoCliente->dirección = $request->direccion;
         $nuevoCliente->telefono = $request->telefono;
         $nuevoCliente->Lugar_de_nacimiento = $request->lugar;
         $nacimiento_ = Carbon::createFromFormat ('Y-m-d', $request->nacimiento);
         $nuevoCliente->fecha_de_nacimiento = $nacimiento_;
         $vinculacion_ = Carbon::createFromFormat ('Y-m-d', $request->vinculacion);
         $nuevoCliente->fecha_de_ingreso = $vinculacion_;
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
    
            return back()->with ('mensaje','Abuelo agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user= Cliente::findOrFail($id);

        return view('perfilMiembro', compact('user'));
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
        $user = Cliente::findOrFail($id);
        $user->delete();
        $users = Cliente::orderBy('nombres', 'ASC')->paginate(2);

        return redirect()->to('/miembros');

    }
}
