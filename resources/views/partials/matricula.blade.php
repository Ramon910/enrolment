@extends('layouts.layout')

@section('content')
    {!! Form::open(['route' => ['store.matricula'], 'method' => 'POST', 'onsubmit' => 'return validacion()']) !!}
    <input type="text" hidden value="{{ $id }}" name="id">
    <h3>Matricula</h3>
    <div class="form-row">
        <div class="form-group col-md-4" {{ $errors->has('primercentro') ? 'has-error' : '' }}>
            <label for="primercentro">¿Se matricula por primera vez en el centro?</label>
            <select id="primercentro" name="primercentro" class="form-control">
                <option disabled selected>Seleccione</option>
                <option value="1" {{ old('primercentro') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('primercentro') == '0' ? 'selected' : '' }}>NO</option>
            </select>
            {!! $errors->first('primercentro', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('centro_anterior') ? 'has-error' : '' }}>
            <label for="centro_anterior">Centro en el que estudió el curso anterior</label>
            <input type="text" class="form-control" id="centro_anterior"  name="centro_anterior" value="{{old('centro_anterior')}}">
            {!! $errors->first('centro_anterior', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('dictamen') ? 'has-error' : '' }}>
            <label for="dictamen">¿Es alumno/a con DICTAMEN DE ESOLARIZACIÓN?</label>
            <select id="dictamen" name="dictamen" class="form-control">
                <option disabled selected>Seleccione</option>
                <option value="1" {{ old('dictamen') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('dictamen') == '0' ? 'selected' : '' }}>NO</option>
            </select>
            {!! $errors->first('dictamen', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4" {{ $errors->has('repite') ? 'has-error' : '' }}>
            <label for="repite">¿Repite el mismo curso?</label>
            <select id="repite" name="repite" class="form-control">
                <option disabled selected>Seleccione</option>
                <option value="1" {{ old('repite') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('repite') == '0' ? 'selected' : '' }}>NO</option>
            </select>
            {!! $errors->first('repite', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('pendientes') ? 'has-error' : '' }}>
            <label for="pendientes">Materias pendientes</label>
            <input type="text" class="form-control" id="pendientes" name="pendientes" value="{{old('pendientes')}}">
            {!! $errors->first('pendientes', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('curso_anterior') ? 'has-error' : '' }}>
            <label for="curso_anterior">Estudios realizados en el curso anterior :</label>
            <select id="curso_anterior" name="curso_anterior" class="form-control">
                <option disabled selected>Seleccione</option>
                <option value="6 primaria"{{ old('curso_anterior') == '6_primaria' ? 'selected' : '' }}>6º Primaria</option>
                <option value="1º eso" {{ old('curso_anterior') == '1_eso' ? 'selected' : '' }}>1º ESO</option>
                <option value="2º eso" {{ old('curso_anterior') == '2_eso' ? 'selected' : '' }}>2º ESO</option>
                <option value="3º eso" {{ old('curso_anterior') == '3_eso' ? 'selected' : '' }}>3º ESO</option>
                <option value="3º eso" {{ old('curso_anterior') == '3_eso' ? 'selected' : '' }}>4º ESO</option>
                <option value="2º pmar" {{ old('curso_anterior') == '2_pmar' ? 'selected' : '' }}>2º PEMAR</option>
                <option value="eso" {{ old('curso_anterior') == 'eso' ? 'selected' : '' }}>ESO</option>
                <option value="1º bachillerato" {{ old('curso_anterior') == '1_bachillerato' ? 'selected' : '' }}>1º Bachillerato</option>
                <option value="2º bachillerato" {{ old('curso_anterior') == '2_bachillerato' ? 'selected' : '' }}>2º Bachillerato</option>
                <option value="repite 1º bachillerato" {{ old('curso_anterior') == 'repite_1_bachillerato' ? 'selected' : '' }}> Repite 1º Bachillerato</option>
                <option value="repite 2º bachillerato" {{ old('curso_anterior') == 'repite_2_bachillerato' ? 'selected' : '' }}> Repite 2º Bachillerato</option>
                <option value="ciclo formativo" {{ old('curso_anterior') == 'ciclo_formativo' ? 'selected' : '' }}>Ciclo Formativo</option>
            </select>
            {!! $errors->first('curso_anterior', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4" {{ $errors->has('ampa') ? 'has-error' : '' }}>
            <label for="ampa">¿Paga AMPA?</label>
            <select id="ampa" name="ampa" class="form-control">
                <option disabled selected>Seleccione</option>
                <option value="1" {{ old('ampa') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('ampa') == '0' ? 'selected' : '' }}>NO</option>
            </select>
            {!! $errors->first('ampa', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('transporte') ? 'has-error' : '' }}>
            <label for="transporte">¿ Va a utilizar transporte escolar ?</label>
            <select id="transporte" name="transporte" class="form-control">
                <option disabled selected>Seleccione</option>
                <option value="no" {{ old('transporte') == 'no' ? 'selected' : '' }}>NO</option>
                <option value="aljucer_jardin" {{ old('transporte') == 'aljucer_jardin' ? 'selected' : '' }}>Aljucer jardin</option>
                <option value="aljucer_opel" {{ old('transporte') == 'aljucer_opel' ? 'selected' : '' }}>Aljucer opel</option>
                <option value="aljucer_mueblesCaballero" {{ old('transporte') == 'aljucer_mueblesCaballero' ? 'selected' : '' }}>Aljucer muebles Caballero</option>
                <option value="sanpio" {{ old('transporte') == 'sanpio' ? 'selected' : '' }}>San Pio</option>
            </select>
            {!! $errors->first('transporte', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('matricula') ? 'has-error' : '' }}>
            <label for="matricula">¿Curso del que se matricula ?</label>
            <select id="matricula" name="matricula" class="form-control">
                <option disabled selected>Seleccione</option>
                @foreach($estudios as $estudio)
                    <option value="{{ $estudio->id }}" {{ old('matricula') == $estudio->id ? 'selected' : '' }}>{{ $estudio->nombre }}</option>
                @endforeach
            </select>
            {!! $errors->first('matricula', '<span class="help-block">:message</span>') !!}
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

    </script>
@endpush