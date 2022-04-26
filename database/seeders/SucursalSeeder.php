<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        foreach ($this->sucursales as $sucursal){
            DB::table('sucursales')->insert([
                'nombre' => $sucursal['nombre'],
                'direccion' => $sucursal['direccion'],
                'telefono' => $sucursal['telefono'],
                'imagen' => $sucursal['imagen'],
                'descripcion' => $sucursal['descripcion'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }

    public $sucursales = array(
        array('nombre' => 'El 45', 'direccion' => 'Calle Sta. Ana, Reyes Acozac, 55755 Los Reyes Acozac, Méx.',
            'telefono' => '5532280807', 'imagen' => 'img.png', 'descripcion' => 'Sucursal del 45'),
    );
}
