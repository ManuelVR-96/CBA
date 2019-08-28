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
            $table->string('cédula')->nullable();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('nivel_educativo')->nullable();
            $table->string('dirección')->nullable();
            $table->string('telefono')->nullable();
            $table->string('Lugar_de_nacimiento')->nullable();
            $table->date('fecha_de_nacimiento')->nullable();
            $table->date('fecha_de_ingreso')->nullable();
            $table->string('seguridad_social')->nullable();
            $table->string('primer_acudiente')->nullable();
            $table->string('segundo_acudiente')->nullable();
            $table->string('servicio_funerario')->nullable();
            $table->string('entidad_funeraria')->nullable();
            $table->string('dependencia_económica')->nullable();
            $table->string('dependencia_afectiva')->nullable();
            $table->string('relación_familiar')->nullable();
            $table->text('hobbies')->nullable();
            $table->text('motivo_ingreso')->nullable();
            $table->string('Tipo_Sangre')->nullable();
            $table->string('EPS')->nullable();
            $table->string('morbilidad')->nullable();
            $table->string('género')->nullable();
            $table->text('medicinas')->nullable();
            $table->timestamps();
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
