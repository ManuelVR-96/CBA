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
            $table->integer('cédula');
            $table->text('médica');
            $table->text('fisioterapeuta');
            $table->text('nutricionista');
            $table->text('psicologo');
            $table->text('enfermera');
            $table->text('profesional_deporte');
            $table->text('religiosas');
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
