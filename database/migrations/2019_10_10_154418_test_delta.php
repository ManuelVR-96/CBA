<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TestDelta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testDelta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('dependencia_movilizacion');
            $table->integer('dependencia_deambulacion');
            $table->integer('dependencia_aseo');
            $table->integer('dependencia_vestido');
            $table->integer('dependencia_alimentacion');
            $table->integer('dependencia_estinteriana');
            $table->integer('dependencia_alimentacion');
            $tabla->integer('total_dependencia_general');
            $table->text('observacion_dependencia');
            $tabla->string('encargado_enfermeria');
            $table->integer('cuidados_enfermeria');
            $table->integer('necesidad_vigilancia');
            $table->integer('colaboracion');
            $table->integer('dependencia_esfinteriana');
            $table->integer('fisica_estabilidad');
            $table->integer('vision_audicion');
            $table->integer('fisica_locomotor');
            $table->integer('fisica_neurologicas');
            $table->integer('fisica_cardiovascular');
            $table->integer('total_deficiencia_fisica');
            $table->integer('observacion_fisica');
            $tabla->string('lenguaje_comprension');
            $tabla->string('orientacion_memoria');
            $tabla->string('trastorno_comportamiente');
            $tabla->string('capacidad_juicio');
            $tabla->string('alteracion_sueño');
            $tabla->string('total_deficiencia_psiquica');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testDelta');
    }
}
