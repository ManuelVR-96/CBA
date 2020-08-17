<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanEstrategicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_estrategicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('titulo');
            $table->text('descripcion');
            $table->unsignedBigInteger('creador')->nullable();
            $table->foreign('creador')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('actualizado_por')->nullable();
            $table->foreign('actualizado_por')->references('id')->on('users')->onDelete('set null');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_estrategicos');
    }
}
