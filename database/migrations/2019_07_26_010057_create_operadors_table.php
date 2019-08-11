<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operadors', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('cédula')->nullable();
            $table->string('nombres');
           $table->string('apellidos')->nullable();
            $table->string('cargo')->nullable();
            $table->string('nivel_educativo')->nullable();
            $table->string('formación')->nullable();
            $table->string('dirección')->nullable();
            $table->string('contraseña')->nullable();
            $table->date('fecha_de_nacimiento')->nullable();
            $table->date('fecha_de_vinculación')->nullable();
           $table->string('email')->nullable();
           $table->boolean('is_admin')->default(false);
            $table->integer('telefono')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operadors');
    }
}
