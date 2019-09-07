<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use CBA\Valoracion;
use CBA\User;
use CBA\Especialidad;
use CBA\Cliente;
use Carbon\Carbon;

class ValoracionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valoraciones = Valoracion::orderBy('paciente', 'ASC')->paginate(2);
        return view('vistaValoracion', compact ('valoraciones'));
    }

    public function busqueda(Request $request)
    {  
        $entrada= $request->busqueda;
        $tipo = $request->tipo_busqueda;
        if ($tipo=="Encargado")
        {
            if ($entrada=='')                
            {
                $valoraciones = Valoracion::orderBy('encargado->nombres', 'ASC')->paginate(2);
            }
            else 
            {                
                $valoraciones = Valoracion::whereHas('encargado_', function($query) use($entrada){
                $query->where('nombres', 'like', '%' . $entrada . '%');
                })->paginate(2);
            }
        }

        elseif ($tipo=="Especialidad")
        {
            if ($entrada==''){
                $valoraciones = Valoracion::orderBy('especialidad->Nombre', 'ASC')->paginate(2);
            }
            else 
            {                
                $valoraciones = Valoracion::whereHas('especialidad_', function($query) use($entrada){
                $query->where('Nombre', 'like', '%' . $entrada . '%');
                })->paginate(2);
            }
        }

        elseif ($tipo=="Nombre paciente")
        {
            if ($entrada==''){
                $valoraciones = Valoracion::orderBy('paciente->nombres', 'ASC')->paginate(2);
            }
            else 
            {                
                $valoraciones = Valoracion::whereHas('miembro_', function($query) use($entrada){
                $query->where('nombres', 'like', '%' . $entrada . '%');
                })->paginate(2);
            }
        }

        else
        {
            $valoraciones = Valoracion::where('paciente', $entrada)->paginate(2);  
        }
            return view('vistaValoracion', compact ('valoraciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $encargados = user::all();
        $especialidades = Especialidad::all();
        $miembros = Cliente::all();
        return view ('registro_valoracion', compact("encargados", "especialidades", "miembros"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $nuevoValoracion = new Valoracion();
        $nuevoValoracion->paciente= $request->miembro;
        $nuevoValoracion->encargado= $request->encargado;
        $nuevoValoracion->especialidad= $request->especialidad;
        $nuevoValoracion->descripción=$request->descripcion;
        $nuevoValoracion->save();
        return back()->with ('mensaje','Valoracion agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $valoraciones= Valoracion::findOrFail($id);

        return view('perfilValoracion', compact('valoraciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $encargados = user::all();
        $especialidades = Especialidad::all();
        $miembros = Cliente::all();        
        $valoracion = Valoracion::findOrFail($id);

        return view('actualizarValoracion', compact('encargados', 'especialidades', 'miembros', 'valoracion'));
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
        $Valoracion = Valoracion::findOrFail($id);
        $Valoracion->paciente = $request->miembro;
        $Valoracion->encargado = $request->encargado;
        $Valoracion->especialidad = $request->especialidad;
        $Valoracion->descripción = $request->descripcion;
        $Valoracion->save();

        return back()->with('mensaje', 'Valoracion agregada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valoracion = Valoracion::findOrFail($id);
        $valoracion->delete();
        $valoracion = Valoracion::orderBy('paciente', 'ASC')->paginate(2);
        return redirect()->to('/valoraciones');
    }
}
