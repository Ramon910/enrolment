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

        $study = new Study;
        $study->nombre = '1º Bachillerato ciencias';
        $study->descripcion = 'Lengua castellana y literatura, 
                                Filosofía, 
                                1ª lengua extranjera: inglés,
                                matemáticas I,
                                Física y Química,';
        $study->save();
        $study->options()->attach(['20','21','22','23','24','25','1','26','27','28','29']);


        $study = new Study;
        $study->nombre = '1º Bachillerato Humanidades';
        $study->descripcion = 'Lengua castellana y literatura, 
                                Filosofía, 
                                1ª lengua extranjera: inglés,
                                Latín I';
        $study->save();
        $study->options()->attach(['30','31','23','24','26','27','1','29']);

        $study = new Study;
        $study->nombre = '1º Bachillerato Ciencias Sociales';
        $study->descripcion = 'Lengua castellana y literatura, 
                                Filosofía, 
                                1ª lengua extranjera: inglés,
                                Matemáticas aplicadas a las CCSS I,
                                Historia del mundo contemporáneo,
                                Economía';
        $study->save();
        $study->options()->attach(['23','24','26','27','1','29']);





        $study = new Study;
        $study->nombre = '2º Bachillerato Ciencias';
        $study->descripcion = 'Lengua castellana y literatura II, 
                               Historia de España, 
                               1ª lengua extranjera II: inglés II,
                               Matemáticas II';
        $study->save();
        $study->options()->attach(['32','33','34','35','36','42','43','44','45','46','47','48','49','50','51','52']);

        $study = new Study;
        $study->nombre = '2º Bachillerato Humanidades';
        $study->descripcion = 'Lengua castellana y literatura II, 
                               Historia de España, 
                               1ª lengua extranjera II: inglés II,
                               Latín II,
                               Historia de la filosofía';
        $study->save();
        $study->options()->attach(['37','38','39','44','45','46','48','49','50','51']);

        $study = new Study;
        $study->nombre = '2º Bachillerato Ciencias Sociales';
        $study->descripcion = 'Lengua castellana y literatura II, 
                               Historia de España, 
                               1ª lengua extranjera II: inglés II,
                               Matemátocas aplicadas a las CCSS II';
        $study->save();
        $study->options()->attach(['37','40','41','44','45','46','48','49','50','51']);

        $study = new Study;
        $study->nombre = 'Ciclos Formativos';
        $study->descripcion = 'Marque el ciclo y curso del cual solicita matricula (M = Mañanas / T = Tardes o vespertino)';
        $study->save();
        $study->options()->attach(['53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69',
                                   '70','71','72','73','74','75','76','77','78','79','80','81','82','83','84','85']);

    }
}
