<?php

namespace App\Http\Controllers;

use App\Optional;
use App\Parentt;
use App\Student;
use App\Study;
use Illuminate\Http\Request;

class EnrolmentsController extends Controller
{
    public function index()
    {
        return view('partials.alumno');
    }

    public function padres(Request $request)
    {
        $id = $request->id;

        return view('partials.padres',compact('id'));
    }

    public function matricula(Request $request)
    {
        $id = $request->id;
        $estudios = Study::all();
        return view('partials.matricula',compact('id', 'estudios'));
    }

    public function curso(Request $request)
    {
        $id = $request->id;
        $curso = $request->curso;
        $estudios = Study::find($curso);
        return view('partials.curso'.$curso, compact( 'estudios', 'id'));
    }

    public function storeAlumno(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellidos' => 'required',
            'sexo' => 'required',
            'dni' => 'required',
            'F_nacimiento' => 'required | date',
            'telefono' => 'required',
            'localidad_nacimiento' => 'required',
            'provincia_nacimiento' => 'required',
            'pais_nacimiento' => 'required',
            'domicilio' =>'required',
            'municipio' =>'required',
            'provincia' =>'required',
            'codigo_postal' =>'required',
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
        $estudiante->save();

        $id = $estudiante->id;
        return redirect()->route('padres', $id);
    }

    public function storePadres(Request $request)
    {

        $this->validate($request, [
            'nombreProgenitorUno' =>'required',
            'apellidosProgenitorUno' =>'required',
            'dniProgenitorUno' =>'required',
            'F_nacimientoProgenitorUno' =>'required|date',
            'telefonoProgenitorUno' =>'required',
            'estudiosProgenitorUno' =>'required',
            'profesionProgenitorUno' =>'required',
            'correoProgenitorUno' =>'required',
            'domicilioProgenitorUno' => 'required',
        ]);

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
        $padre->student_id = $request->id;
        $padre->save();

        if (!empty($request->nombreProgenitorDos) || !empty($request->apellidosProgenitorDos)){
            $this->validate($request, [
                'nombreProgenitorDos' =>'required',
                'apellidosProgenitorDos' =>'required',
                'dniProgenitorDos' =>'required',
                'F_nacimientoProgenitorDos' =>'required|date',
                'telefonoProgenitorDos' =>'required',
                'estudiosProgenitorDos' =>'required',
                'profesionProgenitorDos' =>'required',
                'correoProgenitorDos' =>'required',
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
            $padre->student_id = $request->id;
            $padre->save();
        }

        $id = $request->id;
        return redirect()->route('matricula', $id);
    }

    public function storeMatricula(Request $request)
    {
        $this->validate($request, [
            'primercentro' => 'required',
            'centro_anterior'=> 'required',
            'repite'=> 'required',
            'curso_anterior'=> 'required',
            'dictamen'=> 'required',
            'matricula'=> 'required',
        ]);

        $estudiante = Student::find($request->id);
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

        $curso = $request->matricula;
        $id = $request->id;
        return redirect()->route('curso', array('id' => $id, 'curso' => $curso));
    }

    public function storePrimeroESO(Request $request)
    {
        $this->validate($request, [
            'especifica' => 'required',
            'primera'=> 'required',
            'segunda'=> 'required',
            'tercera'=> 'required',
            'bilingüe' => 'required'
        ]);

        $student = Student::find($request->id);

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera, 'student_id' => $request->id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda, 'student_id' => $request->id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera, 'student_id' => $request->id]]);

        return $request;
    }

    public function storeSegundoESO(Request $request)
    {
        $this->validate($request, [
            'especifica' => 'required',
            'primera'=> 'required',
            'segunda'=> 'required',
            'tercera'=> 'required',
            'bilingüe' => 'required'
        ]);

        $student = Student::find($request->id);

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera, 'student_id' => $request->id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda, 'student_id' => $request->id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera, 'student_id' => $request->id]]);
        $student->optionals()->attach([['orden' => 'especifica' , 'optional_id'=> $request->especifica, 'student_id' => $request->id]]);
        return $request;
    }

    public function storeTerceroESO(Request $request)
    {
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

        $student = Student::find($request->id);

        $student->optionals()->attach([['orden' => '1' , 'optional_id'=> $request->primera, 'student_id' => $request->id]]);
        $student->optionals()->attach([['orden' => '2' , 'optional_id'=> $request->segunda, 'student_id' => $request->id]]);
        $student->optionals()->attach([['orden' => '3' , 'optional_id'=> $request->tercera, 'student_id' => $request->id]]);
        $student->optionals()->attach([['orden' => '4' , 'optional_id'=> $request->cuarta, 'student_id' => $request->id]]);
        $student->optionals()->attach([['orden' => '5' , 'optional_id'=> $request->quinta, 'student_id' => $request->id]]);
        $student->optionals()->attach([['orden' => 'especifica' , 'optional_id'=> $request->especifica, 'student_id' => $request->id]]);
        $student->optionals()->attach([['orden' => 'troncal' , 'optional_id'=> $request->troncal, 'student_id' => $request->id]]);
        return $request;
    }

    public function storePrimeroPMAR(Request $request)
    {
        $this->validate($request, [
            'especifica' => 'required',
        ]);

        $student = Student::find($request->id);

        $student->optionals()->attach([['orden' => 'especifica' , 'optional_id'=> $request->especifica, 'student_id' => $request->id]]);
        return $request;
    }

    public function storeSegundoPMAR(Request $request)
    {
        $this->validate($request, [
            'especifica' => 'required',
        ]);

        $student = Student::find($request->id);

        $student->optionals()->attach([['orden' => 'especifica' , 'optional_id'=> $request->especifica, 'student_id' => $request->id]]);
        return $request;
    }
}
