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
       $table->unsignedBigInteger('paciente');
        $table->foreign('paciente')->references('id')->on('clientes')->onDelete('cascade');
        $table->unsignedBigInteger('encargado')->nullable();
        $table->foreign('encargado')->references('id')->on('users')->onDelete('set null');
        $table->unsignedBigInteger('especialidad')->nullable();
        $table->foreign('especialidad')->references('id')->on('especialidads')->onDelete('set null');
        $table->text('descripción')->nullable();
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
        Schema::dropIfExists('valoracions');
    }
}
