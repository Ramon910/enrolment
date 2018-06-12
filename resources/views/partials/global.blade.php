<h1 align="center">DATOS DEL ALUMNO</h1>
<hr>
<div class="form-row">
    <div class="form-group col-md-4">
        <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre"  name="nombre" value="{{old('nombre') ? old('nombre'): $_SESSION['nombre']}}">
            {!! $errors->first('nombre', '<span class=help-block>:message</span>') !!}
        </div>
    </div>
    <div class="form-group col-md-5">
        <div class="form-group {{ $errors->has('apellidos') ? 'has-error' : '' }}">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos"  name="apellidos" value="{{old('apellidos')? old('apellidos'): $_SESSION['apellidos']}}">
            {!! $errors->first('apellidos', '<span class=help-block>:message</span>') !!}
        </div>
    </div>
    <div class="form-group col-md-3">
        <div class="form-group {{ $errors->has('sexo') ? 'has-error' : '' }}">
            <label for="sexo">Sexo</label>
            <select id="sexo" name="sexo" class="form-control">
                <option disabled selected>Seleccione</option>
                <option value="varon" {{ old('sexo') == 'varon' || $_SESSION['sexo'] == 'varon' ? 'selected' : '' }}>Varón</option>
                <option value="mujer" {{ old('sexo') == 'mujer' || $_SESSION['sexo'] == 'mujer' ? 'selected' : '' }}>Mujer</option>
            </select>
            {!! $errors->first('sexo', '<span class=help-block>:message</span>') !!}
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <div class="form-group {{ $errors->has('dni') ? 'has-error' : '' }}">
            <label for="dni">DNI / NIE / Pasaporte</label>
            <input type="text" class="form-control" id="dni" name="dni" value="{{old('dni')? old('dni'): $_SESSION['dni']}}">
            {!! $errors->first('dni', '<span class=help-block>:message</span>') !!}
        </div>
    </div>
    <div class="form-group col-md-4">
        <div class="form-group {{ $errors->has('F_nacimiento') ? 'has-error' : '' }}">
            <label for="F_nacimiento">Fecha nacimiento</label>
            <input type="date" class="form-control" id="F_nacimiento" name="F_nacimiento" value="{{old('F_nacimiento')? old('F_nacimiento'): $_SESSION['F_nacimiento']}}">
            {!! $errors->first('F_nacimiento', '<span class=help-block>:message</span>') !!}
        </div>
    </div>
    <div class="form-group col-md-4">
        <div class="form-group {{ $errors->has('telefono') ? 'has-error' : '' }}">
            <label for="telefono">Telefono</label>
            <input type="number" class="form-control" id="telefono" name="telefono" value="{{old('telefono')? old('telefono'): $_SESSION['telefono']}}">
            {!! $errors->first('telefono', '<span class=help-block>:message</span>') !!}
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <div class="form-group {{ $errors->has('localidad_nacimiento') ? 'has-error' : '' }}">
            <label for="localidad_nacimiento">Localidad nacimiento</label>
            <input type="text" class="form-control" id="localidad_nacimiento" name="localidad_nacimiento" value="{{old('localidad_nacimiento')? old('localidad_nacimiento'): $_SESSION['localidad_nacimiento']}}">
            {!! $errors->first('localidad_nacimiento', '<span class=help-block>:message</span>') !!}
        </div>
    </div>
    <div class="form-group col-md-4">
        <div class="form-group {{ $errors->has('provincia_nacimiento') ? 'has-error' : '' }}">
            <label for="provincia_nacimiento">Provincia nacimiento</label>
            <input type="text" class="form-control" id="provincia_nacimiento" name="provincia_nacimiento" value="{{old('provincia_nacimiento')? old('provincia_nacimiento'): $_SESSION['provincia_nacimiento']}}">
            {!! $errors->first('provincia_nacimiento', '<span class=help-block>:message</span>') !!}
        </div>
    </div>
    <div class="form-group col-md-4">
        <div class="form-group {{ $errors->has('pais_nacimiento') ? 'has-error' : '' }}">
            <label for="pais_nacimiento">Pais nacimiento</label>
            <input type="text" class="form-control" id="pais_nacimiento" name="pais_nacimiento" value="{{old('pais_nacimiento')? old('pais_nacimiento'): $_SESSION['pais_nacimiento']}}">
            {!! $errors->first('pais_nacimiento', '<span class=help-block>:message</span>') !!}
        </div>
    </div>
</div>


<div class="form-row">
    <div class="form-group col-md-12">
        <div class="form-group {{ $errors->has('domicilio') ? 'has-error' : '' }}">
            <label for="domicilio">Domicilio: Calle, Plaza o Avda. y nº</label>
            <input type="text" class="form-control" id="domicilio" name="domicilio" value="{{old('domicilio')? old('domicilio'): $_SESSION['domicilio']}}">
            {!! $errors->first('domicilio', '<span class=help-block>:message</span>') !!}
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <div class="form-group {{ $errors->has('municipio') ? 'has-error' : '' }}">
            <label for="municipio">Municipio / Localidad</label>
            <input type="text" class="form-control" id="municipio" name="municipio" value="{{old('municipio')? old('municipio'): $_SESSION['municipio']}}">
            {!! $errors->first('municipio', '<span class=help-block>:message</span>') !!}
        </div>
    </div>
    <div class="form-group col-md-4">
        <div class="form-group {{ $errors->has('provincia') ? 'has-error' : '' }}">
            <label for="provincia">Provincia</label>
            <input type="text" class="form-control" id="provincia" name="provincia" value="{{old('provincia')? old('provincia'): $_SESSION['provincia']}}">
            {!! $errors->first('provincia', '<span class=help-block>:message</span>') !!}
        </div>
    </div>
    <div class="form-group col-md-4">
        <div class="form-group {{ $errors->has('codigo_postal') ? 'has-error' : '' }}">
            <label for="codigo_postal">Código Postal</label>
            <input type="number" class="form-control" id="codigo_postal" name="codigo_postal" value="{{old('codigo_postal')? old('codigo_postal'): $_SESSION['codigo_postal']}}">
            {!! $errors->first('codigo_postal', '<span class=help-block>:message</span>') !!}
        </div>
    </div>
</div>
<br>
<h1 align="center">Datos del progenitor 1 </h1>
<hr>
<div class="form-row">
    <div class="form-group col-md-4" {{ $errors->has('nombreProgenitorUno') ? 'has-error' : '' }}>
        <label for="nombreProgenitorUno">Nombre padre</label>
        <input type="text" class="form-control" id="nombreProgenitorUno"  name="nombreProgenitorUno" value="{{old('nombreProgenitorUno')? old('nombreProgenitorUno'): $_SESSION['nombreProgenitorUno']}}">
        {!! $errors->first('nombreProgenitorUno', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4" {{ $errors->has('apellidosProgenitorUno') ? 'has-error' : '' }}>
        <label for="apellidosProgenitorUno">Apellidos padre</label>
        <input type="text" class="form-control" id="apellidosProgenitorUno"  name="apellidosProgenitorUno" value="{{old('apellidosProgenitorUno')? old('apellidosProgenitorUno'): $_SESSION['apellidosProgenitorUno']}}">
        {!! $errors->first('apellidosProgenitorUno', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4" {{ $errors->has('dniProgenitorUno') ? 'has-error' : '' }}>
        <label for="dniProgenitorUno">DNI / NIE / Pasaporte padre</label>
        <input type="text" class="form-control" id="dniProgenitorUno" name="dniProgenitorUno" value="{{old('dniProgenitorUno')? old('dniProgenitorUno'): $_SESSION['dniProgenitorUno']}}">
        {!! $errors->first('dniProgenitorUno', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4" {{ $errors->has('F_nacimientoProgenitorUno') ? 'has-error' : '' }}>
        <label for="F_nacimientoProgenitorUno">Fecha nacimiento padre</label>
        <input type="date" class="form-control" id="F_nacimientoProgenitorUno" name="F_nacimientoProgenitorUno" value="{{old('F_nacimientoProgenitorUno')? old('F_nacimientoProgenitorUno'): $_SESSION['F_nacimientoProgenitorUno']}}">
        {!! $errors->first('F_nacimientoProgenitorUno', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4" {{ $errors->has('telefonoProgenitorUno') ? 'has-error' : '' }}>
        <label for="telefonoProgenitorUno">Telefono padre</label>
        <input type="text" class="form-control" id="telefonoProgenitorUno" name="telefonoProgenitorUno" value="{{old('telefonoProgenitorUno')? old('telefonoProgenitorUno'): $_SESSION['telefonoProgenitorUno']}}" >
        {!! $errors->first('telefonoProgenitorUno', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4" {{ $errors->has('correoProgenitorUno') ? 'has-error' : '' }}>
        <label for="correoProgenitorUno">Correo electrónico padre</label>
        <input type="email" class="form-control" id="correoProgenitorUno" name="correoProgenitorUno" value="{{old('correoProgenitorUno')? old('correoProgenitorUno'): $_SESSION['correoProgenitorUno']}}" >
        {!! $errors->first('correoProgenitorUno', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4" {{ $errors->has('domicilioProgenitorUno') ? 'has-error' : '' }}>
        <label for="domicilioProgenitorUno">Domicilio padre</label>
        <input type="text" class="form-control" id="domicilioProgenitorUno" name="domicilioProgenitorUno" value="{{old('domicilioProgenitorUno')? old('domicilioProgenitorUno'): $_SESSION['domicilioProgenitorUno']}}" >
        {!! $errors->first('domicilioProgenitorUno', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4" {{ $errors->has('estudiosProgenitorUno') ? 'has-error' : '' }}>
        <label for="estudiosProgenitorUno">Estudios padre</label>
        <input type="text" class="form-control" id="estudiosProgenitorUno" name="estudiosProgenitorUno" value="{{old('estudiosProgenitorUno')? old('estudiosProgenitorUno'): $_SESSION['estudiosProgenitorUno']}}">
        {!! $errors->first('estudiosProgenitorUno', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4"{{ $errors->has('profesionProgenitorUno') ? 'has-error' : '' }} >
        <label for="profesionProgenitorUno">Profesión Padre</label>
        <input type="text" class="form-control" id="profesionProgenitorUno" name="profesionProgenitorUno" value="{{old('profesionProgenitorUno')? old('profesionProgenitorUno'): $_SESSION['profesionProgenitorUno']}}">
        {!! $errors->first('profesionProgenitorUno', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<br>
<h1 align="center">Datos Progenitor 2</h1>
<hr>
<div class="form-row">
    <div class="form-group col-md-4" {{ $errors->has('nombreProgenitorDos') ? 'has-error' : '' }}>
        <label for="nombreProgenitorDos">Nombre Madre</label>
        <input type="text" class="form-control" id="nombreProgenitorDos"  name="nombreProgenitorDos" value="{{old('nombreProgenitorDos')? old('nombreProgenitorDos'): $_SESSION['nombreProgenitorDos']}}">
        {!! $errors->first('nombreProgenitorDos', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4" {{ $errors->has('apellidosProgenitorDos') ? 'has-error' : '' }}>
        <label for="apellidosProgenitorDos">Apellidos Madre</label>
        <input type="text" class="form-control" id="apellidosProgenitorDos"  name="apellidosProgenitorDos" value="{{old('apellidosProgenitorDos')? old('apellidosProgenitorDos'): $_SESSION['apellidosProgenitorDos']}}">
        {!! $errors->first('apellidosProgenitorDos', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4" {{ $errors->has('dniProgenitorDos') ? 'has-error' : '' }}>
        <label for="dniProgenitorDos">DNI / NIE / Pasaporte Madre</label>
        <input type="text" class="form-control" id="dniProgenitorDos" name="dniProgenitorDos" value="{{old('dniProgenitorDos')? old('dniProgenitorDos'): $_SESSION['dniProgenitorDos']}}">
        {!! $errors->first('dniProgenitorDos', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4" {{ $errors->has('F_nacimientoProgenitorDos') ? 'has-error' : '' }}>
        <label for="F_nacimientoProgenitorDos">Fecha nacimiento Madre</label>
        <input type="date" class="form-control" id="F_nacimientoProgenitorDos" name="F_nacimientoProgenitorDos" value="{{old('F_nacimientoProgenitorDos')? old('F_nacimientoProgenitorDos'): $_SESSION['F_nacimientoProgenitorDos']}}">
        {!! $errors->first('F_nacimientoProgenitorDos', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4" {{ $errors->has('telefonoProgenitorDos') ? 'has-error' : '' }}>
        <label for="telefonoProgenitorDos">Telefono Madre</label>
        <input type="text" class="form-control" id="telefonoProgenitorDos" name="telefonoProgenitorDos" value="{{old('telefonoProgenitorDos')? old('telefonoProgenitorDos'): $_SESSION['telefonoProgenitorDos']}}">
        {!! $errors->first('telefonoProgenitorDos', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4" {{ $errors->has('correoProgenitorDos') ? 'has-error' : '' }}>
        <label for="correoProgenitorDos">Correo electrónico Madre</label>
        <input type="email" class="form-control" id="correoProgenitorDos" name="correoProgenitorDos" value="{{old('correoProgenitorDos')? old('correoProgenitorDos'): $_SESSION['correoProgenitorDos']}}">
        {!! $errors->first('correoProgenitorDos', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4" {{ $errors->has('domicilioProgenitorDos') ? 'has-error' : '' }}>
        <label for="domicilioProgenitorDos">Domicilio Madre</label>
        <input type="text" class="form-control" id="domicilioProgenitorDos" name="domicilioProgenitorDos" value="{{old('domicilioProgenitorDos')? old('domicilioProgenitorDos'): $_SESSION['domicilioProgenitorDos']}}">
        {!! $errors->first('domicilioProgenitorDos', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4"{{ $errors->has('estudiosProgenitorDos') ? 'has-error' : '' }}>
        <label for="estudiosProgenitorDos">Estudios Madre</label>
        <input type="text" class="form-control" id="estudiosProgenitorDos" name="estudiosProgenitorDos" value="{{old('estudiosProgenitorDos')? old('estudiosProgenitorDos'): $_SESSION['estudiosProgenitorDos']}}">
        {!! $errors->first('estudiosProgenitorDos', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4" {{ $errors->has('profesionProgenitorDos') ? 'has-error' : '' }}>
        <label for="profesionProgenitorDos">Profesión Madre</label>
        <input type="text" class="form-control" id="profesionProgenitorDos" name="profesionProgenitorDos" value="{{old('profesionProgenitorDos')? old('profesionProgenitorDos'): $_SESSION['profesionProgenitorDos']}}">
        {!! $errors->first('profesionProgenitorDos', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<br>
<h1 align="center">Matricula</h1>
<hr>
<div class="form-row">
    <div class="form-group col-md-4" {{ $errors->has('primercentro') ? 'has-error' : '' }}>
        <label for="primercentro">¿Se matricula por primera vez en el centro?</label>
        <select id="primercentro" name="primercentro" class="form-control">
            <option disabled selected>Seleccione</option>
            <option value="1" {{ old('primercentro') == '1' || $_SESSION['primercentro'] == '1'? 'selected' : '' }}>SI</option>
            <option value="0" {{ old('primercentro') == '0' || $_SESSION['primercentro'] == '0'? 'selected' : '' }}>NO</option>
        </select>
        {!! $errors->first('primercentro', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4" {{ $errors->has('centro_anterior') ? 'has-error' : '' }}>
        <label for="centro_anterior">Centro en el que estudió el curso anterior</label>
        <input type="text" class="form-control" id="centro_anterior"  name="centro_anterior" value="{{old('centro_anterior')? old('centro_anterior'): $_SESSION['centro_anterior']}}">
        {!! $errors->first('centro_anterior', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4" {{ $errors->has('dictamen') ? 'has-error' : '' }}>
        <label for="dictamen">¿Es alumno/a con DICTAMEN DE ESOLARIZACIÓN?</label>
        <select id="dictamen" name="dictamen" class="form-control">
            <option disabled selected>Seleccione</option>
            <option value="1" {{ old('dictamen') == '1' || $_SESSION['dictamen'] == '1'? 'selected' : '' }}>SI</option>
            <option value="0" {{ old('dictamen') == '0' || $_SESSION['dictamen'] == '0'? 'selected' : '' }}>NO</option>
        </select>
        {!! $errors->first('dictamen', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4" {{ $errors->has('repite') ? 'has-error' : '' }}>
        <label for="repite">¿Repite el mismo curso?</label>
        <select id="repite" name="repite" class="form-control">
            <option disabled selected>Seleccione</option>
            <option value="1" {{ old('repite') == '1' || $_SESSION['repite'] == '1'? 'selected' : '' }}>SI</option>
            <option value="0" {{ old('repite') == '0' || $_SESSION['repite'] == '0'? 'selected' : '' }}>NO</option>
        </select>
        {!! $errors->first('repite', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4" {{ $errors->has('pendientes') ? 'has-error' : '' }}>
        <label for="pendientes">Materias pendientes</label>
        <input type="text" class="form-control" id="pendientes" name="pendientes" value="{{old('pendientes')? old('pendientes'): $_SESSION['pendientes']}}">
        {!! $errors->first('pendientes', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-4" {{ $errors->has('curso_anterior') ? 'has-error' : '' }}>
        <label for="curso_anterior">Estudios realizados en el curso anterior :</label>
        <select id="curso_anterior" name="curso_anterior" class="form-control">
            <option disabled selected>Seleccione</option>
            <option value="6 primaria"{{ old('curso_anterior') == '6_primaria' || $_SESSION['curso_anterior'] == '6 primaria'? 'selected' : '' }}>6º Primaria</option>
            <option value="1º eso" {{ old('curso_anterior') == '1_eso' || $_SESSION['curso_anterior'] == '1º eso'? 'selected' : '' }}>1º ESO</option>
            <option value="2º eso" {{ old('curso_anterior') == '2_eso' || $_SESSION['curso_anterior'] == '2º eso'? 'selected' : '' }}>2º ESO</option>
            <option value="3º eso" {{ old('curso_anterior') == '3_eso' || $_SESSION['curso_anterior'] == '3º eso'? 'selected' : '' }}>3º ESO</option>
            <option value="4º eso" {{ old('curso_anterior') == '4_eso' || $_SESSION['curso_anterior'] == '4º eso'? 'selected' : '' }}>4º ESO</option>
            <option value="2º pmar" {{ old('curso_anterior') == '2_pmar' || $_SESSION['curso_anterior'] == '2º pmar'? 'selected' : '' }}>2º PEMAR</option>
            <option value="eso" {{ old('curso_anterior') == 'eso' || $_SESSION['curso_anterior'] == 'eso'? 'selected' : '' }}>ESO</option>
            <option value="1º bachillerato" {{ old('curso_anterior') == '1_bachillerato' || $_SESSION['curso_anterior'] == '1º bachillerato'? 'selected' : '' }}>1º Bachillerato</option>
            <option value="2º bachillerato" {{ old('curso_anterior') == '2_bachillerato' || $_SESSION['curso_anterior'] == '2º bachillerato'? 'selected' : '' }}>2º Bachillerato</option>
            <option value="repite 1º bachillerato" {{ old('curso_anterior') == 'repite_1_bachillerato' || $_SESSION['curso_anterior'] == 'repite 1º bachillerato'? 'selected' : '' }}> Repite 1º Bachillerato</option>
            <option value="repite 2º bachillerato" {{ old('curso_anterior') == 'repite_2_bachillerato' || $_SESSION['curso_anterior'] == 'repite 2º bachillerato'? 'selected' : '' }}> Repite 2º Bachillerato</option>
            <option value="ciclo formativo" {{ old('curso_anterior') == 'ciclo_formativo' || $_SESSION['curso_anterior'] == 'ciclo formativo'? 'selected' : '' }}>Ciclo Formativo</option>
        </select>
        {!! $errors->first('curso_anterior', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6" {{ $errors->has('ampa') ? 'has-error' : '' }}>
        <label for="ampa">¿Paga AMPA?</label>
        <select id="ampa" name="ampa" class="form-control">
            <option disabled selected>Seleccione</option>
            <option value="1" {{ old('ampa') == '1' || $_SESSION['ampa'] == '1'? 'selected' : '' }}>SI</option>
            <option value="0" {{ old('ampa') == '0' || $_SESSION['ampa'] == '0'? 'selected' : '' }}>NO</option>
        </select>
        {!! $errors->first('ampa', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group col-md-6" {{ $errors->has('transporte') ? 'has-error' : '' }}>
        <label for="transporte">¿ Va a utilizar transporte escolar ?</label>
        <select id="transporte" name="transporte" class="form-control">
            <option disabled selected>Seleccione</option>
            <option value="no" {{ old('transporte') == 'no' || $_SESSION['transporte'] == 'no'? 'selected' : '' }}>NO</option>
            <option value="aljucer_jardin" {{ old('transporte') == 'aljucer_jardin' || $_SESSION['transporte'] == 'aljucer_jardin'? 'selected' : '' }}>Aljucer jardin</option>
            <option value="aljucer_opel" {{ old('transporte') == 'aljucer_opel' || $_SESSION['transporte'] == 'aljucer_opel'? 'selected' : '' }}>Aljucer opel</option>
            <option value="aljucer_mueblesCaballero" {{ old('transporte') == 'aljucer_mueblesCaballero' || $_SESSION['transporte'] == 'aljucer_mueblesCaballero'? 'selected' : '' }}>Aljucer muebles Caballero</option>
            <option value="sanpio" {{ old('transporte') == 'sanpio' || $_SESSION['transporte'] == 'sanpio'? 'selected' : '' }}>San Pio</option>
        </select>
        {!! $errors->first('transporte', '<span class="help-block">:message</span>') !!}
    </div>
    <input type="text" id="matricula" name="matricula" hidden value="{{$_SESSION['matricula']}}">

</div>