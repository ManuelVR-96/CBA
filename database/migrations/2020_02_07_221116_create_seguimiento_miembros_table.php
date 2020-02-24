<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimientoMiembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento_miembros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('paciente');
            $table->foreign('paciente')->references('id')->on('clientes')->onDelete('cascade');
            $table->text('perfil_medico')->nullable();
            $table->text('diagnostico_medico')->nullable();
            $table->text('pronostico_medico')->nullable();
            $table->text('objetivos_medico')->nullable();
            $table->text('actividades_medico')->nullable();
            $table->text('ind_evaluacion_medico')->nullable();
            $table->text('observaciones_medico')->nullable();
            $table->text('perfil_nutricionista')->nullable();
            $table->text('diagnostico_nutricionista')->nullable();
            $table->text('pronostico_nutricionista')->nullable();
            $table->text('objetivos_nutricionista')->nullable();
            $table->text('actividades_nutricionista')->nullable();
            $table->text('ind_evaluacion_nutricionista')->nullable();
            $table->text('observaciones_nutricionista')->nullable();
            $table->text('perfil_fisioterapeuta')->nullable();
            $table->text('diagnostico_fisioterapeuta')->nullable();
            $table->text('pronostico_fisioterapeuta')->nullable();
            $table->text('objetivos_fisioterapeuta')->nullable();
            $table->text('actividades_fisioterapeuta')->nullable();
            $table->text('ind_evaluacion_fisioterapeuta')->nullable();
            $table->text('observaciones_fisioterapeuta')->nullable();
            $table->text('perfil_psicologico')->nullable();
            $table->text('diagnostico_psicologico')->nullable();
            $table->text('pronostico_psicologico')->nullable();
            $table->text('objetivos_psicologico')->nullable();
            $table->text('actividades_psicologico')->nullable();
            $table->text('ind_evaluacion_psicologico')->nullable();
            $table->text('observaciones_psicologico')->nullable();
            $table->text('perfil_gerontologo')->nullable();
            $table->text('objetivos_gerontologo')->nullable();
            $table->text('actividades_gerontologo')->nullable();
            $table->text('ind_evaluacion_gerontologo')->nullable();
            $table->text('observaciones_gerontologo')->nullable();
            $table->text('perfil_recreacion')->nullable();
            $table->text('objetivos_recreacion')->nullable();
            $table->text('actividades_recreacion')->nullable();
            $table->text('ind_evaluacion_recreacion')->nullable();
            $table->text('observaciones_recreacion')->nullable();
            $table->text('perfil_religioso')->nullable();
            $table->text('objetivos_religioso')->nullable();
            $table->text('actividades_religioso')->nullable();
            $table->text('ind_evaluacion_religioso')->nullable();
            $table->text('observaciones_religioso')->nullable();
            $table->text('perfil_enfermera')->nullable();
            $table->text('objetivos_enfermera')->nullable();
            $table->text('actividades_enfermera')->nullable();
            $table->text('ind_evaluacion_enfermera')->nullable();
            $table->text('observaciones_enfermera')->nullable();;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguimiento_miembros');
    }
}
