@extends('layouts.layout')

@section('content')
    {!! Form::open(['route' => ['store.padres'], 'method' => 'POST', 'onsubmit' => 'return validacion()']) !!}
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

    <button type="submit" class="btn btn-success float-right" >Siguiente</button>
    <h5 style="text-align: center" id="error"></h5>
    {{ Form::close() }}

@endsection

@push('scripts')
    <script>
        function validacion() {
            var centinel =0;

            //VALIDACIÓN PROGENITOR 1
            var nombreProgenitorUno = $('#nombreProgenitorUno');
            var apellidosProgenitorUno = $('#apellidosProgenitorUno');
            var dniProgenitorUno =$('#dniProgenitorUno');
            var F_nacimientoProgenitorUno = $('#F_nacimientoProgenitorUno');
            var telefonoProgenitorUno = $('#telefonoProgenitorUno');
            var correoProgenitorUno = $('#correoProgenitorUno');
            var domicilioProgenitorUno = $('#domicilioProgenitorUno');
            var estudiosProgenitorUno = $('#estudiosProgenitorUno');
            var profesionProgenitorUno = $('#profesionProgenitorUno');

            if (nombreProgenitorUno.val() == null || nombreProgenitorUno.val().length == 0 ||  /^\s+$/.test(nombreProgenitorUno.val())){
                nombreProgenitorUno.addClass('error');
                centinel = 1;
            }else {
                nombreProgenitorUno.removeClass('error');
            }
            if(apellidosProgenitorUno.val() == null || apellidosProgenitorUno.val().length == 0 || /^\s+$/.test(apellidosProgenitorUno.val())){
                apellidosProgenitorUno.addClass('error');
                centinel = 1;
            }else {
                apellidosProgenitorUno.removeClass('error');
            }

            if(nif(dniProgenitorUno.val())){
                dniProgenitorUno.removeClass('error');
            }else {
                dniProgenitorUno.addClass('error');
                centinel = 1;
            }

            if (F_nacimientoProgenitorUno.val().match(/^[0-9]{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])/)){
                F_nacimientoProgenitorUno.removeClass('error');
            } else {
                F_nacimientoProgenitorUno.addClass('error');
                centinel = 1;
            }

            if (telefonoProgenitorUno.val().match(/^([0-9]+){9}$/)){
                telefonoProgenitorUno.removeClass('error');
            } else {
                telefonoProgenitorUno.addClass('error');
                centinel = 1;
            }

            if (domicilioProgenitorUno.val() == null || domicilioProgenitorUno.val().length == 0 ||  /^\s+$/.test(domicilioProgenitorUno.val())){
                domicilioProgenitorUno.addClass('error');
                centinel = 1;
            }else {
                domicilioProgenitorUno.removeClass('error');
            }

            if (estudiosProgenitorUno.val() == null || estudiosProgenitorUno.val().length == 0 ||  /^\s+$/.test(estudiosProgenitorUno.val())){
                estudiosProgenitorUno.addClass('error');
                centinel = 1;
            }else {
                estudiosProgenitorUno.removeClass('error');
            }

            if (profesionProgenitorUno.val() == null || profesionProgenitorUno.val().length == 0 ||  /^\s+$/.test(profesionProgenitorUno.val())){
                profesionProgenitorUno.addClass('error');
                centinel = 1;
            }else {
                profesionProgenitorUno.removeClass('error');
            }

            if (correoProgenitorUno.val().match(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i)){
                correoProgenitorUno.removeClass('error');
            }else{
                correoProgenitorUno.addClass('error');
                centinel = 1;
            }

            //VALIDACIÓN PROGENITOR 2
            var nombreProgenitorDos = $('#nombreProgenitorDos');
            var apellidosProgenitorDos = $('#apellidosProgenitorDos');
            var dniProgenitorDos =$('#dniProgenitorDos');
            var F_nacimientoProgenitorDos = $('#F_nacimientoProgenitorDos');
            var telefonoProgenitorDos = $('#telefonoProgenitorDos');
            var correoProgenitorDos = $('#correoProgenitorDos');
            var domicilioProgenitorDos = $('#domicilioProgenitorDos');
            var estudiosProgenitorDos = $('#estudiosProgenitorDos');
            var profesionProgenitorDos = $('#profesionProgenitorDos');

            if (nombreProgenitorDos.val() == null || nombreProgenitorDos.val().length == 0 ||  /^\s+$/.test(nombreProgenitorDos.val())){
                //No validar
            }else {
                if(apellidosProgenitorDos.val() == null || apellidosProgenitorDos.val().length == 0 || /^\s+$/.test(apellidosProgenitorDos.val())){
                    apellidosProgenitorDos.addClass('error');
                    centinel = 1;
                }else {
                    apellidosProgenitorDos.removeClass('error');
                }

                if(nif(dniProgenitorDos.val())){
                    dniProgenitorDos.removeClass('error');
                }else {
                    dniProgenitorDos.addClass('error');
                    centinel = 1;
                }

                if (F_nacimientoProgenitorDos.val().match(/^[0-9]{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])/)){
                    F_nacimientoProgenitorDos.removeClass('error');
                } else {
                    F_nacimientoProgenitorDos.addClass('error');
                    centinel = 1;
                }

                if (telefonoProgenitorDos.val().match(/^([0-9]+){9}$/)){
                    telefonoProgenitorDos.removeClass('error');
                } else {
                    telefonoProgenitorDos.addClass('error');
                    centinel = 1;
                }

                if (domicilioProgenitorDos.val() == null || domicilioProgenitorDos.val().length == 0 ||  /^\s+$/.test(domicilioProgenitorDos.val())){
                    domicilioProgenitorDos.addClass('error');
                    centinel = 1;
                }else {
                    domicilioProgenitorDos.removeClass('error');
                }

                if (estudiosProgenitorDos.val() == null || estudiosProgenitorDos.val().length == 0 ||  /^\s+$/.test(estudiosProgenitorDos.val())){
                    estudiosProgenitorDos.addClass('error');
                    centinel = 1;
                }else {
                    estudiosProgenitorDos.removeClass('error');
                }

                if (profesionProgenitorDos.val() == null || profesionProgenitorDos.val().length == 0 ||  /^\s+$/.test(profesionProgenitorDos.val())){
                    profesionProgenitorDos.addClass('error');
                    centinel = 1;
                }else {
                    profesionProgenitorDos.removeClass('error');
                }

                if (correoProgenitorDos.val().match(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i)){
                    correoProgenitorDos.removeClass('error');
                }else{
                    correoProgenitorDos.addClass('error');
                    centinel = 1;
                }

            }


            if (centinel ==1){
                $('#error').html('Rellene correctamente los campos en rojo');
                return false;
            }

        }

        function nif(dni) {
            var numero
            var letr
            var letra
            var expresion_regular_dni

            expresion_regular_dni = /^\d{8}[a-zA-Z]$/;

            if(expresion_regular_dni.test (dni) == true){
                numero = dni.substr(0,dni.length-1);
                letr = dni.substr(dni.length-1,1);
                numero = numero % 23;
                letra='TRWAGMYFPDXBNJZSQVHLCKET';
                letra=letra.substring(numero,numero+1);
                if (letra!=letr.toUpperCase()) {
                    return false;
                }else{
                    return true;
                }
            }else{
                return false;
            }
        }
    </script>
@endpush