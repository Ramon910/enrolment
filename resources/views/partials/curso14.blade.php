
@extends('layouts.layout')

@section('content')
    {!! Form::open(['route' => ['store.Segundobachiller3'], 'method' => 'POST', 'onsubmit' => 'return validacion()']) !!}
    @include('partials.global')
    <br>
    <h1 align="center">Datos Curso</h1>
    <hr>
    <div class="form-row">
        <div class="col-md-6">
            <h1>Matrícula</h1>
            <h3>{{ $estudios->nombre }}</h3>
        </div>
        <div class="col-md-6">
            <h1>Asignaturas</h1>
            <p>{{ $estudios->descripcion }}</p>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12">
            <h3>Seleccione por orden de preferencia</h3>
        </div>
        <div class="form-group col-md-6" {{ $errors->has('opcion_primera') ? 'has-error' : '' }}>
            <label for="opcion_primera">Opción 1º</label>
            <select id="opcion_primera" name="opcion_primera" class="form-control">
                <option disabled selected>Seleccione</option>
                @foreach($estudios->options as $opcion)
                    @if($opcion->descripcion == 'De opción')
                        <option value="{{ $opcion->id }}" {{ old('opcion_primera') == $opcion->id ? 'selected' : '' }}>{{ $opcion->nombre }}</option>
                    @endif
                @endforeach
            </select>
            {!! $errors->first('opcion_primera', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-6" {{ $errors->has('opcion_segunda') ? 'has-error' : '' }}>
            <label for="opcion_segunda">Opción 2º</label>
            <select id="opcion_segunda" name="opcion_segunda" class="form-control">
                <option disabled selected>Seleccione</option>

            </select>
            {!! $errors->first('opcion_segunda', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12">
            <h3>Seleccione por orden de preferencia</h3>
        </div>
        <div class="form-group col-md-4" {{ $errors->has('primera') ? 'has-error' : '' }}>
            <label for="primera">Específica 1º</label>
            <select id="primera" name="primera" class="form-control">
                <option disabled selected>Seleccione</option>
                @foreach($estudios->options as $opcion)
                    @if($opcion->descripcion == 'Específica')
                        <option value="{{ $opcion->id }}" {{ old('primera') == $opcion->id ? 'selected' : '' }}>{{ $opcion->nombre }}</option>
                    @endif
                @endforeach
            </select>
            {!! $errors->first('primera', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('segunda') ? 'has-error' : '' }}>
            <label for="segunda">Específica 2º</label>
            <select id="segunda" name="segunda" class="form-control">
                <option disabled selected>Seleccione</option>

            </select>
            {!! $errors->first('segunda', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('tercera') ? 'has-error' : '' }}>
            <label for="tercera">Específica 3º</label>
            <select id="tercera" name="tercera" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('tercera', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12">
            <h3>Seleccione por orden de preferencia</h3>
        </div>
        <div class="form-group col-md-6" {{ $errors->has('primera1') ? 'has-error' : '' }}>
            <label for="primera1">Específica 1º</label>
            <select id="primera1" name="primera1" class="form-control">
                <option disabled selected>Seleccione</option>
                @foreach($estudios->options as $opcion)
                    @if($opcion->descripcion == 'Específica I')
                        <option value="{{ $opcion->id }}" {{ old('primera1') == $opcion->id ? 'selected' : '' }}>{{ $opcion->nombre }}</option>
                    @endif
                @endforeach
            </select>
            {!! $errors->first('primera1', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-6" {{ $errors->has('segunda1') ? 'has-error' : '' }}>
            <label for="segunda1">Específica 2º</label>
            <select id="segunda1" name="segunda1" class="form-control">
                <option disabled selected>Seleccione</option>

            </select>
            {!! $errors->first('segunda1', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6" {{ $errors->has('tercera1') ? 'has-error' : '' }}>
            <label for="tercera1">Específica 3º</label>
            <select id="tercera1" name="tercera1" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('tercera1', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-6" {{ $errors->has('cuarta1') ? 'has-error' : '' }}>
            <label for="cuarta1">Específica 4º</label>
            <select id="cuarta1" name="cuarta1" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('cuarta1', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <button type="submit" class="btn btn-success float-right" >Siguiente</button>
    <h5 style="text-align: center" id="error"></h5>
    {{ Form::close() }}
@endsection

@push('scripts')
    <script>

        $( document ).ready(function() {
            //DE OPCIÓN
            var opcion_primera = $('#opcion_primera option');
            $('#opcion_primera').change(function (){
                var opciones='';
                opcion_primera.each(function () {
                    if ($(this).val() != $('#opcion_primera').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("opcion_segunda") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#opcion_segunda').html(opciones);
            });

            //ESPECÍFICAS 1

            var primera = $('#primera option');
            $('#primera').change(function (){
                var opciones='';
                primera.each(function () {
                    if ($(this).val() != $('#primera').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("segunda") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#segunda').html(opciones);
                $('#tercera').html('<option disabled selected>Seleccione</option>');
            });

            $('#segunda').change(function (){
                var opciones='';
                primera.each(function () {
                    if ($(this).val() != 'Seleccione' && $(this).val() != $('#primera').val() && $(this).val() != $('#segunda').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("tercera") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#tercera').html(opciones);

            });


            //ESPECÍFICAS 2
            var primera1 = $('#primera1 option');
            $('#primera1').change(function (){
                var opciones='';
                primera1.each(function () {
                    if ($(this).val() != $('#primera1').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("segunda1") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#segunda1').html(opciones);
                $('#tercera1').html('<option disabled selected>Seleccione</option>');
                $('#cuarta1').html('<option disabled selected>Seleccione</option>');
            });

            $('#segunda1').change(function (){
                var opciones='';
                primera1.each(function () {
                    if ($(this).val() != $('#primera1').val() && $(this).val() != $('#segunda1').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("tercera1") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#tercera1').html(opciones);
                $('#cuarta1').html('<option disabled selected>Seleccione</option>');
            });

            $('#tercera1').change(function (){
                var opciones='';
                primera1.each(function () {
                    if ($(this).val() != 'Seleccione' && $(this).val() != $('#primera1').val() && $(this).val() != $('#segunda1').val() && $(this).val() != $('#tercera1').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("cuarta1") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#cuarta1').html(opciones);

            });

        });

        //VALIDACIÓN
        function validacion() {
            var centinel =0;
// validacion alumno
            var nombre = $('#nombre');
            var apellido = $('#apellidos');
            var sexo = $('#sexo');
            var dni =$('#dni');
            var fecha = $('#F_nacimiento');
            var telefono = $('#telefono');
            var localidad_nacimiento = $('#localidad_nacimiento');
            var provincia_nacimiento = $('#provincia_nacimiento');
            var pais_nacimiento = $('#pais_nacimiento');
            var domicilio = $('#domicilio');
            var municipio = $('#municipio');
            var provincia = $('#provincia');
            var codigo_postal = $('#codigo_postal');

            if (nombre.val() == null || nombre.val().length == 0 ||  /^\s+$/.test(nombre.val())){
                nombre.addClass('error');
                centinel = 1;
            }else {
                nombre.removeClass('error');
            }
            if(apellido.val() == null || apellido.val().length == 0 || /^\s+$/.test(apellido.val())){
                apellido.addClass('error');
                centinel = 1;
            }else {
                apellido.removeClass('error');
            }
            if(sexo.val() == null){
                sexo.addClass('error');
                centinel = 1;
            }else {
                sexo.removeClass('error');
            }

            if(nif(dni.val())){
                dni.removeClass('error');
            }else {
                dni.addClass('error');
                centinel = 1;
            }

            if (fecha.val().match(/^[0-9]{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])/)){
                fecha.removeClass('error');
            } else {
                fecha.addClass('error');
                centinel = 1;
            }

            if (telefono.val().match(/^([0-9]+){9}$/)){
                telefono.removeClass('error');
            } else {
                telefono.addClass('error');
                centinel = 1;
            }

            if (localidad_nacimiento.val() == null || localidad_nacimiento.val().length == 0 ||  /^\s+$/.test(localidad_nacimiento.val())){
                localidad_nacimiento.addClass('error');
                centinel = 1;
            }else {
                localidad_nacimiento.removeClass('error');
            }

            if (provincia_nacimiento.val() == null || provincia_nacimiento.val().length == 0 ||  /^\s+$/.test(provincia_nacimiento.val())){
                provincia_nacimiento.addClass('error');
                centinel = 1;
            }else {
                provincia_nacimiento.removeClass('error');
            }

            if (pais_nacimiento.val() == null || pais_nacimiento.val().length == 0 ||  /^\s+$/.test(pais_nacimiento.val())){
                pais_nacimiento.addClass('error');
                centinel = 1;
            }else {
                pais_nacimiento.removeClass('error');
            }

            if (domicilio.val() == null || domicilio.val().length == 0 ||  /^\s+$/.test(domicilio.val())){
                domicilio.addClass('error');
                centinel = 1;
            }else {
                domicilio.removeClass('error');
            }

            if (municipio.val() == null || municipio.val().length == 0 ||  /^\s+$/.test(municipio.val())){
                municipio.addClass('error');
                centinel = 1;
            }else {
                municipio.removeClass('error');
            }

            if (provincia.val() == null || provincia.val().length == 0 ||  /^\s+$/.test(provincia.val())){
                provincia.addClass('error');
                centinel = 1;
            }else {
                provincia.removeClass('error');
            }

            if (codigo_postal.val().match(/^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$/)) {
                codigo_postal.removeClass('error');
            }else{
                codigo_postal.addClass('error');
                centinel = 1;
            }


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

            //validación matricula
            var primercentro = $('#primercentro');
            var centro_anterior = $('#centro_anterior');
            var dictamen = $('#dictamen');
            var repite =$('#repite');
            var curso_anterior = $('#curso_anterior');
            var matricula = $('#matricula');

            if (centro_anterior.val() == null || centro_anterior.val().length == 0 ||  /^\s+$/.test(centro_anterior.val())){
                centro_anterior.addClass('error');
                centinel = 1;
            }else {
                centro_anterior.removeClass('error');
            }

            if(primercentro.val() == null){
                primercentro.addClass('error');
                centinel = 1;
            }else {
                primercentro.removeClass('error');
            }

            if(dictamen.val() == null){
                dictamen.addClass('error');
                centinel = 1;
            }else {
                dictamen.removeClass('error');
            }


            if(repite.val() == null){
                repite.addClass('error');
                centinel = 1;
            }else {
                repite.removeClass('error');
            }

            if(curso_anterior.val() == null){
                curso_anterior.addClass('error');
                centinel = 1;
            }else {
                curso_anterior.removeClass('error');
            }

            if(matricula.val() == null){
                matricula.addClass('error');
                centinel = 1;
            }else {
                matricula.removeClass('error');
            }

            //Validación curso
            //de opción
            var opcion_primera = $('#opcion_primera');
            var opcion_segunda =$('#opcion_segunda');

            if(opcion_primera.val() == null){
                opcion_primera.addClass('error');
                centinel = 1;
            }else {
                opcion_primera.removeClass('error');
            }

            if(opcion_segunda.val() == null){
                opcion_segunda.addClass('error');
                centinel = 1;
            }else {
                opcion_segunda.removeClass('error');
            }


            //específicas 1
            var primera = $('#primera');
            var segunda = $('#segunda');
            var tercera = $('#tercera');

            if(primera.val() == null){
                primera.addClass('error');
                centinel = 1;
            }else {
                primera.removeClass('error');
            }

            if(segunda.val() == null){
                segunda.addClass('error');
                centinel = 1;
            }else {
                segunda.removeClass('error');
            }

            if(tercera.val() == null){
                tercera.addClass('error');
                centinel = 1;
            }else {
                tercera.removeClass('error');
            }

            //específicas 2
            var primera1 = $('#primera1');
            var segunda1 = $('#segunda1');
            var tercera1 = $('#tercera1');
            var cuarta1 = $('#cuarta1');

            if(primera1.val() == null){
                primera1.addClass('error');
                centinel = 1;
            }else {
                primera1.removeClass('error');
            }

            if(segunda1.val() == null){
                segunda1.addClass('error');
                centinel = 1;
            }else {
                segunda1.removeClass('error');
            }

            if(tercera1.val() == null){
                tercera1.addClass('error');
                centinel = 1;
            }else {
                tercera1.removeClass('error');
            }

            if(cuarta1.val() == null){
                cuarta1.addClass('error');
                centinel = 1;
            }else {
                cuarta1.removeClass('error');
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