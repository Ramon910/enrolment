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
        $opciones = Optional::all();
        $estudios = Study::all();
        return view('enrolment', compact('opciones', 'estudios'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellidos' => 'required',
            'sexo' => 'required',
            'dni' => 'required',
            'F_nacimiento' => 'required',
            'telefono' => 'required',
            'localidad_nacimiento' => 'required',
            'provincia_nacimiento' => 'required',
            'pais_nacimiento' => 'required',
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

        $padre = new Parentt;
        $padre->nombre = $request->nombrePadre;
        $padre->apellidos = $request->apellidosPadre;
        $padre->dni = $request->dniPadre;
        $padre->F_nacimiento = $request->F_nacimientoPadre;
        $padre->telefono = $request->telefonoPadre;
        $padre->estudios = $request->estudiosPadre;
        $padre->profesion = $request->profesionPadre;
        $padre->correo = $request->correoPadre;
        $padre->direccion = $request->domicilioPadre;
        $padre->student_id = $estudiante->id;
        $padre->save();
        return $request;
    }
}
