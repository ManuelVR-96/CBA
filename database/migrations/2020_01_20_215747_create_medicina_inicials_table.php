<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinaInicialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicina_inicials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('paciente');
            $table->foreign('paciente')->references('id')->on('clientes')->onDelete('cascade');
            $table->text('antecedentes_patologicos');
            $table->text('morbilidad_actual');
            $table->text('consumo_medicinas');
            $table->text('signos_vitales');
            $table->text('resumen_fisico');
            $table->text('diagnostico');
            $table->text('conducta');
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
        Schema::dropIfExists('medicina_inicials');
    }
}
