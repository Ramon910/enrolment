<?php

use Illuminate\Database\Seeder;
use App\Optional;

class OptionalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $opcion = new Optional;
        $opcion->nombre = 'Religión';
        $opcion->descripcion = 'Específica';
        $opcion->save();

        $opcion = new Optional;
        $opcion->nombre = 'Valores éticos';
        $opcion->descripcion = 'Específica';
        $opcion->save();

        $opcion = new Optional;
        $opcion->nombre = 'Creación y expresión musical';
        $opcion->descripcion = 'Libre configuración';
        $opcion->save();

        $opcion = new Optional;
        $opcion->nombre = 'Iniciación a la investigación';
        $opcion->descripcion = 'Libre configuración';
        $opcion->save();

        $opcion = new Optional;
        $opcion->nombre = '2º Lengua extranjera: Frances';
        $opcion->descripcion = 'Libre configuración';
        $opcion->save();

        $opcion = new Optional;
        $opcion->nombre = 'Robótica';
        $opcion->descripcion = 'Libre configuración';
        $opcion->save();

        $opcion = new Optional;
        $opcion->nombre = 'Matemáticas académicas';
        $opcion->descripcion = 'Troncales';
        $opcion->save();

        $opcion = new Optional;
        $opcion->nombre = 'Matemáticas aplicadas';
        $opcion->descripcion = 'Troncales';
        $opcion->save();

        $opcion = new Optional;
        $opcion->nombre = 'Comunicación audiovisual';
        $opcion->descripcion = 'Libre configuración';
        $opcion->save();

        $opcion = new Optional;
        $opcion->nombre = 'Cultura clásica';
        $opcion->descripcion = 'Libre configuración';
        $opcion->save();

        $opcion = new Optional;
        $opcion->nombre = 'Iniciación y actividad emprendedora';
        $opcion->descripcion = 'Libre configuración';
        $opcion->save();
    }
}
