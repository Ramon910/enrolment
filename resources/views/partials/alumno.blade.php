@extends('layouts.layout')

@section('content')
    <h1 align="center">DATOS DEL ALUMNO</h1>
{!! Form::open(['route' => ['store.alumno'], 'method' => 'POST' , 'onsubmit' => 'return validacion()']) !!}
    <div class="form-row">
        <div class="form-group col-md-3">
            <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre"  name="nombre" value="{{old('nombre')}}">
                {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-7">
            <div class="form-group {{ $errors->has('apellidos') ? 'has-error' : '' }}">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos"  name="apellidos" value="{{old('apellidos')}}">
                {!! $errors->first('apellidos', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-2">
            <div class="form-group {{ $errors->has('sexo') ? 'has-error' : '' }}">
                <label for="sexo">Sexo</label>
                <select id="sexo" name="sexo" class="form-control">
                    <option disabled selected>Seleccione</option>
                    <option value="varon" {{ old('sexo') == 'varon' ? 'selected' : '' }}>Varón</option>
                    <option value="mujer" {{ old('sexo') == 'mujer' ? 'selected' : '' }}>Mujer</option>
                </select>
                {!! $errors->first('sexo', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('dni') ? 'has-error' : '' }}">
                <label for="dni">DNI / NIE / Pasaporte</label>
                <input type="text" class="form-control" id="dni" name="dni" value="{{old('dni')}}">
                {!! $errors->first('dni', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('F_nacimiento') ? 'has-error' : '' }}">
                <label for="F_nacimiento">Fecha nacimiento</label>
                <input type="date" class="form-control" id="F_nacimiento" name="F_nacimiento" value="{{old('F_nacimiento')}}">
                {!! $errors->first('F_nacimiento', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('telefono') ? 'has-error' : '' }}">
                <label for="telefono">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}">
                {!! $errors->first('telefono', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('localidad_nacimiento') ? 'has-error' : '' }}">
                <label for="localidad_nacimiento">Localidad nacimiento</label>
                <input type="text" class="form-control" id="localidad_nacimiento" name="localidad_nacimiento" value="{{old('localidad_nacimiento')}}">
                {!! $errors->first('localidad_nacimiento', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('provincia_nacimiento') ? 'has-error' : '' }}">
                <label for="provincia_nacimiento">Provincia nacimiento</label>
                <input type="text" class="form-control" id="provincia_nacimiento" name="provincia_nacimiento" value="{{old('provincia_nacimiento')}}">
                {!! $errors->first('provincia_nacimiento', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('pais_nacimiento') ? 'has-error' : '' }}">
                <label for="pais_nacimiento">Pais nacimiento</label>
                <input type="text" class="form-control" id="pais_nacimiento" name="pais_nacimiento" value="{{old('pais_nacimiento')}}">
                {!! $errors->first('pais_nacimiento', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
    </div>


    <div class="form-row">
        <div class="form-group col-md-12">
            <div class="form-group {{ $errors->has('domicilio') ? 'has-error' : '' }}">
                <label for="domicilio">Domicilio: Calle, Plaza o Avda. y nº</label>
                <input type="text" class="form-control" id="domicilio" name="domicilio" value="{{old('domicilio')}}">
                {!! $errors->first('domicilio', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('municipio') ? 'has-error' : '' }}">
                <label for="municipio">Municipio / Localidad</label>
                <input type="text" class="form-control" id="municipio" name="municipio" value="{{old('municipio')}}">
                {!! $errors->first('municipio', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('provincia') ? 'has-error' : '' }}">
                <label for="provincia">Provincia</label>
                <input type="text" class="form-control" id="provincia" name="provincia" value="{{old('provincia')}}">
                {!! $errors->first('provincia', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('codigo_postal') ? 'has-error' : '' }}">
                <label for="codigo_postal">Código Postal</label>
                <input type="number" class="form-control" id="codigo_postal" name="codigo_postal" value="{{old('codigo_postal')}}">
                {!! $errors->first('codigo_postal', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
    </div>

<button type="submit" class="btn btn-success " >Siguiente</button>
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
