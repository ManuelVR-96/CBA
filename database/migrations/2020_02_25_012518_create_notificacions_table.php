<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('paciente');
            $table->foreign('paciente')->references('id')->on('clientes')->onDelete('cascade');
            $table->unsignedBigInteger('remite')->nullable();
            $table->foreign('remite')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('especialidad')->nullable();
            $table->foreign('especialidad')->references('id')->on('especialidads')->onDelete('set null');
            $table->text('descripción')->nullable();
            $table->boolean('vista')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificacions');
    }
}
