<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        foreach ($this->roles as $rol){
            DB::table('roles')->insert([
                'nombre' => $rol['nombre'],
                'estatus' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }

    public $roles = array(
        array('nombre' => 'Administrador'),
    );
}
