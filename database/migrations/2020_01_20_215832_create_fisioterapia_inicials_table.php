<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFisioterapiaInicialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fisioterapia_inicials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('paciente');
            $table->foreign('paciente')->references('id')->on('clientes')->onDelete('cascade');
            $table->timestamps();
            $table->text('antecedentes');
            $table->text('situacion_salud');
            $table->text('medicamentos');
            $table->text('actividad_diaria');
            $table->text('gusta_realizar');
            $table->string('estado_fisioterapia');
            $table->integer('escala_glasgow_ojos');
            $table->integer('escala_glasgow_motora');
            $table->integer('escala_glasgow_verbal');
            $table->integer('escala_glasgow_total');
            $table->text('dolor_localizacion');
            $table->string('dolor_tipo');
            $table->integer('dolor_analoga');
            $table->text('dolor_frencuencia');
            $table->text('dolor_tiempo_evolucion');
            $table->text('dolor_que_aumenta');
            $table->text('dolor_que_disminuye');
            $table->text('dolor_observaciones');
            //Screening articular
            $table->text('abduccion_hombro');
            $table->text('rotacion_medial');
            $table->text('flexion_extension_hombro');
            $table->text('flexion_extension_codo');
            $table->text('supinacion_pronacion');
            $table->text('flexion_extension_muneca');
            $table->text('desviacion_radial_ulnar');
            $table->text('abduccion_aduccion_dedos');
            $table->text('flexion_extension_dedos');
            $table->text('flexion_extension_pulgar');
            $table->text('flexion_extension_cuello');
            $table->text('rotacion_cuello');
            $table->text('flexion_aduccion_cadera');
            $table->text('flexion_abduccion_lateral_cadera');
            $table->text('inversion_tobillo');
            $table->text('eversion_pie');
            $table->text('abduccion_aduccion_cadera');
            $table->text('extension_cadera');
            $table->text('flexion_extension_rodilla');
            $table->text('flexion_tronco');
            $table->text('flexion_lateral_tronco');
            $table->text('rotacion_tronco');
            $table->text('plantiflexion_tobillo');
            $table->text('flexion_dorsal_tobillo');
            $table->text('extension');
            //Screening muscular
            $table->text('flexores_cuello_tronco');
            $table->text('flexores_cadera');
            $table->text('abductores_cadera');
            $table->text('aductores_cadera');
            $table->text('extensores_cadera');
            $table->text('aductores_hombro');
            $table->text('flexores_hombro');
            $table->text('extensores_hombro');
            $table->text('abductores_horizontales_hombro');
            $table->text('abductores_hombro');
            $table->text('aductores_hombro');
            $table->text('rotadores_mediales_hombro');
            $table->text('rotadores_laterales_hombro');
            $table->text('flexores_codo');
            $table->text('extensores_codo');
            $table->text('supinadores');
            $table->text('pronadores');
            $table->text('extensores_muñeca');
            $table->text('flexores_muñeca');
            $table->text('flexores_dedos');
            $table->text('extensores_dedos');
            $table->text('interoseos_palmares');
            $table->text('interoseos_dorsales');
            $table->text('oponente_pulgar');
            $table->text('dorsal_ancho_triceps');
            $table->text('trapecio_superior');
            $table->text('rotadores_mediales');
            $table->text('rotadores_laterales_cadera');
            $table->text('romboideos');
            $table->text('extensores_codo');
            $table->text('extensores_cadera');
            $table->text('isquiotibiales');
            $table->text('cuadriceps');
            $table->text('gastronemios');
            $table->text('flexores_dorsales');
            $table->text('extensores_cadera_rodilla');
            //Escala fuerza muscular
            $table->string('escala_fuerza_muscular');
            //Test de Romberg
            $table->string('romberg_estatica');
            $table->string('romberg_dinamica');
            $table->text('descripcion_romberg');
            //Coordinacion
            $table->string('mmss_dedo_dedo_derecho'); 
            $table->string('mmss_dedo_dedo_izquierdo');
            $table->string('mmss_dedo_nariz_derecho'); 
            $table->string('mmss_dedo_nariz_izquierdo'); 
            $table->string('mmii_dedo_talon_derecho'); 
            $table->string('mmii_dedo_talon_izquierdo'); 
            $table->string('mmii_talon_rodilla_derecho'); 
            $table->string('mmi_talon_rodilla_izquierdo'); 
            $table->string('mmii_marcha_cruzada_derecho'); 
            $table->string('mmii_marcha_izquierda_izquierdo'); 
            $table->text('observaciones_coordinacion');
            // Control Postural
            $table->text('actitud_postural');
            //Ortesis o requerimientos protésticos
            $table->text('observaciones_ortesis');
            //Marcha,locomoción,balance

            $table->string('choque_talon_derecho'); 
            $table->string('choque_talon_izquierdo');
            $table->string('apoyo_medio_derecho'); 
            $table->string('apoyo_medio_izquierdo');
            $table->string('despegue_dedos_derecho'); 
            $table->string('despegue_dedos_izquierdo'); 
            $table->string('aceleracion_izquierdo'); 
            $table->string('aceleracion_derecho'); 
            $table->string('desaceleracion_izquierdo'); 
            $table->string('desaceleracion_derecho'); 
            $table->string('doble_apoyo_derecho'); 
            $table->string('doble_apoyo_izquierdo'); 
            $table->text('marcha_observaciones');
            $table->text('diagnostico_fisioterapeutico');
            $table->text('conducta'); 
            $table->unsignedBigInteger('encargado')->nullable();
            $table->foreign('encargado')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fisioterapia_inicials');
    }
}
