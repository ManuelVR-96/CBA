<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadInicialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_inicials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('paciente');
            $table->foreign('paciente')->references('id')->on('clientes')->onDelete('cascade');
            $table->text('trabajos')->nullable();
            $table->string('aun_fisica')->nullable();
            $table->string('cual_fisica')->nullable();
            $table->string('frecuencia_fisica')->nullable();
            $table->string('compañia_fisica')->nullable();
            $table->string('desea_fisica')->nullable();
            $table->text('tiempo_libre')->nullable();
            $table->string('tiene_hobbies')->nullable();
            $table->text('cual_hobbies')->nullable();
            $table->string('compañia_recreacion')->nullable();
            $table->string('quiere_realizar_recreacion')->nullable();
            $table->text('observaciones')->nullable();
            $table->text('evaluacion')->nullable(); 
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
        Schema::dropIfExists('actividad_inicials');
    }
}
