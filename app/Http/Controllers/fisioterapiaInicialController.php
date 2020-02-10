<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\request;
use Auth;
use CBA\Cliente;
use CBA\User;
use CBA\FisioterapiaInicial;

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
        $nuevoCliente= Cliente::findOrFail($id);
        
        return view ('RegistroFisioterapiaInicial', compact("nuevoCliente"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\$request  $$request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $nuevaPsicologica = new testDelta();
        $nuevaPsicologica->antecedentes= $request->antecedentes;
        $nuevaPsicologica->situacion_salud= $request->situacion_salud;
        $nuevaPsicologica->medicamentos= $request->medicamentos;
        $nuevaPsicologica->actividad_diaria= $request->actividad_diaria;
        $nuevaPsicologica->gusta_realizar= $request->gusta_realizar;
        $nuevaPsicologica->escala_glasgow_ojos= $request->escala_glasgow_ojos;
        $nuevaPsicologica->escala_glasgow_motora= $request->escala_glasgow_motora;
        $nuevaPsicologica->escala_glasgow_verbal= $request->escala_glasgow_verbal;
        $nuevaPsicologica->escala_glasgow_total= $request->escala_glasgow_total;
        $nuevaPsicologica->dolor_localizacion= $request->dolor_localizacion;
        $nuevaPsicologica->dolor_tipo= $request->dolor_tipo;
        $nuevaPsicologica->dolor_analoga= $request->dolor_analoga;
        $nuevaPsicologica->dolor_frencuencia= $request->dolor_frencuencia;
        $nuevaPsicologica->dolor_tiempo_evolucion= $request->dolor_tiempo_evolucion;
        $nuevaPsicologica->dolor_que_aumenta= $request->dolor_que_aumenta;
        $nuevaPsicologica->dolor_que_disminuye= $request->dolor_que_disminuye;
        $nuevaPsicologica->dolor_observaciones= $request->dolor_observaciones;
        //Screening articular
        $nuevaPsicologica->abduccion_hombro= $request->abduccion_hombro;
        $nuevaPsicologica->rotacion_medial= $request->rotacion_medial;
        $nuevaPsicologica->flexion_extension_hombro= $request->flexion_extension_hombro;
        $nuevaPsicologica->flexion_extension_codo= $request->flexion_extension_codo;
        $nuevaPsicologica->supinacion_pronacion= $request->supinacion_pronacion;
        $nuevaPsicologica->flexion_extension_muneca= $request->flexion_extension_muneca;
        $nuevaPsicologica->desviacion_radial_ulnar= $request->desviacion_radial_ulnar;
        $nuevaPsicologica->abduccion_aduccion_dedos= $request->abduccion_aduccion_dedos;
        $nuevaPsicologica->flexion_extension_dedos= $request->flexion_extension_dedos;
        $nuevaPsicologica->flexion_extension_pulgar= $request->flexion_extension_pulgar;
        $nuevaPsicologica->flexion_extension_cuello= $request->flexion_extension_cuello;
        $nuevaPsicologica->rotacion_cuello= $request->rotacion_cuello;
        $nuevaPsicologica->flexion_aduccion_cadera= $request->flexion_aduccion_cadera;
        $nuevaPsicologica->flexion_abduccion_lateral_cadera= $request->flexion_abduccion_lateral_cadera;
        $nuevaPsicologica->inversion_tobillo= $request->inversion_tobillo;
        $nuevaPsicologica->eversion_pie= $request->eversion_pie;
        $nuevaPsicologica->abduccion_aduccion_cadera= $request->abduccion_aduccion_cadera;
        $nuevaPsicologica->extension_cadera= $request->extension_cadera;
        $nuevaPsicologica->flexion_extension_rodilla= $request->flexion_extension_rodilla;
        $nuevaPsicologica->flexion_tronco= $request->flexion_tronco;
        $nuevaPsicologica->flexion_lateral_tronco= $request->flexion_lateral_tronco;
        $nuevaPsicologica->rotacion_tronco= $request->rotacion_tronco;
        $nuevaPsicologica->plantiflexion_tobillo= $request->plantiflexion_tobillo;
        $nuevaPsicologica->flexion_dorsal_tobillo= $request->flexion_dorsal_tobillo;
        $nuevaPsicologica->extension_tronco= $request->extension_tronco;
        //Screening muscular
        $nuevaPsicologica->flexores_cuello_tronco= $request->flexores_cuello_tronco;
        $nuevaPsicologica->flexores_cadera= $request->flexores_cadera;
        $nuevaPsicologica->abductores_cadera= $request->abductores_cadera;
        $nuevaPsicologica->aductores_cadera= $request->aductores_cadera;
        $nuevaPsicologica->extensores_cadera= $request->extensores_cadera;
        $nuevaPsicologica->aductores_hombro= $request->aductores_hombro;
        $nuevaPsicologica->flexores_hombro= $request->flexores_hombro;
        $nuevaPsicologica->extensores_hombro= $request->extensores_hombro;
        $nuevaPsicologica->abductores_horizontales_hombro= $request->abductores_horizontales_hombro;
        $nuevaPsicologica->abductores_hombro= $request->abductores_hombro;
        $nuevaPsicologica->aductores_hombro= $request->aductores_hombro;
        $nuevaPsicologica->rotadores_mediales_hombro= $request->rotadores_mediales_hombro;
        $nuevaPsicologica->rotadores_laterales_hombro= $request->rotadores_laterales_hombro;
        $nuevaPsicologica->flexores_codo= $request->flexores_codo;
        $nuevaPsicologica->extensores_codo= $request->extensores_codo;
        $nuevaPsicologica->supinadores= $request->supinadores;
        $nuevaPsicologica->pronadores= $request->pronadores;
        $nuevaPsicologica->extensores_muñeca= $request->extensores_muñeca;
        $nuevaPsicologica->flexores_muñeca= $request->flexores_muñeca;
        $nuevaPsicologica->flexores_dedos= $request->flexores_dedos;
        $nuevaPsicologica->extensores_dedos= $request->extensores_dedos;
        $nuevaPsicologica->interoseos_palmares= $request->interoseos_palmares;
        $nuevaPsicologica->interoseos_dorsales= $request->interoseos_dorsales;
        $nuevaPsicologica->oponente_pulgar= $request->oponente_pulgar;
        $nuevaPsicologica->dorsal_ancho_triceps= $request->dorsal_ancho_triceps;
        $nuevaPsicologica->trapecio_superior= $request->trapecio_superior;
        $nuevaPsicologica->rotadores_mediales= $request->rotadores_mediales;
        $nuevaPsicologica->rotadores_laterales_cadera= $request->rotadores_laterales_cadera;
        $nuevaPsicologica->romboideos= $request->romboideos;
        $nuevaPsicologica->extensores_codo= $request->extensores_codo;
        $nuevaPsicologica->extensores_cadera= $request->extensores_cadera;
        $nuevaPsicologica->isquiotibiales= $request->isquiotibiales;
        $nuevaPsicologica->cuadriceps= $request->cuadriceps;
        $nuevaPsicologica->gastronemios= $request->gastronemios;
        $nuevaPsicologica->flexores_dorsales= $request->flexores_dorsales;
        $nuevaPsicologica->extensores_cadera_rodilla= $request->extensores_cadera_rodilla;
        //Escala fuerza muscular
        $nuevaPsicologica->escala_fuerza_muscular= $request->escala_fuerza_muscular;
        //Test de Romberg
        $nuevaPsicologica->romberg_estatica= $request->romberg_estatica;
        $nuevaPsicologica->romberg_dinamica= $request->romberg_dinamica;
        //Coordinacion
        $nuevaPsicologica->mmss_dedo_dedo_derecho= $request->mmss_dedo_dedo_derecho; 
        $nuevaPsicologica->mmss_dedo_dedo_izquierdo= $request->mmss_dedo_dedo_izquierdo;
        $nuevaPsicologica->mmss_dedo_nariz_derecho= $request->mmss_dedo_nariz_derecho; 
        $nuevaPsicologica->mmss_dedo_nariz_izquierdo= $request->mmss_dedo_nariz_izquierdo; 
        $nuevaPsicologica->mmii_dedo_talon_derecho= $request->mmii_dedo_talon_derecho; 
        $nuevaPsicologica->mmii_dedo_talon_izquierdo= $request->mmii_dedo_talon_izquierdo; 
        $nuevaPsicologica->mmii_talon_rodilla_derecho= $request->mmii_talon_rodilla_derecho; 
        $nuevaPsicologica->mmii_talon_rodilla_izquierdo= $request->mmii_talon_rodilla_izquierdo; 
        $nuevaPsicologica->mmii_marcha_cruzada_derecho= $request->mmii_marcha_cruzada_derecho; 
        $nuevaPsicologica->mmii_marcha_izquierda_izquierdo= $request->mmii_marcha_izquierda_izquierdo; 
        $nuevaPsicologica->observaciones_coordinacion= $request->observaciones_coordinacion;
        // Control Postural
        $nuevaPsicologica->actitud_postural= $request->actitud_postural;
        //Ortesis o requerimientos protésticos
        $nuevaPsicologica->observaciones_ortesis= $request->observaciones_ortesis;
        //Marcha,locomoción,balance
        $nuevaPsicologica->choque_talon_derecho= $request->choque_talon_derecho; 
        $nuevaPsicologica->choque_talon_izquierdo= $request->choque_talon_izquierdo;
        $nuevaPsicologica->apoyo_medio_derecho= $request->apoyo_medio_derecho; 
        $nuevaPsicologica->apoyo_medio_izquierdo= $request->apoyo_medio_izquierdo;
        $nuevaPsicologica->despegue_dedos_derecho= $request->despegue_dedos_derecho; 
        $nuevaPsicologica->despegue_dedos_izquierdo= $request->despegue_dedos_izquierdo; 
        $nuevaPsicologica->aceleracion_izquierdo= $request->aceleracion_izquierdo; 
        $nuevaPsicologica->aceleracion_derecha= $request->aceleracion_derecho; 
        $nuevaPsicologica->desaceleracion_izquierdo= $request->desaceleracion_izquierdo; 
        $nuevaPsicologica->desaceleracion_derecha= $request->desaceleracion_derecho; 
        $nuevaPsicologica->doble_apoyo_derecho= $request->doble_apoyo_derecho; 
        $nuevaPsicologica->doble_apoyo_izquierdo= $request->doble_apoyo_izquierdo; 
        $nuevaPsicologica->marcha_observaciones= $request->marcha_observaciones;
        $nuevaPsicologica->diagnostico_fisioterapeutico= $request->diagnostico_fisioterapeutico;
        $nuevaPsicologica->conducta= $request->conducta; 
        $nuevaPsicologica->encargado= $request->encargado;
        $nuevaPsicologica->save();

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
     * @param  \Illuminate\Http\$request  $$request
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
