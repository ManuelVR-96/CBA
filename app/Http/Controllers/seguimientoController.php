<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use CBA\Cliente;
use CBA\User;
use CBA\seguimiento_miembro;
use Illuminate\Support\Facades\DB;

class seguimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoSeguimiento->paciente=$request->paciente;
        $nuevoSeguimiento->perfil_medico=$request->perfil_medico;
        $nuevoSeguimiento->diagnostico_medico=$request->diagnostico_medico;
        $nuevoSeguimiento->pronostico_medico=$request->pronostico_medico;
        $nuevoSeguimiento->objetivos_medico=$request->objetivos_medico;
        $nuevoSeguimiento->actividades_medico=$request->actividades_medico;
        $nuevoSeguimiento->ind_evaluacion_medico=$request->ind_evaluacion_medico;
        $nuevoSeguimiento->observaciones_medico=$request->observaciones_medico;
        $nuevoSeguimiento->perfil_nutricionista=$request->perfil_nutricionista;
        $nuevoSeguimiento->diagnostico_nutricionista=$request->diagnostico_nutricionista;
        $nuevoSeguimiento->pronostico_nutricionista=$request->pronostico_nutricionista;
        $nuevoSeguimiento->objetivos_nutricionista=$request->objetivos_nutricionista;
        $nuevoSeguimiento->actividades_nutricionista=$request->actividades_nutricionista;
        $nuevoSeguimiento->ind_evaluacion_nutricionista=$request->ind_evaluacion_nutricionista;
        $nuevoSeguimiento->observaciones_nutricionista=$request->observaciones_nutricionista;
        $nuevoSeguimiento->perfil_fisioterapeuta=$request->perfil_fisioterapeuta;
        $nuevoSeguimiento->diagnostico_fisioterapeuta=$request->diagnostico_fisioterapeuta;
        $nuevoSeguimiento->pronostico_fisioterapeuta=$request->pronostico_fisioterapeuta;
        $nuevoSeguimiento->objetivos_fisioterapeuta=$request->objetivos_fisioterapeuta;
        $nuevoSeguimiento->actividades_fisioterapeuta=$request->actividades_fisioterapeuta;
        $nuevoSeguimiento->ind_evaluacion_fisioterapeuta=$request->ind_evaluacion_fisioterapeuta;
        $nuevoSeguimiento->observaciones_fisioterapeuta=$request->observaciones_fisioterapeuta;
        $nuevoSeguimiento->perfil_psicologico=$request->perfil_psicologico;
        $nuevoSeguimiento->diagnostico_psicologico=$request->diagnostico_psicologico;
        $nuevoSeguimiento->pronostico_psicologico=$request->pronostico_psicologico;
        $nuevoSeguimiento->objetivos_psicologico=$request->objetivos_psicologico;
        $nuevoSeguimiento->actividades_psicologico=$request->actividades_psicologico;
        $nuevoSeguimiento->ind_evaluacion_psicologico=$request->ind_evaluacion_psicologico;
        $nuevoSeguimiento->observaciones_psicologico=$request->observaciones_psicologico;
        $nuevoSeguimiento->perfil_gerontologo=$request->perfil_gerontologo;
        $nuevoSeguimiento->objetivos_gerontologo=$request->objetivos_gerontologo;
        $nuevoSeguimiento->actividades_gerontologo=$request->actividades_gerontologo;
        $nuevoSeguimiento->ind_evaluacion_gerontologo=$request->ind_evaluacion_gerontologo;
        $nuevoSeguimiento->observaciones_gerontologo=$request->observaciones_gerontologo;
        $nuevoSeguimiento->perfil_recreacion=$request->perfil_recreacion;
        $nuevoSeguimiento->objetivos_recreacion=$request->objetivos_recreacion;
        $nuevoSeguimiento->actividades_recreacion=$request->actividades_recreacion;
        $nuevoSeguimiento->ind_evaluacion_recreacion=$request->ind_evaluacion_recreacion;
        $nuevoSeguimiento->observaciones_recreacion=$request->observaciones_recreacion;
        $nuevoSeguimiento->perfil_religioso=$request->perfil_religioso;
        $nuevoSeguimiento->objetivos_religioso=$request->objetivos_religioso;
        $nuevoSeguimiento->actividades_religioso=$request->actividades_religioso;
        $nuevoSeguimiento->ind_evaluacion_religioso=$request->ind_evaluacion_religioso;
        $nuevoSeguimiento->observaciones_religioso=$request->observaciones_religioso;
        $nuevoSeguimiento->perfil_enfermera=$request->perfil_enfermera;
        $nuevoSeguimiento->objetivos_enfermera=$request->objetivos_enfermera;
        $nuevoSeguimiento->actividades_enfermera=$request->actividades_enfermera;
        $nuevoSeguimiento->ind_evaluacion_enfermera=$request->ind_evaluacion_enfermera;
        $nuevoSeguimiento->observaciones_enfermera=$request->observaciones_enfermera;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exist = DB::table('seguimiento_miembros')->where('paciente', $id)->exists();        
        if ($exist ==1)
        {
            $seguimiento = seguimiento_miembro::Where('paciente', $id)->first();
            $nuevoCliente= Cliente::findOrFail($id);
            return view ('Ver_Seguimiento', compact("seguimiento", "nuevoCliente"));
        }

        else 
        {
            return "No existe registro!";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $miembro = Cliente::findOrFail($id);
        $Seguimiento = seguimiento_miembro::Where('paciente', $id)->first();
        return view ('RegistroSeguimiento', compact("miembro", "Seguimiento"));  
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
        $nuevoSeguimiento = seguimiento_miembro::Where('paciente', $id)->first();
        $nuevoSeguimiento->paciente=$request->paciente;
        $nuevoSeguimiento->perfil_medico=$request->perfil_medico;
        $nuevoSeguimiento->diagnostico_medico=$request->diagnostico_medico;
        $nuevoSeguimiento->pronostico_medico=$request->pronostico_medico;
        $nuevoSeguimiento->objetivos_medico=$request->objetivos_medico;
        $nuevoSeguimiento->actividades_medico=$request->actividades_medico;
        $nuevoSeguimiento->ind_evaluacion_medico=$request->ind_evaluacion_medico;
        $nuevoSeguimiento->observaciones_medico=$request->observaciones_medico;
        $nuevoSeguimiento->perfil_nutricionista=$request->perfil_nutricionista;
        $nuevoSeguimiento->diagnostico_nutricionista=$request->diagnostico_nutricionista;
        $nuevoSeguimiento->pronostico_nutricionista=$request->pronostico_nutricionista;
        $nuevoSeguimiento->objetivos_nutricionista=$request->objetivos_nutricionista;
        $nuevoSeguimiento->actividades_nutricionista=$request->actividades_nutricionista;
        $nuevoSeguimiento->ind_evaluacion_nutricionista=$request->ind_evaluacion_nutricionista;
        $nuevoSeguimiento->observaciones_nutricionista=$request->observaciones_nutricionista;
        $nuevoSeguimiento->perfil_fisioterapeuta=$request->perfil_fisioterapeuta;
        $nuevoSeguimiento->diagnostico_fisioterapeuta=$request->diagnostico_fisioterapeuta;
        $nuevoSeguimiento->pronostico_fisioterapeuta=$request->pronostico_fisioterapeuta;
        $nuevoSeguimiento->objetivos_fisioterapeuta=$request->objetivos_fisioterapeuta;
        $nuevoSeguimiento->actividades_fisioterapeuta=$request->actividades_fisioterapeuta;
        $nuevoSeguimiento->ind_evaluacion_fisioterapeuta=$request->ind_evaluacion_fisioterapeuta;
        $nuevoSeguimiento->observaciones_fisioterapeuta=$request->observaciones_fisioterapeuta;
        $nuevoSeguimiento->perfil_psicologico=$request->perfil_psicologico;
        $nuevoSeguimiento->diagnostico_psicologico=$request->diagnostico_psicologico;
        $nuevoSeguimiento->pronostico_psicologico=$request->pronostico_psicologico;
        $nuevoSeguimiento->objetivos_psicologico=$request->objetivos_psicologico;
        $nuevoSeguimiento->actividades_psicologico=$request->actividades_psicologico;
        $nuevoSeguimiento->ind_evaluacion_psicologico=$request->ind_evaluacion_psicologico;
        $nuevoSeguimiento->observaciones_psicologico=$request->observaciones_psicologico;
        $nuevoSeguimiento->perfil_gerontologo=$request->perfil_gerontologo;
        $nuevoSeguimiento->objetivos_gerontologo=$request->objetivos_gerontologo;
        $nuevoSeguimiento->actividades_gerontologo=$request->actividades_gerontologo;
        $nuevoSeguimiento->ind_evaluacion_gerontologo=$request->ind_evaluacion_gerontologo;
        $nuevoSeguimiento->observaciones_gerontologo=$request->observaciones_gerontologo;
        $nuevoSeguimiento->perfil_recreacion=$request->perfil_recreacion;
        $nuevoSeguimiento->objetivos_recreacion=$request->objetivos_recreacion;
        $nuevoSeguimiento->actividades_recreacion=$request->actividades_recreacion;
        $nuevoSeguimiento->ind_evaluacion_recreacion=$request->ind_evaluacion_recreacion;
        $nuevoSeguimiento->observaciones_recreacion=$request->observaciones_recreacion;
        $nuevoSeguimiento->perfil_religioso=$request->perfil_religioso;
        $nuevoSeguimiento->objetivos_religioso=$request->objetivos_religioso;
        $nuevoSeguimiento->actividades_religioso=$request->actividades_religioso;
        $nuevoSeguimiento->ind_evaluacion_religioso=$request->ind_evaluacion_religioso;
        $nuevoSeguimiento->observaciones_religioso=$request->observaciones_religioso;
        $nuevoSeguimiento->perfil_enfermera=$request->perfil_enfermera;
        $nuevoSeguimiento->objetivos_enfermera=$request->objetivos_enfermera;
        $nuevoSeguimiento->actividades_enfermera=$request->actividades_enfermera;
        $nuevoSeguimiento->ind_evaluacion_enfermera=$request->ind_evaluacion_enfermera;
        $nuevoSeguimiento->observaciones_enfermera=$request->observaciones_enfermera;
        $nuevoSeguimiento->save();
        return back();
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
