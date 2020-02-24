<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutricionalInicialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutricional_inicials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('paciente');
            $table->foreign('paciente')->references('id')->on('clientes')->onDelete('cascade');
            $table->integer('cantidad_comida');
            $table->integer('perdida_peso');
            $table->integer('movilidad');
            $table->integer('situacion_estres');
            $table->integer('problemas_neuropsicologicos');
            $table->integer('imc');
            $table->integer('pantorrila');
            $table->integer('total_cribaje');
            $table->text('antecedentes_nutricionales');
            $table->text('consumo_alimentos');
            $table->integer('altura');
            $table->integer('circunferencia_muñeca');
            $table->integer('contextura');// estatura cm/circunferencia muñeca
            $table->integer('peso_ideal');
            $table->integer('peso_actual');
            $table->text('hallazgos_clinicos');
            $table->text('diagnosticos_nutricional');
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
        Schema::dropIfExists('nutricional_inicials');
    }
}
