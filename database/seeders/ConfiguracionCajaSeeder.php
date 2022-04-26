<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfiguracionCajaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        foreach ($this->configuraciones as $configuracion){
            DB::table('configuraciones_caja')->insert([
                'apertura' => $configuracion['apertura'],
                'created_at' => now(),
                'updated_at' => now(),
                'sucursal_id' => $configuracion['sucursal_id'],
            ]);
        }
    }

    public $configuraciones = array(
        array('apertura' => 0, 'sucursal_id' => 1),
    );
}
