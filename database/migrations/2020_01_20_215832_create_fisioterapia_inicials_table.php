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
            $table->text('antecedentes')->nullable();
            $table->text('situacion_salud')->nullable();
            $table->text('medicamentos')->nullable();
            $table->text('actividad_diaria')->nullable();
            $table->text('gusta_realizar')->nullable();
            $table->string('estado_fisioterapia')->nullable();
            $table->integer('escala_glasgow_ojos')->nullable();
            $table->integer('escala_glasgow_motora')->nullable();
            $table->integer('escala_glasgow_verbal')->nullable();
            $table->integer('escala_glasgow_total')->nullable();
            $table->text('dolor_localizacion')->nullable();
            $table->string('dolor_tipo')->nullable();
            $table->integer('dolor_analoga')->nullable();
            $table->text('dolor_frencuencia')->nullable();
            $table->text('dolor_tiempo_evolucion')->nullable();
            $table->text('dolor_que_aumenta')->nullable();
            $table->text('dolor_que_disminuye')->nullable();
            $table->text('dolor_observaciones')->nullable();
            //Screening articular
            $table->text('abduccion_hombro')->nullable();
            $table->text('rotacion_medial')->nullable();
            $table->text('flexion_extension_hombro')->nullable();
            $table->text('flexion_extension_codo')->nullable();
            $table->text('supinacion_pronacion')->nullable();
            $table->text('flexion_extension_muneca')->nullable();
            $table->text('desviacion_radial_ulnar')->nullable();
            $table->text('abduccion_aduccion_dedos')->nullable();
            $table->text('flexion_extension_dedos')->nullable();
            $table->text('flexion_extension_pulgar')->nullable();
            $table->text('flexion_extension_cuello')->nullable();
            $table->text('rotacion_cuello')->nullable();
            $table->text('flexion_aduccion_cadera')->nullable();
            $table->text('flexion_abduccion_lateral_cadera')->nullable();
            $table->text('inversion_tobillo')->nullable();
            $table->text('eversion_pie')->nullable();
            $table->text('abduccion_aduccion_cadera')->nullable();
            $table->text('extension_cadera')->nullable();
            $table->text('flexion_extension_rodilla')->nullable();
            $table->text('flexion_tronco')->nullable();
            $table->text('flexion_lateral_tronco')->nullable();
            $table->text('rotacion_tronco')->nullable();
            $table->text('plantiflexion_tobillo')->nullable();
            $table->text('flexion_dorsal_tobillo')->nullable();
            $table->text('extension_tronco')->nullable();
            //Screening muscular
            $table->text('flexores_cuello_tronco')->nullable();
            $table->text('flexores_cadera')->nullable();
            $table->text('abductores_cadera')->nullable();
            $table->text('aductores_cadera')->nullable();
            $table->text('extensores_cadera_sup')->nullable();
            $table->text('aductores_hombro')->nullable();
            $table->text('flexores_hombro')->nullable();
            $table->text('extensores_hombro')->nullable();
            $table->text('abductores_horizontales_hombro')->nullable();
            $table->text('abductores_hombro')->nullable();
            $table->text('aductores_hombro_sup')->nullable();
            $table->text('rotadores_mediales_hombro')->nullable();
            $table->text('rotadores_laterales_hombro')->nullable();
            $table->text('flexores_codo')->nullable();
            $table->text('extensores_codo')->nullable();
            $table->text('supinadores')->nullable();
            $table->text('pronadores')->nullable();
            $table->text('extensores_muñeca')->nullable();
            $table->text('flexores_muñeca')->nullable();
            $table->text('flexores_dedos')->nullable();
            $table->text('extensores_dedos')->nullable();
            $table->text('interoseos_palmares')->nullable();
            $table->text('interoseos_dorsales')->nullable();
            $table->text('oponente_pulgar')->nullable();
            $table->text('dorsal_ancho_triceps')->nullable();
            $table->text('trapecio_superior')->nullable();
            $table->text('rotadores_mediales')->nullable();
            $table->text('rotadores_laterales_cadera')->nullable();
            $table->text('romboideos')->nullable();
            $table->text('extensores_codo_hombro')->nullable();
            $table->text('extensores_cadera')->nullable();
            $table->text('isquiotibiales')->nullable();
            $table->text('cuadriceps')->nullable();
            $table->text('gastronemios')->nullable();
            $table->text('flexores_dorsales')->nullable();
            $table->text('extensores_cadera_rodilla')->nullable();
            //Escala fuerza muscular
            $table->string('escala_fuerza_muscular')->nullable();
            //Test de Romberg
            $table->string('romberg_estatica')->nullable();
            $table->string('romberg_dinamica')->nullable();
            $table->text('descripcion_romberg')->nullable();

            //Coordinacion
            $table->string('mmss_dedo_dedo_derecho')->nullable(); 
            $table->string('mmss_dedo_dedo_izquierdo')->nullable();
            $table->string('mmss_dedo_nariz_derecho')->nullable(); 
            $table->string('mmss_dedo_nariz_izquierdo')->nullable(); 
            $table->string('mmii_dedo_talon_derecho')->nullable(); 
            $table->string('mmii_dedo_talon_izquierdo')->nullable(); 
            $table->string('mmii_talon_rodilla_derecho')->nullable(); 
            $table->string('mmii_talon_rodilla_izquierdo')->nullable(); 
            $table->string('mmii_marcha_cruzada_derecho')->nullable(); 
            $table->string('mmii_marcha_cruzada_izquierdo')->nullable(); 
            $table->text('observaciones_coordinacion')->nullable();
            // Control Postural
            $table->text('actitud_postural')->nullable();
            //Ortesis o requerimientos protésticos
            $table->text('observaciones_ortesis')->nullable();
            //Marcha,locomoción,balance

            $table->string('choque_talon_derecho')->nullable(); 
            $table->string('choque_talon_izquierdo')->nullable();
            $table->string('apoyo_medio_derecho')->nullable(); 
            $table->string('apoyo_medio_izquierdo')->nullable();
            $table->string('despegue_dedos_derecho')->nullable(); 
            $table->string('despegue_dedos_izquierdo')->nullable(); 
            $table->string('aceleracion_izquierdo')->nullable(); 
            $table->string('aceleracion_derecho')->nullable(); 
            $table->string('desaceleracion_izquierdo')->nullable(); 
            $table->string('desaceleracion_derecho')->nullable(); 
            $table->string('doble_apoyo_derecho')->nullable(); 
            $table->string('doble_apoyo_izquierdo')->nullable(); 
            $table->text('marcha_observaciones')->nullable();
            $table->text('diagnostico_fisioterapeutico')->nullable();
            $table->text('conducta')->nullable(); 
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
