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

        $study = new Study;
        $study->nombre = '1º PMAR' ;
        $study->descripcion = 'Ámbito científico y matemático, 
                                ámbito lingüistico y social, 
                                ámbito lenguas extranjeras, 
                                educación física,
                                música y educación plástica,
                                visual y audiovisual,
                                refuerzo de la competencia en comunicación lingüística';
        $study->save();

        $study->options()->attach(['1','2']);

        $study = new Study;
        $study->nombre = '2º PMAR' ;
        $study->descripcion = 'Ámbito científico y matemático, 
                                ámbito lingüistico y social, 
                                ámbito lenguas extranjeras,
                                educación física,
                                música,
                                tecnología, 
                                refuerzo de la competencia en comunicación lingüística';
        $study->save();

        $study->options()->attach(['1','2']);

        $study = new Study;
        $study->nombre = '4º ESO académico ciencias' ;
        $study->descripcion = 'Lengua castellana y literatura, 
                                geofrafía e historia, 
                                1ª lengua extranjera: inglés,
                                matemáticas académicas,
                                biología y geología,
                                física y química, 
                                educación física';
        $study->save();

        $study->options()->attach(['1','2','14','15','10','16','17','18','5','19']);

        $study = new Study;
        $study->nombre = '4º ESO académico Humanidades y ciencias sociales' ;
        $study->descripcion = 'Lengua castellana y literatura, 
                                geofrafía e historia, 
                                1ª lengua extranjera: inglés,
                                matemáticas académicas,
                                biología y geología,
                                economía, 
                                latín';
        $study->save();

        $study->options()->attach(['1','2','14','15','10','16','17','18','5','19']);

        $study = new Study;
        $study->nombre = '4º ESO aplicado' ;
        $study->descripcion = 'Lengua castellana y literatura, 
                                geofrafía e historia, 
                                1ª lengua extranjera: inglés,
                                matemáticas académicas,
                                biología y geología,
                                economía, 
                                latín';
        $study->save();

        $study->options()->attach(['1','2','14','15','10','16','17','18','5','19','12','13']);

    }
}
