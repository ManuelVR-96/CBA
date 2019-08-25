
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');                      
            #$table->string('Tipo de Documento de identidad')->nullable();
            $table->string('cedula')->nullable();
            $table->string('nombres');
            $table->string('apellidos')->nullable();
            $table->string('cargo')->nullable();
            $table->string('nivel_educativo')->nullable();
            $table->string('formación')->nullable();
            $table->string('dirección')->nullable();
            $table->date('fecha_de_nacimiento')->nullable();
            $table->date('fecha_de_vinculación')->nullable();
            $table->string('rol')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->unique();            
            $table->string('password');   
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken(); 
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
        Schema::dropIfExists('users');
    }
}
