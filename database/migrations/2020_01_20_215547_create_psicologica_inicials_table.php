<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsicologicaInicialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psicologica_inicials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('paciente');
            $table->foreign('paciente')->references('id')->on('clientes')->onDelete('cascade');
            $table->integer('escala_pfeffer');
            $table->integer('minimental');
            $table->integer('yesavage_uno');
            $table->integer('yesavage_dos');
            $table->integer('yesavage_tres');
            $table->integer('yesavage_cuatro');
            $table->integer('yesavage_cinco');
            $table->integer('yesavage_seis');
            $table->integer('yesavage_siete');
            $table->integer('yesavage_ocho');
            $table->integer('yesavage_nueve');
            $table->integer('yesavage_diez');
            $table->integer('yesavage_once');
            $table->integer('yesavage_doce');
            $table->integer('yesavage_trece');
            $table->integer('yesavage_catorce');
            $table->integer('yesavage_quince');
            $table->integer('yesavage_total');
            $table->integer('autoestima_uno');
            $table->integer('autoestima_dos');
            $table->integer('autoestima_tres');
            $table->integer('autoestima_cuatro');
            $table->integer('autoestima_cinco');
            $table->integer('autoestima_seis');
            $table->integer('autoestima_siete');
            $table->integer('autoestima_ocho');
            $table->integer('autoestima_nueve');
            $table->integer('autoestima_diez');
            $table->integer('autoestima_total');
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
        Schema::dropIfExists('psicologica_inicials');
    }
}
