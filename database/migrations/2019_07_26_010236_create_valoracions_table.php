<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValoracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valoracions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('encargado')->nullable();
            $table->foreign('encargado')->references('id')->on('users')->onDelete('set null');
        $table->unsignedBigInteger('paciente');
        $table->foreign('paciente')->references('id')->on('clientes')->onDelete('cascade');
 $table->unsignedBigInteger('especialidad')->nullable();
        $table->foreign('especialidad')->references('id')->on('especialidads')->onDelete('set null');
            $table->text('Descripción')->nullable();

            // $table->text('médica')->nullable();
            // $table->text('fisioterapeuta')->nullable();
            // $table->text('nutricionista')->nullable();
            // $table->text('psicologo')->nullable();
            // $table->text('enfermera')->nullable();
            // $table->text('profesional_deporte')->nullable();
            // $table->text('religiosas')->nullable();
            //$table->text('acompañantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valoracions');
    }
}
