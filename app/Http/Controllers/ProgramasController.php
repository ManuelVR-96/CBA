<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use CBA\User;
use CBA\Especialidad;
use CBA\Programa;
use Carbon\Carbon;
use Storage;

class ProgramasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = Programa::orderBy('nombre', 'ASC')->paginate(10);
        return view('vistaPrograma', compact ('programas'));
    }

    public function busqueda(Request $request)
    {  
        $entrada= $request->busqueda;
        $tipo = $request->tipo_busqueda;
        if ($tipo=="Encargado"){
        if ($entrada==''){
            $programas = Programa::orderBy('encargado->nombres', 'ASC')->paginate(10);
            }
            else {
                
                $programas = Programa::whereHas('encargado_', function($query) use($entrada){
                $query->where('Nombres', 'like', '%' . $entrada . '%');
                })->paginate(10);
            }
        }

        elseif ($tipo=="Nombre programa"){
            if ($entrada==''){
            $programas = Programa::orderBy('Nombre', 'ASC')->paginate(10);
            }
            else {
                
                $programas = Programa::where('Nombre', 'like', '%' . $entrada . '%')->paginate(10);
            }
        }

        elseif ($tipo=="Especialidad"){
            if ($entrada==''){
            $programas = Programa::orderBy('especialidad->Nombre', 'ASC')->paginate(10);
            }
            else {
                
                $programas = Programa::whereHas('especialidad_', function($query) use($entrada){
                    $query->where('Nombre', 'like', '%' . $entrada . '%');
                    })->paginate(10);
            }
        }

        else{
        
                $programas = Programa::where('nombre', $entrada)->paginate(10);
            
        }
        

            return view('vistaPrograma', compact ('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $encargados= user::Where('estado', 'Activo')->get();
        $especialidades= Especialidad::all();
        return view ('programa', compact("encargados", "especialidades"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoPrograma = new Programa();
        $nuevoPrograma->nombre = $request->nombre;
        $nuevoPrograma->encargado = $request->encargado;
        $nuevoPrograma->descripcion = $request->descripcion;
        $nuevoPrograma->especialidad= $request->especialidad;
        $nuevoPrograma->agenda = $request->agenda;
        $nuevoPrograma->save();
        
        return back()->with ('mensaje','Programa agregado correctamente');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programas= Programa::findOrFail($id);

        return view('perfilPrograma', compact('programas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $encargados= user::where('estado', 'Activo');
        $especialidades= Especialidad::all();
        $programa = Programa::findOrFail($id);
                
        return view('actualizarProgramas', compact('encargados', 'especialidades', 'programa'));
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
        $Programa = Programa::findOrFail($id);
        $Programa->nombre = $request->nombre;            
        $Programa->encargado = $request->encargado;
        $Programa->descripcion = $request->descripcion;
        $Programa->especialidad= $request->especialidad;
        $Programa->agenda = $request->agenda;
        $Programa->save();        

        return back()->with ('mensaje','Programa agregado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programa = Programa::findOrFail($id);
        $programa->delete();
        $programa = Programa::orderBy('nombre', 'ASC')->paginate(10);

        return redirect()->to('/programas');
    }
}
