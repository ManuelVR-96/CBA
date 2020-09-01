<?php

use Illuminate\Database\Seeder;

class EspecialidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especialidads')->insert([
            'id'=>1,
            'nombre'=>'Fisioterapia'
        ]);
        DB::table('especialidads')->insert([
            'id'=>2,
            'nombre'=>'Gerontología'
        ]);
        DB::table('especialidads')->insert([
            'id'=>3,
            'nombre'=>'Medicina'
        ]);
        DB::table('especialidads')->insert([
            'id'=>4,
            'nombre'=>'Nutrición'
        ]);
        DB::table('especialidads')->insert([
            'id'=>5,
            'nombre'=>'Psicología'
        ]);
        DB::table('especialidads')->insert([
            'id'=>6,
            'nombre'=>'Actividad Física'
        ]);
        DB::table('especialidads')->insert([
            'id'=>7,
            'nombre'=>'Religioso'
        ]);
    }
}
