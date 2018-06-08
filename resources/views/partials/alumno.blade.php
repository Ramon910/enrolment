@extends('layouts.layout')

@section('content')
    <h1 align="center">DATOS DEL ALUMNO</h1>

{!! Form::open(['route' => ['store.alumno'], 'method' => 'POST','files' => true , 'onsubmit' => 'return validacion()']) !!}
    <div class="form-row">
        <div class="form-group col-md-3">
            <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre"  name="nombre" value="{{old('nombre')}}">
                {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-3">
            <div class="form-group {{ $errors->has('apellidos') ? 'has-error' : '' }}">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos"  name="apellidos" value="{{old('apellidos')}}">
                {!! $errors->first('apellidos', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-3">
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
        <div class="form-group col-md-3">
            <div class="form-group {{ $errors->has('Foto') ? 'has-error' : '' }}">
                <label for="Foto">Foto</label>
                <input type="file" class="form-control" name="Foto" id="Foto">
                {!! $errors->first('Foto', '<span class="help-block">:message</span>') !!}
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

<button type="submit" class="btn btn-success float-right" >Siguiente</button>
    <h5 style="text-align: center" id="error"></h5>
{{ Form::close() }}

@endsection

@push('scripts')
    <script>
        function validacion() {
            var centinel =0;

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
            var Foto = $('#Foto');


            if (Foto.val() == ""){
                Foto.addClass('error');
                centinel=1;
            }else{
                Foto.removeClass('error');
            }



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
