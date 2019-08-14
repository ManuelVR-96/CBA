<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;

class MiembrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        //
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
