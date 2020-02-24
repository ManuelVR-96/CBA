<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestDeltasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_deltas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('paciente')->nullable();
            $table->foreign('paciente')->references('id')->on('clientes')->onDelete('cascade');
            //DEPENDENCIA GENERAL
            $table->integer('dependencia_movilizacion')->nullable()->default(0);
            $table->integer('dependencia_deambulacion')->nullable()->default(0);
            $table->integer('dependencia_aseo')->nullable()->default(0);
            $table->integer('dependencia_vestido')->nullable()->default(0);
            $table->integer('dependencia_alimentacion')->nullable()->default(0);
            $table->integer('dependencia_esfinteriana')->nullable()->default(0);
            $table->integer('dependencia_tratamientos')->nullable()->default(0);
            $table->integer('cuidados_enfermeria')->nullable()->default(0);
            $table->integer('necesidad_vigilancia')->nullable()->default(0);
            $table->integer('colaboracion')->nullable()->default(0);
            $table->integer('total_dependencia_general')->nullable()->default(0);
            $table->text('descripcion_dependencia')->nullable()->default(0);
            $table->string('encargado_general')->nullable()->default(0);
            //DEPENDENCIA FÍSICA
            $table->integer('fisica_estabilidad')->nullable()->default(0);
            $table->integer('vision_audicion')->nullable()->default(0);
            $table->integer('fisica_locomotor')->nullable()->default(0);
            $table->integer('fisica_neurologicas')->nullable()->default(0);
            $table->integer('fisica_cardiovascular')->nullable()->default(0);
            $table->integer('total_deficiencia_fisica')->nullable()->default(0);
            $table->text('descripcion_fisica')->nullable()->default(0);
            $table->string('encargado_fisica')->nullable()->default(0);
            //DEPENDENCIA PSÍQUICA
            $table->integer('lenguaje_comprension')->nullable()->default(0);
            $table->integer('orientacion_memoria')->nullable()->default(0);
            $table->integer('trastorno_comportamiento')->nullable()->default(0);
            $table->integer('capacidad_juicio')->nullable()->default(0);
            $table->integer('alteracion_sueño')->nullable()->default(0);
            $table->integer('total_deficiencia_psiquica')->nullable()->default(0);
            $table->text('descripcion_psiquica')->nullable()->default(0);
            $table->string('encargado_psiquica')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_deltas');
    }
}
