<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use CBA\Valoracion;
use CBA\User;
use CBA\Especialidad;
use CBA\Cliente;
use Carbon\Carbon;
use Auth;

class ValoracionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $valoraciones = Valoracion::orderBy('paciente', 'ASC')->paginate(10);
        return view('Valoraciones/vistaValoracion', compact ('valoraciones'));
    }

    public function busqueda(Request $request)
    {  
        $entrada= $request->busqueda;
        $tipo = $request->tipo_busqueda;
        if ($tipo=="Encargado"){
            if ($entrada=='')                {
                $valoraciones = Valoracion::orderBy('encargado->nombres', 'ASC')->paginate(10);
            }
            else{                
                $valoraciones = Valoracion::whereHas('encargado_', function($query) use($entrada){
                $query->where('nombres', 'like', '%' . $entrada . '%');
                })->paginate(10);
            }
        }

        elseif ($tipo=="Especialidad"){
            if ($entrada==''){
                $valoraciones = Valoracion::orderBy('especialidad->Nombre', 'ASC')->paginate(10);
            }
            else{                
                $valoraciones = Valoracion::whereHas('especialidad_', function($query) use($entrada){
                $query->where('Nombre', 'like', '%' . $entrada . '%');
                })->paginate(10);
            }
        }

        elseif ($tipo=="Nombre paciente"){
            if ($entrada==''){
                $valoraciones = Valoracion::orderBy('paciente->nombres', 'ASC')->paginate(10);
            }
            else{                
                $valoraciones = Valoracion::whereHas('miembro_', function($query) use($entrada){
                $query->where('nombres', 'like', '%' . $entrada . '%');
                })->paginate(10);
            }
        }

        else{
            $valoraciones = Valoracion::where('paciente', $entrada)->paginate(10);  
        }
            return view('Valoraciones/vistaValoracion', compact ('valoraciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id){

        $posibles_encargados = User::all();
        $encargados = Auth::user();
        $especialidades = Especialidad::all();        
        $miembros= Cliente::findOrFail($id);
        return view ('Valoraciones/registro_valoracion', compact("encargados", "especialidades", "miembros"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $nuevoValoracion = new Valoracion();
        $nuevoValoracion->paciente= $request->miembro;
        $nuevoValoracion->encargado= Auth::user()->id;
        $nuevoValoracion->especialidad= Auth::user()->cargo;
        $nuevoValoracion->descripción=$request->descripcion;
        $nuevoValoracion->save();
        return back()->with ('mensaje','Valoracion agregada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $valoraciones= Valoracion::findOrFail($id);
        return view('Valoraciones/perfilValoracion', compact('valoraciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        $encargados = Auth::user();
        $especialidades = Especialidad::all();
        $miembros = Cliente::Where('estado','Activo');        
        $valoracion = Valoracion::findOrFail($id);
        return view('Valoraciones/actualizarValoracion', compact('encargados', 'especialidades', 'miembros', 'valoracion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $Valoracion = Valoracion::findOrFail($id);
        $Valoracion->paciente = $request->miembro;
        $Valoracion->actualizado = Auth::user()->id;
        $Valoracion->especialidad = Auth::user()->cargo;
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
    public function destroy($id){
        
        $valoracion = Valoracion::findOrFail($id);
        $valoracion->delete();
        $valoracion = Valoracion::orderBy('paciente', 'ASC')->paginate(10);
        return redirect()->to('/valoraciones');
    }
}
