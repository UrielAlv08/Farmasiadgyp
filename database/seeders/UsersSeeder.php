<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->usuarios as $usuario) {
            DB::table('users')->insert([
                'name' => $usuario['name'],
                'email' => $usuario['email'],
                'password' => $usuario['password'],
                'remember_token' => $usuario['remember_token'],
                'lastname' => $usuario['lastname'],
                'username' => $usuario['username'],
                'rol_id' => $usuario['rol_id'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }

    public $usuarios = array(
        array('name' => 'Soporte','email' => 'soporte@andocodeando.net','password' => '$2y$10$78kkNvTQnth1HLPezeBst.O5y4SqgicRpJK.R3OZnrBslFrS8TQmm','remember_token' => null, 'lastname' => 'Ando Codeando','username' => 'Soporte','rol_id' => 1),
        /*
        array('name' => 'Administrador','email' => 'noreply@tattoomarearoja.com.mx','password' => '$2y$10$78kkNvTQnth1HLPezeBst.O5y4SqgicRpJK.R3OZnrBslFrS8TQmm','remember_token' => null, 'lastname' => 'Administrador','username' => 'Admin','rol_id' => 1),
        array('name' => 'Emmanuel','email' => 'emmanueltorres_servin@hotmail.com','password' => '$2y$10$yJSCOuum6/zOSMWFLAsXp.5oVEnn/SGOtz4x96fIEPyMkTj6ahiJK','remember_token' => '85qiYUCLNXitKkomUNzJS7zcO4QZNyIWPxHmClKj1eYncelSIEqTwBuXhoUW', 'lastname' => 'Torres Servin','username' => 'Byte','rol_id' => 1),
        array('name' => 'Mariana','email' => 'gonzalezmariana833@gmail.com','password' => '$2y$10$8Vm45NjWOPH7hwkZ6o2vSe.x68DjoAySOZGtd3VmoWJqSRd80fT92','remember_token' => 'FhKtNGZYdb3unKkA9adft7UPOf39456faD8MVo2TMu4Ulkb1X8mXH0oK5KFb', 'lastname' => 'García','username' => 'marian','rol_id' => 1),
        array('name' => 'Karina','email' => 'karinaelisea77@gmail.com','password' => '$2y$10$oWSQtFtWtV1wtsP4grwCT.GNIUr0EOd5vciUgrhMVs4Lm3rApb20i','remember_token' => NULL,'lastname' => 'E.','username' => 'Karina','rol_id' => 1),
        array('name' => 'MIguel Angel','email' => 'mag750729@gmail.com','password' => '$2y$10$2pc5FX9zaE/iqu4c25W9uuKzR/d85sSUgvSMoKmqOhVMdQVtUtNaO','remember_token' => 'Ib9Nu3Zlnm2CIXjQb0UWQbJXWLAsTtjchxOutn3BYtfapzL3eZccb9YYfR2L','lastname' => 'Garcia','username' => 'MAG','rol_id' => 1),
        array('name' => 'Brenda','email' => 'brendaelisea4@gmail.com','password' => '$2y$10$66IaLvXfJjgHOPHhMjaKUO/ap9e.5VYiEz/0VL/X1Xr8AJzO52Ckq','remember_token' => NULL,'lastname' => 'E.','username' => 'Brenda','rol_id' => 2),
        array('name' => 'ADMINISTRACION','email' => 'contabilidadpyc271014@gmail.com','password' => '$2y$10$wwGT7iW9kx/B4iOmJjW77enSZ/F1fcs/zYOfYxdmGx7/QQpahEJnq','remember_token' => NULL,'lastname' => 'MJ','username' => 'ADMINISTRACION','rol_id' => 1),
        array('name' => 'Johan','email' => 'esqueleto144@gmail.com','password' => '$2y$10$VMrJy34KbUJapIErMcPISuGAwfv0z1wUoptM6OMtZe1SLwXCGgY8y','remember_token' => NULL,'lastname' => 'Guzman','username' => 'Krauss','rol_id' => 1)
        */
    );
}
