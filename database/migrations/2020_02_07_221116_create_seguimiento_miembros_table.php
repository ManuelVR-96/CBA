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
            $table->text('perfil_medico');
            $table->text('diagnostico_medico');
            $table->text('pronostico_medico');
            $table->text('objetivos_medico');
            $table->text('actividades_medico');
            $table->text('ind_evaluacion_medico');
            $table->text('observaciones_medico');
            $table->text('perfil_nutricionista');
            $table->text('diagnostico_nutricionista');
            $table->text('pronostico_nutricionista');
            $table->text('objetivos_nutricionista');
            $table->text('actividades_nutricionista');
            $table->text('ind_evaluacion_nutricionista');
            $table->text('observaciones_nutricionista');
            $table->text('perfil_fisioterapeuta');
            $table->text('diagnostico_fisioterapeuta');
            $table->text('pronostico_fisioterapeuta');
            $table->text('objetivos_fisioterapeuta');
            $table->text('actividades_fisioterapeuta');
            $table->text('ind_evaluacion_fisioterapeuta');
            $table->text('observaciones_fisioterapeuta');
            $table->text('perfil_psicologico');
            $table->text('diagnostico_psicologico');
            $table->text('pronostico_psicologico');
            $table->text('objetivos_psicologico');
            $table->text('actividades_psicologico');
            $table->text('ind_evaluacion_psicologico');
            $table->text('observaciones_psicologico');
            $table->text('perfil_gerontologo');
            $table->text('objetivos_gerontologo');
            $table->text('actividades_gerontologo');
            $table->text('ind_evaluacion_gerontologo');
            $table->text('observaciones_gerontologo');
            $table->text('perfil_recreacion');
            $table->text('objetivos_recreacion');
            $table->text('actividades_recreacion');
            $table->text('ind_evaluacion_recreacion');
            $table->text('observaciones_recreacion');
            $table->text('perfil_religioso');
            $table->text('objetivos_religioso');
            $table->text('actividades_religioso');
            $table->text('ind_evaluacion_religioso');
            $table->text('observaciones_religioso');
            $table->text('perfil_enfermera');
            $table->text('objetivos_enfermera');
            $table->text('actividades_enfermera');
            $table->text('ind_evaluacion_enfermera');
            $table->text('observaciones_enfermera');

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
