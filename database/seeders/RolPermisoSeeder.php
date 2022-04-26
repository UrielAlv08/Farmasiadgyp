<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->permisos as $permiso) {
            DB::table('rol_permiso')->insert([
                'rol_id' => $permiso['rol_id'],
                'permiso_id' => $permiso['permiso_id'],
                'permiso' => $permiso['permiso'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }

    public $permisos = array(
        //Administrador
        array('rol_id' => 1, 'permiso_id' => 1, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 2, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 3, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 4, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 4, 'permiso' => 'x'),
        array('rol_id' => 1, 'permiso_id' => 5, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 5, 'permiso' => 'w'),
        array('rol_id' => 1, 'permiso_id' => 6, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 6, 'permiso' => 'w'),
        array('rol_id' => 1, 'permiso_id' => 7, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 7, 'permiso' => 'w'),
        array('rol_id' => 1, 'permiso_id' => 8, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 9, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 9, 'permiso' => 'w'),
        array('rol_id' => 1, 'permiso_id' => 10, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 10, 'permiso' => 'x'),
        array('rol_id' => 1, 'permiso_id' => 11, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 11, 'permiso' => 'w'),
        array('rol_id' => 1, 'permiso_id' => 12, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 12, 'permiso' => 'w'),
        array('rol_id' => 1, 'permiso_id' => 13, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 14, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 14, 'permiso' => 'w'),
        array('rol_id' => 1, 'permiso_id' => 15, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 15, 'permiso' => 'w'),
        array('rol_id' => 1, 'permiso_id' => 16, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 16, 'permiso' => 'w'),
        array('rol_id' => 1, 'permiso_id' => 17, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 17, 'permiso' => 'x'),
        array('rol_id' => 1, 'permiso_id' => 18, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 19, 'permiso' => 'r'),
        array('rol_id' => 1, 'permiso_id' => 19, 'permiso' => 'x'),
        //Empleado en Farmacias G&P
        /*
        array('rol_id' => 2, 'permiso_id' => 2, 'permiso' => 'r'),
        array('rol_id' => 2, 'permiso_id' => 3, 'permiso' => 'r'),
        array('rol_id' => 2, 'permiso_id' => 4, 'permiso' => 'r'),
        array('rol_id' => 2, 'permiso_id' => 4, 'permiso' => 'x'),
        array('rol_id' => 2, 'permiso_id' => 5, 'permiso' => 'r'),
        array('rol_id' => 2, 'permiso_id' => 17, 'permiso' => 'x'),
        */
    );

}
