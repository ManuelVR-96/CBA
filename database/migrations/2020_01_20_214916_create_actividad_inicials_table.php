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
            $table->unsignedBigInteger('paciente');
            $table->foreign('paciente')->references('id')->on('clientes')->onDelete('cascade');
            $table->timestamps();
            $table->text('tiempo_libre');
            $table->integer('tiene_hobbies');
            $table->integer('aun_practica');
            $table->text('cual_hobbies');
            $table->string('compañia_hobbies');
            $table->string('desea_practicar');
            $table->text('observaciones_actfi');
            $table->text('evaluacion');
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
