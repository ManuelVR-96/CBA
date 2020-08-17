<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use CBA\User;
use CBA\Especialidad;
use CBA\Cliente;
use CBA\notificacion;
use Auth;
use Illuminate\Support\Facades\DB;

class notificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $especialidad = Auth::user()->cargo;      
        $notificaciones = notificacion::where('especialidad', $especialidad)->orderBy('created_at', 'desc')->paginate(10);
        return view ('Consultar_Notificaciones', compact('notificaciones'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $posibles_encargados = User::where('estado','Activo');
        $encargados = Auth::user();
        $especialidades = Especialidad::all();     
        $miembros= Cliente::findOrFail($id);
        return view('RegistroNotificacion', compact('posibles_encargados', 'encargados', 'especialidades', 'miembros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoNotificacion = new notificacion();
        #return($request->miembro);
        $nuevoNotificacion->paciente= $request->miembro;
        $nuevoNotificacion->remite= Auth::user()->id;
        $nuevoNotificacion->especialidad= $request->especialidad;
        $nuevoNotificacion->descripción=$request->descripcion;
        $nuevoNotificacion->save();
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
        $notificacion = notificacion::where('id', $id)->first();
        $notificacion->vista=True;
        $notificacion->save();
        return view('Ver_Notificacion', compact('notificacion'));
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
