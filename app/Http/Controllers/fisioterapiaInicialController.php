<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\request;
use Auth;
use CBA\Cliente;
use CBA\User;
use CBA\FisioterapiaInicial;
use Illuminate\Support\Facades\DB;


class fisioterapiaInicialController extends Controller
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
    public function create($id)
    {
        $exist = DB::table('fisioterapia_inicials')->where('paciente', $id)->exists();
        
        if ($exist !=1){

        $nuevoCliente= Cliente::findOrFail($id);
        return view ('Valoraciones/RegistroFisioterapiaInicial', compact("nuevoCliente"));

        }

        else {
            return view ('Valoraciones/ValoracionExiste');
        }
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\$request  $$request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){   
        
        $nuevaFisioterapia = new FisioterapiaInicial();
        $nuevaFisioterapia->paciente = $request->miembro;
        $nuevaFisioterapia->antecedentes= $request->antecedentes;
        $nuevaFisioterapia->situacion_salud= $request->situacion_salud;
        $nuevaFisioterapia->medicamentos= $request->medicamentos;
        $nuevaFisioterapia->actividad_diaria= $request->actividad_diaria;
        $nuevaFisioterapia->gusta_realizar= $request->gusta_realizar;
        $nuevaFisioterapia->estado_fisioterapia = $request->estado_fisioterapia;
        $nuevaFisioterapia->escala_glasgow_ojos= $request->escala_glasgow_ojos;
        $nuevaFisioterapia->escala_glasgow_motora= $request->escala_glasgow_motora;
        $nuevaFisioterapia->escala_glasgow_verbal= $request->escala_glasgow_verbal;
        $nuevaFisioterapia->escala_glasgow_total= $request->escala_glasgow_total;
        $nuevaFisioterapia->dolor_localizacion= $request->dolor_localizacion;
        $nuevaFisioterapia->dolor_tipo= $request->dolor_tipo;
        $nuevaFisioterapia->dolor_analoga= $request->dolor_analoga;
        $nuevaFisioterapia->dolor_frencuencia= $request->dolor_frencuencia;
        $nuevaFisioterapia->dolor_tiempo_evolucion= $request->dolor_tiempo_evolucion;
        $nuevaFisioterapia->dolor_que_aumenta= $request->dolor_que_aumenta;
        $nuevaFisioterapia->dolor_que_disminuye= $request->dolor_que_disminuye;
        $nuevaFisioterapia->dolor_observaciones= $request->dolor_observaciones;
        //Screening articular
        $nuevaFisioterapia->abduccion_hombro= $request->abduccion_hombro;
        $nuevaFisioterapia->rotacion_medial= $request->rotacion_medial;
        $nuevaFisioterapia->flexion_extension_hombro= $request->flexion_extension_hombro;
        $nuevaFisioterapia->flexion_extension_codo= $request->flexion_extension_codo;
        $nuevaFisioterapia->supinacion_pronacion= $request->supinacion_pronacion;
        $nuevaFisioterapia->flexion_extension_muneca= $request->flexion_extension_muneca;
        $nuevaFisioterapia->desviacion_radial_ulnar= $request->desviacion_radial_ulnar;
        $nuevaFisioterapia->abduccion_aduccion_dedos= $request->abduccion_aduccion_dedos;
        $nuevaFisioterapia->flexion_extension_dedos= $request->flexion_extension_dedos;
        $nuevaFisioterapia->flexion_extension_pulgar= $request->flexion_extension_pulgar;
        $nuevaFisioterapia->flexion_extension_cuello= $request->flexion_extension_cuello;
        $nuevaFisioterapia->rotacion_cuello= $request->rotacion_cuello;
        $nuevaFisioterapia->flexion_aduccion_cadera= $request->flexion_aduccion_cadera;
        $nuevaFisioterapia->flexion_abduccion_lateral_cadera= $request->flexion_abduccion_lateral_cadera;
        $nuevaFisioterapia->inversion_tobillo= $request->inversion_tobillo;
        $nuevaFisioterapia->eversion_pie= $request->eversion_pie;
        $nuevaFisioterapia->abduccion_aduccion_cadera= $request->abduccion_aduccion_cadera;
        $nuevaFisioterapia->extension_cadera= $request->extension_cadera;
        $nuevaFisioterapia->flexion_extension_rodilla= $request->flexion_extension_rodilla;
        $nuevaFisioterapia->flexion_tronco= $request->flexion_tronco;
        $nuevaFisioterapia->flexion_lateral_tronco= $request->flexion_lateral_tronco;
        $nuevaFisioterapia->rotacion_tronco= $request->rotacion_tronco;
        $nuevaFisioterapia->plantiflexion_tobillo= $request->plantiflexion_tobillo;
        $nuevaFisioterapia->flexion_dorsal_tobillo= $request->flexion_dorsal_tobillo;
        $nuevaFisioterapia->extension_tronco= $request->extension_tronco;
        //Screening muscular
        $nuevaFisioterapia->flexores_cuello_tronco= $request->flexores_cuello_tronco;
        $nuevaFisioterapia->flexores_cadera= $request->flexores_cadera;
        $nuevaFisioterapia->abductores_cadera= $request->abductores_cadera;
        $nuevaFisioterapia->aductores_cadera= $request->aductores_cadera;
        $nuevaFisioterapia->extensores_cadera_sup= $request->extensores_cadera_sup;
        $nuevaFisioterapia->aductores_hombro= $request->aductores_hombro;
        $nuevaFisioterapia->flexores_hombro= $request->flexores_hombro;
        $nuevaFisioterapia->extensores_hombro= $request->extensores_hombro;
        $nuevaFisioterapia->abductores_horizontales_hombro= $request->abductores_horizontales_hombro;
        $nuevaFisioterapia->abductores_hombro= $request->abductores_hombro;
        $nuevaFisioterapia->aductores_hombro_sup= $request->aductores_hombro_sup;
        $nuevaFisioterapia->rotadores_mediales_hombro= $request->rotadores_mediales_hombro;
        $nuevaFisioterapia->rotadores_laterales_hombro= $request->rotadores_laterales_hombro;
        $nuevaFisioterapia->flexores_codo= $request->flexores_codo;
        $nuevaFisioterapia->extensores_codo= $request->extensores_codo;
        $nuevaFisioterapia->supinadores= $request->supinadores;
        $nuevaFisioterapia->pronadores= $request->pronadores;
        $nuevaFisioterapia->extensores_muñeca= $request->extensores_muñeca;
        $nuevaFisioterapia->flexores_muñeca= $request->flexores_muñeca;
        $nuevaFisioterapia->flexores_dedos= $request->flexores_dedos;
        $nuevaFisioterapia->extensores_dedos= $request->extensores_dedos;
        $nuevaFisioterapia->interoseos_palmares= $request->interoseos_palmares;
        $nuevaFisioterapia->interoseos_dorsales= $request->interoseos_dorsales;
        $nuevaFisioterapia->oponente_pulgar= $request->oponente_pulgar;
        $nuevaFisioterapia->dorsal_ancho_triceps= $request->dorsal_ancho_triceps;
        $nuevaFisioterapia->trapecio_superior= $request->trapecio_superior;
        $nuevaFisioterapia->rotadores_mediales= $request->rotadores_mediales;
        $nuevaFisioterapia->rotadores_laterales_cadera= $request->rotadores_laterales_cadera;
        $nuevaFisioterapia->romboideos= $request->romboideos;
        $nuevaFisioterapia->extensores_codo_hombro= $request->extensores_codo_hombro;
        $nuevaFisioterapia->extensores_cadera= $request->extensores_cadera;
        $nuevaFisioterapia->isquiotibiales= $request->isquiotibiales;
        $nuevaFisioterapia->cuadriceps= $request->cuadriceps;
        $nuevaFisioterapia->gastronemios= $request->gastronemios;
        $nuevaFisioterapia->flexores_dorsales= $request->flexores_dorsales;
        $nuevaFisioterapia->extensores_cadera_rodilla= $request->extensores_cadera_rodilla;
        //Escala fuerza muscular
        $nuevaFisioterapia->escala_fuerza_muscular= $request->escala_fuerza_muscular;
        //Test de Romberg
        $nuevaFisioterapia->romberg_estatica= $request->romberg_estatica;
        $nuevaFisioterapia->romberg_dinamica= $request->romberg_dinamica;
        $nuevaFisioterapia->descripcion_romberg= $request->descripcion_romberg;
        //Coordinacion
        $nuevaFisioterapia->mmss_dedo_dedo_derecho= $request->mmss_dedo_dedo_derecho; 
        $nuevaFisioterapia->mmss_dedo_dedo_izquierdo= $request->mmss_dedo_dedo_izquierdo;
        $nuevaFisioterapia->mmss_dedo_nariz_derecho= $request->mmss_dedo_nariz_derecho; 
        $nuevaFisioterapia->mmss_dedo_nariz_izquierdo= $request->mmss_dedo_nariz_izquierdo; 
        $nuevaFisioterapia->mmii_dedo_talon_derecho= $request->mmii_dedo_talon_derecho; 
        $nuevaFisioterapia->mmii_dedo_talon_izquierdo= $request->mmii_dedo_talon_izquierdo; 
        $nuevaFisioterapia->mmii_talon_rodilla_derecho= $request->mmii_talon_rodilla_derecho; 
        $nuevaFisioterapia->mmii_talon_rodilla_izquierdo= $request->mmii_talon_rodilla_izquierdo; 
        $nuevaFisioterapia->mmii_marcha_cruzada_derecho= $request->mmii_marcha_cruzada_derecho; 
        $nuevaFisioterapia->mmii_marcha_cruzada_izquierdo= $request->mmii_marcha_cruzada_izquierdo; 
        $nuevaFisioterapia->observaciones_coordinacion= $request->observaciones_coordinacion;
        // Control Postural
        $nuevaFisioterapia->actitud_postural= $request->actitud_postural;
        //Ortesis o requerimientos protésticos
        $nuevaFisioterapia->observaciones_ortesis= $request->observaciones_ortesis;
        //Marcha,locomoción,balance
        $nuevaFisioterapia->choque_talon_derecho= $request->choque_talon_derecho; 
        $nuevaFisioterapia->choque_talon_izquierdo= $request->choque_talon_izquierdo;
        $nuevaFisioterapia->apoyo_medio_derecho= $request->apoyo_medio_derecho; 
        $nuevaFisioterapia->apoyo_medio_izquierdo= $request->apoyo_medio_izquierdo;
        $nuevaFisioterapia->despegue_dedos_derecho= $request->despegue_dedos_derecho; 
        $nuevaFisioterapia->despegue_dedos_izquierdo= $request->despegue_dedos_izquierdo; 
        $nuevaFisioterapia->aceleracion_izquierdo= $request->aceleracion_izquierdo; 
        $nuevaFisioterapia->aceleracion_derecho= $request->aceleracion_derecho; 
        $nuevaFisioterapia->desaceleracion_izquierdo= $request->desaceleracion_izquierdo; 
        $nuevaFisioterapia->desaceleracion_derecho= $request->desaceleracion_derecho; 
        $nuevaFisioterapia->doble_apoyo_derecho= $request->doble_apoyo_derecho; 
        $nuevaFisioterapia->doble_apoyo_izquierdo= $request->doble_apoyo_izquierdo; 
        $nuevaFisioterapia->marcha_observaciones= $request->marcha_observaciones;
        $nuevaFisioterapia->diagnostico_fisioterapeutico= $request->diagnostico_fisioterapeutico;
        $nuevaFisioterapia->conducta= $request->conducta; 
        $nuevaFisioterapia->encargado= Auth::user()->id;
        $nuevaFisioterapia->save();

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        
        $exist = DB::table('fisioterapia_inicials')->where('paciente', $id)->exists();

        if($exist==1){
        $fisio_inicial = FisioterapiaInicial::Where('paciente', $id)->first();
        $nuevoCliente= Cliente::findOrFail($id);
        return view ('Ver_FisioInicial', compact("fisio_inicial", "nuevoCliente"));
        }

        else{
            return view ('Valoraciones/ValoracionNoExiste');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\$request  $$request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }
}
