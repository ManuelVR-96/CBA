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
            $table->integer('cédula')->nullable();
            $table->text('médica')->nullable();
            $table->text('fisioterapeuta')->nullable();
            $table->text('nutricionista')->nullable();
            $table->text('psicologo')->nullable();
            $table->text('enfermera')->nullable();
            $table->text('profesional_deporte')->nullable();
            $table->text('religiosas')->nullable();
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
