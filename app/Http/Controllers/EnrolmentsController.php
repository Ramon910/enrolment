<?php

namespace App\Http\Controllers;

if (isset($_SESSION['nombre'])){
    session_destroy();
}
session_start();

use App\Optional;
use App\Parentt;
use App\Student;
use App\Study;
use http\Env\Response;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade as PDF;


class EnrolmentsController extends Controller
{
    public function index()
    {
        session_destroy();
        $estudios = Study::all();
        return view('partials.alumno', compact('estudios'));
    }

    public function curso(Request $request)
    {
        if (isset($_SESSION['nombre'])){
            $curso = $request->curso;
            $estudios = Study::find($curso);
            return view('partials.curso'.$curso, compact( 'estudios'));
        }else{
            return redirect()->route('index');
        }

    }

    public function storeAlumno(Request $request)
    {
        if ($request->ajax()){
            $_SESSION['nombre'] = $request->nombre;
            $_SESSION['apellidos'] = $request->apellidos;
            $_SESSION['sexo'] = $request->sexo;
            $_SESSION['dni'] = $request->dni;
            $_SESSION['F_nacimiento'] = $request->F_nacimiento;
            $_SESSION['telefono'] = $request->telefono;
            $_SESSION['localidad_nacimiento'] = $request->localidad_nacimiento;
            $_SESSION['provincia_nacimiento'] = $request->provincia_nacimiento;
            $_SESSION['pais_nacimiento'] = $request->pais_nacimiento;
            $_SESSION['domicilio'] = $request->domicilio;
            $_SESSION['municipio'] = $request->municipio;
            $_SESSION['provincia'] = $request->provincia;
            $_SESSION['codigo_postal'] = $request->codigo_postal;
        }

        return \Illuminate\Support\Facades\Response::json($request);
    }

    public function storePadres(Request $request)
    {
        if ($request->ajax()){
            $_SESSION['nombreProgenitorUno'] = $request->nombreProgenitorUno;
            $_SESSION['apellidosProgenitorUno'] = $request->apellidosProgenitorUno;
            $_SESSION['dniProgenitorUno'] = $request->dniProgenitorUno;
            $_SESSION['F_nacimientoProgenitorUno'] = $request->F_nacimientoProgenitorUno;
            $_SESSION['telefonoProgenitorUno'] = $request->telefonoProgenitorUno;
            $_SESSION['estudiosProgenitorUno'] = $request->estudiosProgenitorUno;
            $_SESSION['profesionProgenitorUno'] = $request->profesionProgenitorUno;
            $_SESSION['correoProgenitorUno'] = $request->correoProgenitorUno;
            $_SESSION['domicilioProgenitorUno'] = $request->domicilioProgenitorUno;

            $_SESSION['nombreProgenitorDos'] = $request->nombreProgenitorDos;
            $_SESSION['apellidosProgenitorDos'] = $request->apellidosProgenitorDos;
            $_SESSION['dniProgenitorDos'] = $request->dniProgenitorDos;
            $_SESSION['F_nacimientoProgenitorDos'] = $request->F_nacimientoProgenitorDos;
            $_SESSION['telefonoProgenitorDos'] = $request->telefonoProgenitorDos;
            $_SESSION['estudiosProgenitorDos'] = $request->estudiosProgenitorDos;
            $_SESSION['profesionProgenitorDos'] = $request->profesionProgenitorDos;
            $_SESSION['correoProgenitorDos'] = $request->correoProgenitorDos;
            $_SESSION['domicilioProgenitorDos'] = $request->domicilioProgenitorDos;

        }

        return \Illuminate\Support\Facades\Response::json($request);
    }

    public function storeMatricula(Request $request)
    {
        $_SESSION['primercentro']= $request->primercentro;
        $_SESSION['ampa'] = $request->ampa;
        $_SESSION['transporte'] = $request->transporte;
        $_SESSION['centro_anterior'] = $request->centro_anterior;
        $_SESSION['repite'] = $request->repite;
        $_SESSION['pendientes'] = $request->pendientes;
        $_SESSION['curso_anterior'] = $request->curso_anterior;
        $_SESSION['dictamen'] = $request->dictamen;
        $_SESSION['matricula'] = $request->matricula;

        $curso = $request->matricula;
        return redirect()->route('curso', $curso);
    }

    public function guardar(Request $request)
    {
        //Alumno
        $this->validate($request, [
            'nombre' => 'required',
            'apellidos' => 'required',
            'sexo' => 'required',
            'dni' => 'required',
            'F_nacimiento' => 'required | date_format:"Y-m-d"',
            'telefono' => 'required | numeric',
            'localidad_nacimiento' => 'required',
            'provincia_nacimiento' => 'required',
            'pais_nacimiento' => 'required',
            'domicilio' =>'required',
            'municipio' =>'required',
            'provincia' =>'required',
            'codigo_postal' =>'required | numeric',

            'nombreProgenitorUno' =>'required',
            'apellidosProgenitorUno' =>'required',
            'dniProgenitorUno' =>'required',
            'F_nacimientoProgenitorUno' =>'required|date_format:"Y-m-d"',
            'telefonoProgenitorUno' =>'required | numeric',
            'estudiosProgenitorUno' =>'required',
            'profesionProgenitorUno' =>'required',
            'correoProgenitorUno' =>'required | email',
            'domicilioProgenitorUno' => 'required',

            'primercentro' => 'required',
            'centro_anterior'=> 'required',
            'repite'=> 'required',
            'curso_anterior'=> 'required',
            'dictamen'=> 'required',
            'matricula'=> 'required',
        ]);

        $estudiante = new Student;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellidos = $request->apellidos;
        $estudiante->sexo = $request->sexo;
        $estudiante->dni = $request->dni;
        $estudiante->F_nacimiento = $request->F_nacimiento;
        $estudiante->telefono = $request->telefono;
        $estudiante->localidad_nacimiento = $request->localidad_nacimiento;
        $estudiante->provincia_nacimiento = $request->provincia_nacimiento;
        $estudiante->pais_nacimiento = $request->pais_nacimiento;
        $estudiante->domicilio = $request->domicilio;
        $estudiante->municipio = $request->municipio;
        $estudiante->provincia = $request->provincia;
        $estudiante->codigo_postal = $request->codigo_postal;
        //matricula
        $estudiante->primer_centro= $request->primercentro;
        $estudiante->ampa = $request->ampa;
        $estudiante->transporte = $request->transporte;
        $estudiante->centro_anterior = $request->centro_anterior;
        $estudiante->repite = $request->repite;
        $estudiante->pendientes = $request->pendientes;
        $estudiante->curso_anterior = $request->curso_anterior;
        $estudiante->dictamen = $request->dictamen;
        $estudiante->study_id = $request->matricula;
        $estudiante->save();

        //padres
        $padre = new Parentt;
        $padre->nombre = $request->nombreProgenitorUno;
        $padre->apellidos = $request->apellidosProgenitorUno;
        $padre->dni = $request->dniProgenitorUno;
        $padre->F_nacimiento = $request->F_nacimientoProgenitorUno;
        $padre->telefono = $request->telefonoProgenitorUno;
        $padre->estudios = $request->estudiosProgenitorUno;
        $padre->profesion = $request->profesionProgenitorUno;
        $padre->correo = $request->correoProgenitorUno;
        $padre->direccion = $request->domicilioProgenitorUno;
        $padre->student_id = $estudiante->id;
        $padre->save();

        if (!empty($request->nombreProgenitorDos) || !empty($request->apellidosProgenitorDos)) {
            $this->validate($request, [
                'nombreProgenitorDos' => 'required',
                'apellidosProgenitorDos' => 'required',
                'dniProgenitorDos' => 'required',
                'F_nacimientoProgenitorDos' => 'required|date_format:"Y-m-d"',
                'telefonoProgenitorDos' => 'required | numeric',
                'estudiosProgenitorDos' => 'required',
                'profesionProgenitorDos' => 'required',
                'correoProgenitorDos' => 'required | email',
                'domicilioProgenitorDos' => 'required',
            ]);

            $padre = new Parentt;
            $padre->nombre = $request->nombreProgenitorDos;
            $padre->apellidos = $request->apellidosProgenitorDos;
            $padre->dni = $request->dniProgenitorDos;
            $padre->F_nacimiento = $request->F_nacimientoProgenitorDos;
            $padre->telefono = $request->telefonoProgenitorDos;
            $padre->estudios = $request->estudiosProgenitorDos;
            $padre->profesion = $request->profesionProgenitorDos;
            $padre->correo = $request->correoProgenitorDos;
            $padre->direccion = $request->domicilioProgenitorDos;
            $padre->student_id = $estudiante->id;
            $padre->save();
        }



        return $estudiante->id;
    }


    public function storePrimeroESO(Request $request)
    {
        $id = $this->guardar($request);
        $this->validate($request, [
            'especifica' => 'required',
            'primera'=> 'required',
            'segunda'=> 'required',
            'tercera'=> 'required',
            'bilingüe' => 'required'
        ]);

        $student = Student::find($id);
        $student->bilingüe = $request->bilingüe;
        $student->save();

        $student->optionals()->attach([['orden' => 'Específica' , 'optional_id'=> $request->especifica, 'student_id' => $id]]);

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera, 'student_id' => $id]]);

       /* $dompdf = new Dompdf();
        $dompdf->loadHtml('<h1 style="text-align: center;">HOJA DE PRUEBA</h1>
                                <div><p>'.$student->nombre.'</p><p>'.$student->apellidos.'</p></div>');

        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();*/

        //$pdf = PDF::loadView('pdf.matricula', compact('student'));
        //return $pdf->download('listado.pdf');//return view('partials.alumno');

        /*header("Content-disposition: attachment; filename=/storage/public/fotos/document.pdf");
        header("Content-type: MIME");
        readfile("document.pdf");*/

        return ('hola');
        //return redirect()->route('pdf', $student);
    }

    public function pdf(Request $request)
    {
        $id = $request->id;
        $student = Student::find($id);
        return view('pdf.matricula', compact('student'));

    }



    public function storeSegundoESO(Request $request)
    {
        $id = $this->guardar($request);
        $this->validate($request, [
            'especifica' => 'required',
            'primera'=> 'required',
            'segunda'=> 'required',
            'tercera'=> 'required',
            'bilingüe' => 'required'
        ]);

        $student = Student::find($id);
        $student->bilingüe = $request->bilingüe;
        $student->save();

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => 'especifica' , 'optional_id'=> $request->especifica, 'student_id' => $id]]);
        return $request;
    }

    public function storeTerceroESO(Request $request)
    {
        $id = $this->guardar($request);
        $this->validate($request, [
            'troncal' => 'required',
            'especifica' => 'required',
            'primera'=> 'required',
            'segunda'=> 'required',
            'tercera'=> 'required',
            'cuarta' => 'required',
            'quinta' => 'required',
            'bilingüe' => 'required'
        ]);

        $student = Student::find($id);
        $student->bilingüe = $request->bilingüe;
        $student->save();

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '4' , 'optional_id'=> $request->cuarta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '5' , 'optional_id'=> $request->quinta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => 'especifica' , 'optional_id'=> $request->especifica, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => 'troncal' , 'optional_id'=> $request->troncal, 'student_id' => $id]]);
        return $request;
    }

    public function storePrimeroPMAR(Request $request)
    {
        $id = $this->guardar($request);
        $this->validate($request, [
            'especifica' => 'required',
        ]);

        $student = Student::find($id);

        $student->optionals()->attach([['orden' => 'especifica' , 'optional_id'=> $request->especifica, 'student_id' => $id]]);
        return $request;
    }

    public function storeSegundoPMAR(Request $request)
    {
        $id = $this->guardar($request);
        $this->validate($request, [
            'especifica' => 'required',
        ]);

        $student = Student::find($id);

        $student->optionals()->attach([['orden' => 'especifica' , 'optional_id'=> $request->especifica, 'student_id' => $id]]);
        return $request;
    }

    public function storeCuartoEso1(Request $request)
    {
        $id = $this->guardar($request);
        $this->validate($request, [
            'especifica' => 'required',
            'primera'=> 'required',
            'segunda'=> 'required',
            'tercera'=> 'required',
            'cuarta' => 'required',
            'quinta' => 'required',
            'sexta' => 'required',
            'septima' => 'required',
            'octava' => 'required',
        ]);

        $student = Student::find($id);

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '4' , 'optional_id'=> $request->cuarta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '5' , 'optional_id'=> $request->quinta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '6' , 'optional_id'=> $request->sexta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '7' , 'optional_id'=> $request->septima, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '8' , 'optional_id'=> $request->octava, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => 'especifica' , 'optional_id'=> $request->especifica, 'student_id' => $id]]);

        return $request;
    }

    public function storeCuartoEso3(Request $request)
    {
        $id = $this->guardar($request);
        $this->validate($request, [
            'troncal' => 'required',
            'especifica' => 'required',
            'primera'=> 'required',
            'segunda'=> 'required',
            'tercera'=> 'required',
            'cuarta' => 'required',
            'quinta' => 'required',
            'sexta' => 'required',
            'septima' => 'required',
            'octava' => 'required',
        ]);

        $student = Student::find($id);

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '4' , 'optional_id'=> $request->cuarta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '5' , 'optional_id'=> $request->quinta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '6' , 'optional_id'=> $request->sexta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '7' , 'optional_id'=> $request->septima, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '8' , 'optional_id'=> $request->octava, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => 'troncal' , 'optional_id'=> $request->troncal, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => 'especifica' , 'optional_id'=> $request->especifica, 'student_id' => $id]]);

        return $request;
    }

    public function storePrimeroBachiller1(Request $request)
    {
        $id = $this->guardar($request);
        $this->validate($request, [
            'opcion' => 'required',
            'primera'=> 'required',
            'segunda'=> 'required',
            'tercera'=> 'required',
            'cuarta' => 'required',
            'quinta' => 'required',
            'sexta' => 'required',
            'septima' => 'required',
            'octava' => 'required',
            'novena' => 'required',
        ]);

        $student = Student::find($id);

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '4' , 'optional_id'=> $request->cuarta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '5' , 'optional_id'=> $request->quinta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '6' , 'optional_id'=> $request->sexta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '7' , 'optional_id'=> $request->septima, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '8' , 'optional_id'=> $request->octava, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '9' , 'optional_id'=> $request->novena, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => 'de opción' , 'optional_id'=> $request->troncal, 'student_id' => $id]]);

        return $request;
    }

    public function storePrimeroBachiller2(Request $request)
    {
        $id = $this->guardar($request);
        $this->validate($request, [
            'opcion' => 'required',
            'primera'=> 'required',
            'segunda'=> 'required',
            'tercera'=> 'required',
            'cuarta' => 'required',
            'quinta' => 'required',
            'sexta' => 'required',
        ]);

        $student = Student::find($id);

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '4' , 'optional_id'=> $request->cuarta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '5' , 'optional_id'=> $request->quinta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '6' , 'optional_id'=> $request->sexta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => 'de opción' , 'optional_id'=> $request->troncal, 'student_id' => $id]]);

        return $request;
    }

    public function storePrimeroBachiller3(Request $request)
    {
        $id = $this->guardar($request);
        $this->validate($request, [
            'primera'=> 'required',
            'segunda'=> 'required',
            'tercera'=> 'required',
            'cuarta' => 'required',
            'quinta' => 'required',
            'sexta' => 'required',
        ]);

        $student = Student::find($id);

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '4' , 'optional_id'=> $request->cuarta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '5' , 'optional_id'=> $request->quinta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '6' , 'optional_id'=> $request->sexta, 'student_id' => $id]]);

        return $request;
    }

    public function storeSegundoBachiller1(Request $request)
    {
        $id = $this->guardar($request);
        $this->validate($request, [
            'opcion_primera' => 'required',
            'opcion_segunda' => 'required',
            'primera'=> 'required',
            'segunda'=> 'required',
            'tercera'=> 'required',
            'cuarta' => 'required',
            'quinta' => 'required',
            'primera1'=> 'required',
            'segunda1'=> 'required',
            'tercera1'=> 'required',
            'cuarta1' => 'required',
            'quinta1' => 'required',
            'sexta1' => 'required',
        ]);

        $student = Student::find($id);

        $student->optionals()->attach([['orden' => 'de opción' , 'optional_id'=> $request->opcion_primera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => 'de opción' , 'optional_id'=> $request->opcion_segunda, 'student_id' => $id]]);

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '4' , 'optional_id'=> $request->cuarta, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '5' , 'optional_id'=> $request->quinta, 'student_id' => $id]]);

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera1, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda1, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera1, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '4' , 'optional_id'=> $request->cuarta1, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '5' , 'optional_id'=> $request->quinta1, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '6' , 'optional_id'=> $request->sexta1, 'student_id' => $id]]);

        return $request;
    }

    public function storeSegundoBachiller2(Request $request)
    {
        $id = $this->guardar($request);
        $this->validate($request, [
            'opcion' => 'required',
            'primera'=> 'required',
            'segunda'=> 'required',
            'tercera'=> 'requstoreCiclosFormativosired',
            'primera1'=> 'required',
            'segunda1'=> 'required',
            'tercera1'=> 'required',
            'cuarta1' => 'required',
        ]);

        $student = Student::find($id);

        $student->optionals()->attach([['orden' => 'de opción' , 'optional_id'=> $request->opcion, 'student_id' => $id]]);

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera, 'student_id' => $id]]);

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera1, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda1, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera1, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '4' , 'optional_id'=> $request->cuarta1, 'student_id' => $id]]);

        return $request;
    }

    public function storeSegundoBachiller3(Request $request)
    {
        $id = $this->guardar($request);
        $this->validate($request, [
            'opcion_primera' => 'required',
            'opcion_segunda' => 'required',
            'primera'=> 'required',
            'segunda'=> 'required',
            'tercera'=> 'required',
            'primera1'=> 'required',
            'segunda1'=> 'required',
            'tercera1'=> 'required',
            'cuarta1' => 'required',
        ]);

        $student = Student::find($id);

        $student->optionals()->attach([['orden' => 'de opción' , 'optional_id'=> $request->opcion_primera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => 'de opción' , 'optional_id'=> $request->opcion_segunda, 'student_id' => $id]]);

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera, 'student_id' => $id]]);

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera1, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda1, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera1, 'student_id' => $id]]);
        $student->optionals()->attach([['orden' => '4' , 'optional_id'=> $request->cuarta1, 'student_id' => $id]]);

        return redirect()->route('pdf', $student);
    }

    public function storeCiclosFormativos(Request $request)
    {
        $id = $this->guardar($request);
        $this->validate($request, [
            'ciclo' => 'required',
        ]);

        $student = Student::find($id);

        $student->optionals()->attach([['orden' => 'Ciclo Formativo' , 'optional_id'=> $request->ciclo, 'student_id' => $id]]);

        return $request;
    }


}
