<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogoPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        foreach ($this->permisos as $permiso) {
            DB::table('catalogo_permisos')->insert([
                'permiso' => $permiso['permiso'],
                'descripcion' => $permiso['descripcion'],
                'slug' => $permiso['slug'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }

    public $permisos = array(
        array('permiso' => 'Inicio', 'descripcion' => 'Pestaña de inicio / dashboard.', 'slug' => 'inicio'),
        array('permiso' => 'Caja', 'descripcion' => 'Pestaña de informaicon sobre la caja.', 'slug' => 'caja'),
        array('permiso' => 'Realizar Venta', 'descripcion' => 'Permite generar una venta', 'slug' => 'realizar_venta'),
        array('permiso' => 'Apertura y Cierre de Caja', 'descripcion' => 'Pestaña de apertura y cierre de caja, asi como la accion de poder abrir y cerrar la caja.', 'slug' => 'apertura'),
        array('permiso' => 'Almacen', 'descripcion' => 'Pestaña que muestra lo que hay en almacen. Asi como agregar, editar, o eliminar los prosuctos del almacen.', 'slug' => 'almacen'),
        array('permiso' => 'Alertas', 'descripcion' => 'Pestaña que permite ingresar correos de alertas, ademas de editar y eliminar los correos, asi como visualizar los correos registrados.', 'slug' => 'alertas'),
        array('permiso' => 'Categorias', 'descripcion' => 'Pestaña que muestra las categorias registradas, asi como el agregar, editar o eliminar una categoria.', 'slug' => 'categorias'),
        array('permiso' => 'Estadisticas', 'descripcion' => 'Pestaña que muestra graficas con la informaicon de ventas.', 'slug' => 'estadisticas'),
        array('permiso' => 'Laboratorios', 'descripcion' => 'Pestaña que muestra los laboratorios registrados, asi como el agregar, editar o eliminar un laboratorio.', 'slug' => 'laboratorios'),
        array('permiso' => 'Logs', 'descripcion' => 'Pestaña que muestra los logs (alertas) del sistema. Asi como el poder obtener mas detalles, descargarla o eliminarla.', 'slug' => 'logs'),
        array('permiso' => 'Notas', 'descripcion' => 'Pestaña que muestra las notas registradas, asi como el agregar, editar o eliminar una nota.', 'slug' => 'notas'),
        array('permiso' => 'Productos', 'descripcion' => 'Pestaña que muestra los productos registrados, asi como el agregar, editar o eliminar un producto.', 'slug' => 'productos'),
        array('permiso' => 'Alerta de Productos', 'descripcion' => 'Pestaña que muestra las alertas generadas en base a ciertos productos.', 'slug' => 'alertas_productos'),
        array('permiso' => 'Sucursales', 'descripcion' => 'Pestaña que muestra las sucursales registradas, asi como el agregar, editar o eliminar una sucursal.', 'slug' => 'sucursales'),
        array('permiso' => 'Usuarios', 'descripcion' => 'Pestaña que muestra los usuarios registrados, asi como el agregar, editar o eliminar un usuario.', 'slug' => 'usuarios'),
        array('permiso' => 'Roles', 'descripcion' => 'Pestaña que muestra los roles registrados, asi como el agregar, editar o eliminar un rol.', 'slug' => 'roles'),
        array('permiso' => 'Ventas', 'descripcion' => 'Pestaña que muestra las ventas registradas, asi como ver sus detalles o generar un excel o pdf de las ventas.', 'slug' => 'ventas'),
        array('permiso' => 'Inventario', 'descripcion' => 'Pestaña que muestra los prodcutos registrados dentro del inventario.', 'slug' => 'inventario'),
        array('permiso' => 'Alexa', 'descripcion' => 'Funciones de Consulta y ejecucion con Alexa.', 'slug' => 'alexa'),
    );
}
