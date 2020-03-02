<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActualizadoToValoraciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('valoracions', function (Blueprint $table) {
            $table->unsignedBigInteger('actualizado')->nullable(); 
            $table->foreign('actualizado')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('valoracions', function (Blueprint $table) {
            $table->dropColumn('actualizado');
        });
    }
}
