<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->text('nombre');
            $table->unsignedBigInteger('encargado')->nullable();
            $table->foreign('encargado')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('especialidad')->nullable();
            $table->foreign('especialidad')->references('id')->on('especialidads')->onDelete('set null');
            $table->text('descripcion');
            $table->date('agenda');
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
        Schema::dropIfExists('programas');
    }
}
