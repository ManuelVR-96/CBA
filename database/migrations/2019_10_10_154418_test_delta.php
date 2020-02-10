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
            $table->unsignedBigInteger('paciente');
            $table->foreign('paciente')->references('id')->on('clientes')->onDelete('cascade');
            $table->integer('dependencia_movilizacion');
            $table->integer('dependencia_deambulacion');
            $table->integer('dependencia_aseo');
            $table->integer('dependencia_vestido');
            $table->integer('dependencia_alimentacion');
            $table->integer('dependencia_esfinteriana');
            $table->integer('dependencia_tratamientos');
            //$table->string('encargado_enfermeria');
            $table->integer('cuidados_enfermeria');
            $table->integer('necesidad_vigilancia');
            $table->integer('colaboracion');
            $table->integer('total_dependencia_general');
            $table->text('descripcion_dependencia');
            $table->integer('fisica_estabilidad');
            $table->integer('vision_audicion');
            $table->integer('fisica_locomotor');
            $table->integer('fisica_neurologicas');
            $table->integer('fisica_cardiovascular');
            $table->integer('total_deficiencia_fisica');
            $table->integer('descripcion_fisica');
            $table->string('encargado_fisica');
            $table->integer('lenguaje_comprension');
            $table->integer('orientacion_memoria');
            $table->integer('trastorno_comportamiento');
            $table->integer('capacidad_juicio');
            $table->integer('alteracion_sueño');
            $table->integer('total_deficiencia_psiquica');
            $table->text('descripcion_psiquica');
            $table->string('encargado_psiquica');

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
