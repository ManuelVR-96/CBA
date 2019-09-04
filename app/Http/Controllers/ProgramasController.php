<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use CBA\User;
use CBA\Especialidad;
use CBA\Programa;
use Carbon\Carbon;

class ProgramasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Programa::orderBy('nombre', 'ASC')->paginate(2);
        return view('vistaPrograma', compact ('users'));
    }

    public function busqueda(Request $request)
    {  
        $nombre= $request->busqueda;
        if ($nombre==''){
            $users = Programa::orderBy('nombre', 'ASC')->paginate(2);
            }
            else {
                
                $users = Programa::where('nombre', $nombre)->paginate(2);
            }
            return view('vistaPrograma', compact ('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $encargados= user::all();
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
        // $request ->validate ([
        
        //     'encargado' =>'required'
        // ]);

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
        $user= Programa::findOrFail($id);

        return view('perfilPrograma', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $encargados= user::all();
        $especialidades= Especialidad::all();
        $programa = Programa::findOrFail($id);
        
        #return $programa->encargado;
        
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
        #return $Programa->encargado_;

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
        $user = Programa::findOrFail($id);
        $user->delete();
        $users = Programa::orderBy('nombre', 'ASC')->paginate(2);

        return redirect()->to('/programas');
    }
}