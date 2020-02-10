<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGerontologiaInicialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerontologia_inicials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('paciente');
            $table->foreign('paciente')->references('id')->on('clientes')->onDelete('cascade');
            $table->integer('cognicion_uno');
            $table->integer('cognicion_dos');
            $table->integer('cognicion_tres');
            $table->integer('cognicion_cuatro');
            $table->integer('cognicion_cinco');
            $table->integer('cognicion_seis');
            $table->integer('cognicion_total');
            $table->integer('movilidad_uno');
            $table->integer('movilidad_dos');
            $table->integer('movilidad_tres');
            $table->integer('movilidad_cuatro');
            $table->integer('movilidad_cinco');
            $table->integer('movilidad_total');
            $table->integer('autocuidado_uno');
            $table->integer('autocuidado_dos');
            $table->integer('autocuidado_tres');
            $table->integer('autocuidado_cuatro');
            $table->integer('autocuidado_total');
            $table->integer('relacionarse_uno');
            $table->integer('relacionarse_dos');
            $table->integer('relacionarse_tres');
            $table->integer('relacionarse_cuatro');
            $table->integer('relacionarse_cinco');
            $table->integer('relacionarse_total');
            $table->integer('quehacer_uno');
            $table->integer('quehacer_dos');
            $table->integer('quehacer_tres');
            $table->integer('quehacer_cuatro');
            $table->integer('quehacer_cinco');
            $table->integer('quehacer_seis');
            $table->integer('quehacer_siete');
            $table->integer('quehacer_ocho');
            $table->integer('quehacer_total');
            $table->integer('participacion_uno');
            $table->integer('participacion_dos');
            $table->integer('participacion_tres');
            $table->integer('participacion_cuatro');
            $table->integer('participacion_cinco');
            $table->integer('participacion_seis');
            $table->integer('participacion_siete');
            $table->integer('participacion_ocho');
            $table->integer('participacion_total');
            $table->integer('gerontologia_total');
            $table->string('encargado');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gerontologia_inicials');
    }
}
