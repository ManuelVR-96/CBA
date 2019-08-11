<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('cédula');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('nivel_educativo');
            $table->string('dirección');
            $table->integer('telefono');
            $table->string('Lugar_de_nacimiento');
            $table->date('fecha_de_nacimiento');
            $table->date('fecha_de_ingreso');
            $table->string('seguridad_social');
            $table->string('primer_acudiente');
            $table->string('segundo_acudiente');
            $table->boolean('servicio_funerario');
            $table->string('entidad_funeraria');
            $table->string('dependencia_económica');
            $table->string('dependencia_afectiva');
            $table->string('relación_familiar');
            $table->text('hobbies');
            $table->text('motivo_ingreso');
            $table->string('Tipo_Sangre');
            $table->string('EPS');
            $table->string('morbilidad');
            $table->string('género');
            $table->text('medicinas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
