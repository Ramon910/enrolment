@extends('layouts.layout')

@section('content')
    {!! Form::open(['route' => ['store.padres'], 'method' => 'POST']) !!}
    <input type="text" hidden value="{{ $id }}" name="id">
    <h3>Datos del progenitor 1 </h3>
    <div class="form-row">
        <div class="form-group col-md-4" {{ $errors->has('nombreProgenitorUno') ? 'has-error' : '' }}>
            <label for="nombreProgenitorUno">Nombre padre</label>
            <input type="text" class="form-control" id="nombreProgenitorUno"  name="nombreProgenitorUno" value="{{old('nombreProgenitorUno')}}">
            {!! $errors->first('nombreProgenitorUno', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('apellidosProgenitorUno') ? 'has-error' : '' }}>
            <label for="apellidosProgenitorUno">Apellidos padre</label>
            <input type="text" class="form-control" id="apellidosProgenitorUno"  name="apellidosProgenitorUno" value="{{old('apellidosProgenitorUno')}}">
            {!! $errors->first('apellidosProgenitorUno', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('dniProgenitorUno') ? 'has-error' : '' }}>
            <label for="dniProgenitorUno">DNI / NIE / Pasaporte padre</label>
            <input type="text" class="form-control" id="dniProgenitorUno" name="dniProgenitorUno" value="{{old('dniProgenitorUno')}}">
            {!! $errors->first('dniProgenitorUno', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4" {{ $errors->has('F_nacimientoProgenitorUno') ? 'has-error' : '' }}>
            <label for="F_nacimientoProgenitorUno">Fecha nacimiento padre</label>
            <input type="date" class="form-control" id="F_nacimientoProgenitorUno" name="F_nacimientoProgenitorUno" value="{{old('F_nacimientoProgenitorUno')}}">
            {!! $errors->first('F_nacimientoProgenitorUno', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('telefonoProgenitorUno') ? 'has-error' : '' }}>
            <label for="telefonoProgenitorUno">Telefono padre</label>
            <input type="text" class="form-control" id="telefonoProgenitorUno" name="telefonoProgenitorUno" value="{{old('telefonoProgenitorUno')}}" >
            {!! $errors->first('telefonoProgenitorUno', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('correoProgenitorUno') ? 'has-error' : '' }}>
            <label for="correoProgenitorUno">Correo electrónico padre</label>
            <input type="email" class="form-control" id="correoProgenitorUno" name="correoProgenitorUno" value="{{old('correoProgenitorUno')}}" >
            {!! $errors->first('correoProgenitorUno', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4" {{ $errors->has('domicilioProgenitorUno') ? 'has-error' : '' }}>
            <label for="domicilioProgenitorUno">Domicilio padre</label>
            <input type="text" class="form-control" id="domicilioProgenitorUno" name="domicilioProgenitorUno" value="{{old('domicilioProgenitorUno')}}" >
            {!! $errors->first('domicilioProgenitorUno', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('estudiosProgenitorUno') ? 'has-error' : '' }}>
            <label for="estudiosProgenitorUno">Estudios padre</label>
            <input type="text" class="form-control" id="estudiosProgenitorUno" name="estudiosProgenitorUno" value="{{old('estudiosProgenitorUno')}}">
            {!! $errors->first('estudiosProgenitorUno', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4"{{ $errors->has('profesionProgenitorUno') ? 'has-error' : '' }} >
            <label for="profesionProgenitorUno">Profesión Padre</label>
            <input type="text" class="form-control" id="profesionProgenitorUno" name="profesionProgenitorUno" value="{{old('profesionProgenitorUno')}}">
            {!! $errors->first('profesionProgenitorUno', '<span class="help-block">:message</span>') !!}
        </div>
    </div>

    <h3>Datos Progenitor 2</h3>
    <div class="form-row">
        <div class="form-group col-md-4" {{ $errors->has('nombreProgenitorDos') ? 'has-error' : '' }}>
            <label for="nombreProgenitorDos">Nombre Madre</label>
            <input type="text" class="form-control" id="nombreProgenitorDos"  name="nombreProgenitorDos" value="{{old('nombreProgenitorDos')}}">
            {!! $errors->first('nombreProgenitorDos', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('apellidosProgenitorDos') ? 'has-error' : '' }}>
            <label for="apellidosProgenitorDos">Apellidos Madre</label>
            <input type="text" class="form-control" id="apellidosProgenitorDos"  name="apellidosProgenitorDos" value="{{old('apellidosProgenitorDos')}}">
            {!! $errors->first('apellidosProgenitorDos', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('dniProgenitorDos') ? 'has-error' : '' }}>
            <label for="dniProgenitorDos">DNI / NIE / Pasaporte Madre</label>
            <input type="text" class="form-control" id="dniProgenitorDos" name="dniProgenitorDos" value="{{old('dniProgenitorDos')}}">
            {!! $errors->first('dniProgenitorDos', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4" {{ $errors->has('F_nacimientoProgenitorDos') ? 'has-error' : '' }}>
            <label for="F_nacimientoProgenitorDos">Fecha nacimiento Madre</label>
            <input type="date" class="form-control" id="F_nacimientoProgenitorDos" name="F_nacimientoProgenitorDos" value="{{old('F_nacimientoProgenitorDos')}}">
            {!! $errors->first('F_nacimientoProgenitorDos', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('telefonoProgenitorDos') ? 'has-error' : '' }}>
            <label for="telefonoProgenitorDos">Telefono Madre</label>
            <input type="text" class="form-control" id="telefonoProgenitorDos" name="telefonoProgenitorDos" value="{{old('telefonoProgenitorDos')}}">
            {!! $errors->first('telefonoProgenitorDos', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('correoProgenitorDos') ? 'has-error' : '' }}>
            <label for="correoProgenitorDos">Correo electrónico Madre</label>
            <input type="email" class="form-control" id="correoProgenitorDos" name="correoProgenitorDos" value="{{old('correoProgenitorDos')}}">
            {!! $errors->first('correoProgenitorDos', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4" {{ $errors->has('domicilioProgenitorDos') ? 'has-error' : '' }}>
            <label for="domicilioProgenitorDos">Domicilio Madre</label>
            <input type="text" class="form-control" id="domicilioProgenitorDos" name="domicilioProgenitorDos" value="{{old('domicilioProgenitorDos')}}">
            {!! $errors->first('domicilioProgenitorDos', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4"{{ $errors->has('estudiosProgenitorDos') ? 'has-error' : '' }}>
            <label for="estudiosProgenitorDos">Estudios Madre</label>
            <input type="text" class="form-control" id="estudiosProgenitorDos" name="estudiosProgenitorDos" value="{{old('estudiosProgenitorDos')}}">
            {!! $errors->first('estudiosProgenitorDos', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('profesionProgenitorDos') ? 'has-error' : '' }}>
            <label for="profesionProgenitorDos">Profesión Madre</label>
            <input type="text" class="form-control" id="profesionProgenitorDos" name="profesionProgenitorDos" value="{{old('profesionProgenitorDos')}}">
            {!! $errors->first('profesionProgenitorDos', '<span class="help-block">:message</span>') !!}
        </div>
    </div>

    <button type="submit" class="btn btn-success ">Siguiente</button>
    {{ Form::close() }}

@endsection

@push('scripts')
    <script>

        $( document ).ready(function() {
            function validacion() {
                var nombre = $('#nombre').val();
                console.log(nombre);
                if (nombre <= 0){
                    alert('escriba el nombre');
                    return false;
                }
            }
        });

    </script>
@endpush