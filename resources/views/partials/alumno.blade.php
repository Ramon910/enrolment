@extends('layouts.layout')

@section('content')

<div id="cambiar">
    <h1 align="center">DATOS DEL ALUMNO</h1>
{!! Form::open(['route' => ['store.alumno'], 'method' => 'POST','files' => true , 'onsubmit' => 'return false']) !!}
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre"  name="nombre" value="{{old('nombre')}}">
                {!! $errors->first('nombre', '<span class=help-block>:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-5">
            <div class="form-group {{ $errors->has('apellidos') ? 'has-error' : '' }}">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos"  name="apellidos" value="{{old('apellidos')}}">
                {!! $errors->first('apellidos', '<span class=help-block>:message</span>') !!}
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
                {!! $errors->first('sexo', '<span class=help-block>:message</span>') !!}
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('dni') ? 'has-error' : '' }}">
                <label for="dni">DNI / NIE / Pasaporte</label>
                <input type="text" class="form-control" id="dni" name="dni" value="{{old('dni')}}">
                {!! $errors->first('dni', '<span class=help-block>:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('F_nacimiento') ? 'has-error' : '' }}">
                <label for="F_nacimiento">Fecha nacimiento</label>
                <input type="date" class="form-control" id="F_nacimiento" name="F_nacimiento" value="{{old('F_nacimiento')}}">
                {!! $errors->first('F_nacimiento', '<span class=help-block>:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('telefono') ? 'has-error' : '' }}">
                <label for="telefono">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}">
                {!! $errors->first('telefono', '<span class=help-block>:message</span>') !!}
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('localidad_nacimiento') ? 'has-error' : '' }}">
                <label for="localidad_nacimiento">Localidad nacimiento</label>
                <input type="text" class="form-control" id="localidad_nacimiento" name="localidad_nacimiento" value="{{old('localidad_nacimiento')}}">
                {!! $errors->first('localidad_nacimiento', '<span class=help-block>:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('provincia_nacimiento') ? 'has-error' : '' }}">
                <label for="provincia_nacimiento">Provincia nacimiento</label>
                <input type="text" class="form-control" id="provincia_nacimiento" name="provincia_nacimiento" value="{{old('provincia_nacimiento')}}">
                {!! $errors->first('provincia_nacimiento', '<span class=help-block>:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('pais_nacimiento') ? 'has-error' : '' }}">
                <label for="pais_nacimiento">Pais nacimiento</label>
                <input type="text" class="form-control" id="pais_nacimiento" name="pais_nacimiento" value="{{old('pais_nacimiento')}}">
                {!! $errors->first('pais_nacimiento', '<span class=help-block>:message</span>') !!}
            </div>
        </div>
    </div>


    <div class="form-row">
        <div class="form-group col-md-12">
            <div class="form-group {{ $errors->has('domicilio') ? 'has-error' : '' }}">
                <label for="domicilio">Domicilio: Calle, Plaza o Avda. y nº</label>
                <input type="text" class="form-control" id="domicilio" name="domicilio" value="{{old('domicilio')}}">
                {!! $errors->first('domicilio', '<span class=help-block>:message</span>') !!}
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('municipio') ? 'has-error' : '' }}">
                <label for="municipio">Municipio / Localidad</label>
                <input type="text" class="form-control" id="municipio" name="municipio" value="{{old('municipio')}}">
                {!! $errors->first('municipio', '<span class=help-block>:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('provincia') ? 'has-error' : '' }}">
                <label for="provincia">Provincia</label>
                <input type="text" class="form-control" id="provincia" name="provincia" value="{{old('provincia')}}">
                {!! $errors->first('provincia', '<span class=help-block>:message</span>') !!}
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group {{ $errors->has('codigo_postal') ? 'has-error' : '' }}">
                <label for="codigo_postal">Código Postal</label>
                <input type="number" class="form-control" id="codigo_postal" name="codigo_postal" value="{{old('codigo_postal')}}">
                {!! $errors->first('codigo_postal', '<span class=help-block>:message</span>') !!}
            </div>
        </div>
    </div>
<button type="submit" class="btn btn-success float-right" onclick="validacionAlumno()" >Siguiente</button>
    <h5 style="text-align: center" id="error"></h5>
{{ Form::close() }}
</div>
@endsection

@push('scripts')
    <script>

        function validacionAlumno() {
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
            }else{
                $.ajax({
                    url: '{{ route('store.alumno') }}',
                    type: 'POST',
                    dataType: 'json',
                    async: true,
                    data:{
                        '_token': '{{ csrf_token() }}',
                        nombre : $('#nombre').val(),
                        apellidos : $('#apellidos').val(),
                        sexo : $('#sexo').val(),
                        dni :$('#dni').val(),
                        F_nacimiento : $('#F_nacimiento').val(),
                        telefono : $('#telefono').val(),
                        localidad_nacimiento : $('#localidad_nacimiento').val(),
                        provincia_nacimiento : $('#provincia_nacimiento').val(),
                        pais_nacimiento : $('#pais_nacimiento').val(),
                        domicilio : $('#domicilio').val(),
                        municipio : $('#municipio').val(),
                        provincia : $('#provincia').val(),
                        codigo_postal : $('#codigo_postal').val(),

                    },
                    success: function success(data, status) {
                        $('#cambiar').html('{!! Form::open(["route" => ["store.padres"], "method" => "POST", "onsubmit" => "return false"]) !!}\n' +
                            '    <h3>Datos del progenitor 1 </h3>\n' +
                            '    <div class="form-row">\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("nombreProgenitorUno") ? "has-error" : "" }}>\n' +
                            '            <label for="nombreProgenitorUno">Nombre padre</label>\n' +
                            '            <input type="text" class="form-control" id="nombreProgenitorUno"  name="nombreProgenitorUno" value="{{old("nombreProgenitorUno")}}">\n' +
                            '            {!! $errors->first("nombreProgenitorUno", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("apellidosProgenitorUno") ? "has-error" : "" }}>\n' +
                            '            <label for="apellidosProgenitorUno">Apellidos padre</label>\n' +
                            '            <input type="text" class="form-control" id="apellidosProgenitorUno"  name="apellidosProgenitorUno" value="{{old("apellidosProgenitorUno")}}">\n' +
                            '            {!! $errors->first("apellidosProgenitorUno", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("dniProgenitorUno") ? "has-error" : "" }}>\n' +
                            '            <label for="dniProgenitorUno">DNI / NIE / Pasaporte padre</label>\n' +
                            '            <input type="text" class="form-control" id="dniProgenitorUno" name="dniProgenitorUno" value="{{old("dniProgenitorUno")}}">\n' +
                            '            {!! $errors->first("dniProgenitorUno", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '    </div>\n' +
                            '    <div class="form-row">\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("F_nacimientoProgenitorUno") ? "has-error" : "" }}>\n' +
                            '            <label for="F_nacimientoProgenitorUno">Fecha nacimiento padre</label>\n' +
                            '            <input type="date" class="form-control" id="F_nacimientoProgenitorUno" name="F_nacimientoProgenitorUno" value="{{old("F_nacimientoProgenitorUno")}}">\n' +
                            '            {!! $errors->first("F_nacimientoProgenitorUno", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("telefonoProgenitorUno") ? "has-error" : "" }}>\n' +
                            '            <label for="telefonoProgenitorUno">Telefono padre</label>\n' +
                            '            <input type="text" class="form-control" id="telefonoProgenitorUno" name="telefonoProgenitorUno" value="{{old("telefonoProgenitorUno")}}" >\n' +
                            '            {!! $errors->first("telefonoProgenitorUno", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("correoProgenitorUno") ? "has-error" : "" }}>\n' +
                            '            <label for="correoProgenitorUno">Correo electrónico padre</label>\n' +
                            '            <input type="email" class="form-control" id="correoProgenitorUno" name="correoProgenitorUno" value="{{old("correoProgenitorUno")}}" >\n' +
                            '            {!! $errors->first("correoProgenitorUno", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '    </div>\n' +
                            '    <div class="form-row">\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("domicilioProgenitorUno") ? "has-error" : "" }}>\n' +
                            '            <label for="domicilioProgenitorUno">Domicilio padre</label>\n' +
                            '            <input type="text" class="form-control" id="domicilioProgenitorUno" name="domicilioProgenitorUno" value="{{old("domicilioProgenitorUno")}}" >\n' +
                            '            {!! $errors->first("domicilioProgenitorUno", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("estudiosProgenitorUno") ? "has-error" : "" }}>\n' +
                            '            <label for="estudiosProgenitorUno">Estudios padre</label>\n' +
                            '            <input type="text" class="form-control" id="estudiosProgenitorUno" name="estudiosProgenitorUno" value="{{old("estudiosProgenitorUno")}}">\n' +
                            '            {!! $errors->first("estudiosProgenitorUno", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4"{{ $errors->has("profesionProgenitorUno") ? "has-error" : "" }} >\n' +
                            '            <label for="profesionProgenitorUno">Profesión Padre</label>\n' +
                            '            <input type="text" class="form-control" id="profesionProgenitorUno" name="profesionProgenitorUno" value="{{old("profesionProgenitorUno")}}">\n' +
                            '            {!! $errors->first("profesionProgenitorUno", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '    </div>\n' +
                            '\n' +
                            '    <h3>Datos Progenitor 2</h3>\n' +
                            '    <div class="form-row">\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("nombreProgenitorDos") ? "has-error" : "" }}>\n' +
                            '            <label for="nombreProgenitorDos">Nombre Madre</label>\n' +
                            '            <input type="text" class="form-control" id="nombreProgenitorDos"  name="nombreProgenitorDos" value="{{old("nombreProgenitorDos")}}">\n' +
                            '            {!! $errors->first("nombreProgenitorDos", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("apellidosProgenitorDos") ? "has-error" : "" }}>\n' +
                            '            <label for="apellidosProgenitorDos">Apellidos Madre</label>\n' +
                            '            <input type="text" class="form-control" id="apellidosProgenitorDos"  name="apellidosProgenitorDos" value="{{old("apellidosProgenitorDos")}}">\n' +
                            '            {!! $errors->first("apellidosProgenitorDos", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("dniProgenitorDos") ? "has-error" : "" }}>\n' +
                            '            <label for="dniProgenitorDos">DNI / NIE / Pasaporte Madre</label>\n' +
                            '            <input type="text" class="form-control" id="dniProgenitorDos" name="dniProgenitorDos" value="{{old("dniProgenitorDos")}}">\n' +
                            '            {!! $errors->first("dniProgenitorDos", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '    </div>\n' +
                            '    <div class="form-row">\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("F_nacimientoProgenitorDos") ? "has-error" : "" }}>\n' +
                            '            <label for="F_nacimientoProgenitorDos">Fecha nacimiento Madre</label>\n' +
                            '            <input type="date" class="form-control" id="F_nacimientoProgenitorDos" name="F_nacimientoProgenitorDos" value="{{old("F_nacimientoProgenitorDos")}}">\n' +
                            '            {!! $errors->first("F_nacimientoProgenitorDos", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("telefonoProgenitorDos") ? "has-error" : "" }}>\n' +
                            '            <label for="telefonoProgenitorDos">Telefono Madre</label>\n' +
                            '            <input type="text" class="form-control" id="telefonoProgenitorDos" name="telefonoProgenitorDos" value="{{old("telefonoProgenitorDos")}}">\n' +
                            '            {!! $errors->first("telefonoProgenitorDos", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("correoProgenitorDos") ? "has-error" : "" }}>\n' +
                            '            <label for="correoProgenitorDos">Correo electrónico Madre</label>\n' +
                            '            <input type="email" class="form-control" id="correoProgenitorDos" name="correoProgenitorDos" value="{{old("correoProgenitorDos")}}">\n' +
                            '            {!! $errors->first("correoProgenitorDos", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '    </div>\n' +
                            '    <div class="form-row">\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("domicilioProgenitorDos") ? "has-error" : "" }}>\n' +
                            '            <label for="domicilioProgenitorDos">Domicilio Madre</label>\n' +
                            '            <input type="text" class="form-control" id="domicilioProgenitorDos" name="domicilioProgenitorDos" value="{{old("domicilioProgenitorDos")}}">\n' +
                            '            {!! $errors->first("domicilioProgenitorDos", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4"{{ $errors->has("estudiosProgenitorDos") ? "has-error" : "" }}>\n' +
                            '            <label for="estudiosProgenitorDos">Estudios Madre</label>\n' +
                            '            <input type="text" class="form-control" id="estudiosProgenitorDos" name="estudiosProgenitorDos" value="{{old("estudiosProgenitorDos")}}">\n' +
                            '            {!! $errors->first("estudiosProgenitorDos", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("profesionProgenitorDos") ? "has-error" : "" }}>\n' +
                            '            <label for="profesionProgenitorDos">Profesión Madre</label>\n' +
                            '            <input type="text" class="form-control" id="profesionProgenitorDos" name="profesionProgenitorDos" value="{{old("profesionProgenitorDos")}}">\n' +
                            '            {!! $errors->first("profesionProgenitorDos", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '    </div>\n' +
                            '\n' +
                            '    <button type="submit" class="btn btn-success float-right" onclick="validacionPadres()" >Siguiente</button>\n' +
                            '    <h5 style="text-align: center" id="error"></h5>\n' +
                            '    {{ Form::close() }}');
                    },
                    error: function error(xhr, textStatus, errorThrown) {
                        alert('Ha ocurrido un error, intentelo más tarde. Gracias.');
                    }
                });
            }

        }

        function validacionPadres() {
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
            }else{
                $.ajax({
                    url: '{{ route('store.padres') }}',
                    type: 'POST',
                    dataType: 'json',
                    async: true,
                    data:{
                        '_token': '{{ csrf_token() }}',
                        nombreProgenitorUno : $('#nombreProgenitorUno').val(),
                        apellidosProgenitorUno : $('#apellidosProgenitorUno').val(),
                        dniProgenitorUno :$('#dniProgenitorUno').val(),
                        F_nacimientoProgenitorUno : $('#F_nacimientoProgenitorUno').val(),
                        telefonoProgenitorUno : $('#telefonoProgenitorUno').val(),
                        correoProgenitorUno : $('#correoProgenitorUno').val(),
                        domicilioProgenitorUno : $('#domicilioProgenitorUno').val(),
                        estudiosProgenitorUno : $('#estudiosProgenitorUno').val(),
                        profesionProgenitorUno : $('#profesionProgenitorUno').val(),

                        nombreProgenitorDos : $('#nombreProgenitorDos').val(),
                        apellidosProgenitorDos : $('#apellidosProgenitorDos').val(),
                        dniProgenitorDos :$('#dniProgenitorDos').val(),
                        F_nacimientoProgenitorDos : $('#F_nacimientoProgenitorDos').val(),
                        telefonoProgenitorDos : $('#telefonoProgenitorDos').val(),
                        correoProgenitorDos : $('#correoProgenitorDos').val(),
                        domicilioProgenitorDos : $('#domicilioProgenitorDos').val(),
                        estudiosProgenitorDos : $('#estudiosProgenitorDos').val(),
                        profesionProgenitorDos : $('#profesionProgenitorDos').val(),

                    },
                    success: function success(data, status) {
                        $('#cambiar').html('{!! Form::open(["route" => ["store.matricula"], "method" => "POST", "onsubmit" => "return validacionMatricula()"]) !!}\n' +
                            '    <h3>Matrícula</h3>\n' +
                            '    <div class="form-row">\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("primercentro") ? "has-error" : "" }}>\n' +
                            '            <label for="primercentro">¿Se matricula por primera vez en el centro?</label>\n' +
                            '            <select id="primercentro" name="primercentro" class="form-control">\n' +
                            '                <option disabled selected>Seleccione</option>\n' +
                            '                <option value="1" {{ old("primercentro") == "1" ? "selected" : "" }}>SI</option>\n' +
                            '                <option value="0" {{ old("primercentro") == "0" ? "selected" : "" }}>NO</option>\n' +
                            '            </select>\n' +
                            '            {!! $errors->first("primercentro", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("centro_anterior") ? "has-error" : "" }}>\n' +
                            '            <label for="centro_anterior">Centro en el que estudió el curso anterior</label>\n' +
                            '            <input type="text" class="form-control" id="centro_anterior"  name="centro_anterior" value="{{old("centro_anterior")}}">\n' +
                            '            {!! $errors->first("centro_anterior", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("dictamen") ? "has-error" : "" }}>\n' +
                            '            <label for="dictamen">¿Es alumno/a con DICTAMEN DE ESOLARIZACIÓN?</label>\n' +
                            '            <select id="dictamen" name="dictamen" class="form-control">\n' +
                            '                <option disabled selected>Seleccione</option>\n' +
                            '                <option value="1" {{ old("dictamen") == "1" ? "selected" : "" }}>SI</option>\n' +
                            '                <option value="0" {{ old("dictamen") == "0" ? "selected" : "" }}>NO</option>\n' +
                            '            </select>\n' +
                            '            {!! $errors->first("dictamen", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '    </div>\n' +
                            '    <div class="form-row">\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("repite") ? "has-error" : "" }}>\n' +
                            '            <label for="repite">¿Repite el mismo curso?</label>\n' +
                            '            <select id="repite" name="repite" class="form-control">\n' +
                            '                <option disabled selected>Seleccione</option>\n' +
                            '                <option value="1" {{ old("repite") == "1" ? "selected" : "" }}>SI</option>\n' +
                            '                <option value="0" {{ old("repite") == "0" ? "selected" : "" }}>NO</option>\n' +
                            '            </select>\n' +
                            '            {!! $errors->first("repite", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("pendientes") ? "has-error" : "" }}>\n' +
                            '            <label for="pendientes">Materias pendientes</label>\n' +
                            '            <input type="text" class="form-control" id="pendientes" name="pendientes" value="{{old("pendientes")}}">\n' +
                            '            {!! $errors->first("pendientes", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("curso_anterior") ? "has-error" : "" }}>\n' +
                            '            <label for="curso_anterior">Estudios realizados en el curso anterior :</label>\n' +
                            '            <select id="curso_anterior" name="curso_anterior" class="form-control">\n' +
                            '                <option disabled selected>Seleccione</option>\n' +
                            '                <option value="6 primaria"{{ old("curso_anterior") == "6_primaria" ? "selected" : "" }}>6º Primaria</option>\n' +
                            '                <option value="1º eso" {{ old("curso_anterior") == "1_eso" ? "selected" : "" }}>1º ESO</option>\n' +
                            '                <option value="2º eso" {{ old("curso_anterior") == "2_eso" ? "selected" : "" }}>2º ESO</option>\n' +
                            '                <option value="3º eso" {{ old("curso_anterior") == "3_eso" ? "selected" : "" }}>3º ESO</option>\n' +
                            '                <option value="4º eso" {{ old("curso_anterior") == "4_eso" ? "selected" : "" }}>4º ESO</option>\n' +
                            '                <option value="2º pmar" {{ old("curso_anterior") == "2_pmar" ? "selected" : "" }}>2º PEMAR</option>\n' +
                            '                <option value="eso" {{ old("curso_anterior") == "eso" ? "selected" : "" }}>ESO</option>\n' +
                            '                <option value="1º bachillerato" {{ old("curso_anterior") == "1_bachillerato" ? "selected" : "" }}>1º Bachillerato</option>\n' +
                            '                <option value="2º bachillerato" {{ old("curso_anterior") == "2_bachillerato" ? "selected" : "" }}>2º Bachillerato</option>\n' +
                            '                <option value="repite 1º bachillerato" {{ old("curso_anterior") == "repite_1_bachillerato" ? "selected" : "" }}> Repite 1º Bachillerato</option>\n' +
                            '                <option value="repite 2º bachillerato" {{ old("curso_anterior") == "repite_2_bachillerato" ? "selected" : "" }}> Repite 2º Bachillerato</option>\n' +
                            '                <option value="ciclo formativo" {{ old("curso_anterior") == "ciclo_formativo" ? "selected" : "" }}>Ciclo Formativo</option>\n' +
                            '            </select>\n' +
                            '            {!! $errors->first("curso_anterior", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '    </div>\n' +
                            '    <div class="form-row">\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("ampa") ? "has-error" : "" }}>\n' +
                            '            <label for="ampa">¿Paga AMPA?</label>\n' +
                            '            <select id="ampa" name="ampa" class="form-control">\n' +
                            '                <option disabled selected>Seleccione</option>\n' +
                            '                <option value="1" {{ old("ampa") == "1" ? "selected" : "" }}>SI</option>\n' +
                            '                <option value="0" {{ old("ampa") == "0" ? "selected" : "" }}>NO</option>\n' +
                            '            </select>\n' +
                            '            {!! $errors->first("ampa", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("transporte") ? "has-error" : "" }}>\n' +
                            '            <label for="transporte">¿ Va a utilizar transporte escolar ?</label>\n' +
                            '            <select id="transporte" name="transporte" class="form-control">\n' +
                            '                <option disabled selected>Seleccione</option>\n' +
                            '                <option value="no" {{ old("transporte") == "no" ? "selected" : "" }}>NO</option>\n' +
                            '                <option value="aljucer_jardin" {{ old("transporte") == "aljucer_jardin" ? "selected" : "" }}>Aljucer jardin</option>\n' +
                            '                <option value="aljucer_opel" {{ old("transporte") == "aljucer_opel" ? "selected" : "" }}>Aljucer opel</option>\n' +
                            '                <option value="aljucer_mueblesCaballero" {{ old("transporte") == "aljucer_mueblesCaballero" ? "selected" : "" }}>Aljucer muebles Caballero</option>\n' +
                            '                <option value="sanpio" {{ old("transporte") == "sanpio" ? "selected" : "" }}>San Pio</option>\n' +
                            '            </select>\n' +
                            '            {!! $errors->first("transporte", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-4" {{ $errors->has("matricula") ? "has-error" : "" }}>\n' +
                            '            <label for="matricula">¿Curso del que se matricula ?</label>\n' +
                            '            <select id="matricula" name="matricula" class="form-control">\n' +
                            '                <option disabled selected>Seleccione</option>\n' +
                            '                @foreach($estudios as $estudio)\n' +
                            '                    <option value="{{ $estudio->id }}" {{ old("matricula") == $estudio->id ? "selected" : "" }}>{{ $estudio->nombre }}</option>\n' +
                            '                @endforeach\n' +
                            '            </select>\n' +
                            '            {!! $errors->first("matricula", "<span class=help-block>:message</span>") !!}\n' +
                            '        </div>\n' +
                            '    </div>\n' +
                            '    <button type="submit" class="btn btn-success float-right"  >Siguiente</button>\n' +
                            '    <h5 style="text-align: center" id="error"></h5>\n' +
                            '    {{ Form::close() }}');
                    },
                    error: function error(xhr, textStatus, errorThrown) {
                        alert('Ha ocurrido un error, intentelo más tarde. Gracias.');
                    }
                });
            }

        }

        function validacionMatricula() {
            var centinel =0;

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
