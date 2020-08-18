<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('users')->insert([
                'avatar'=>'default.jpg',
                'nombres'=> "Claudia Elena",
                'apellidos'=>"Arteaga",
                'rol'=>"Administrador",
                'email'=>"cbasanjosepereira@hotmail.com",            
                'password' => bcrypt("admin2020"), 
            ]);
        }
    }
}
