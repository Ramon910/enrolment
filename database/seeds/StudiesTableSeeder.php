<?php

use Illuminate\Database\Seeder;
use App\Study;

class StudiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $study = new Study;
        $study->nombre = '1º ESO' ;
        $study->descripcion = 'Lengua Castellana y Literatura, 
                                Geografía e Historia, 
                                Matemáticas, 
                                Biología y Geología, 
                                1º Lengua extranjera: Inglés,
                                Educ. física, 
                                Tecnología,
                                Educ. plástica,
                                visual y audiovisual';
        $study->save();

        $study->options()->attach(['1','2','3','4','5']);

        $study = new Study;
        $study->nombre = '2º ESO' ;
        $study->descripcion = 'Lengua Castellana y Literatura, 
                                Geografía e Historia, 
                                Matemáticas, 
                                Física y Química, 
                                1º Lengua extranjera: Inglés,
                                Educ. física, 
                                Música,
                                Educ. plástica,
                                visual y audiovisual';
        $study->save();

        $study->options()->attach(['1','2','4','5','6']);

        $study = new Study;
        $study->nombre = '3º ESO' ;
        $study->descripcion = 'Lengua Castellana y Literatura, 
                                Geografía e Historia, 
                                Biología y Geología, 
                                Física y Química, 
                                1º Lengua extranjera: Inglés,
                                Educ. física, 
                                Música,
                                Tecnología';
        $study->save();

        $study->options()->attach(['1','2','4','5','7','8','9','10','11']);

    }
}
