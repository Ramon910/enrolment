

@extends('layouts.layout')

@section('content')
    {!! Form::open(['route' => ['store.segundoeso'], 'method' => 'POST', 'onsubmit' => 'return validacion()']) !!}
    <div class="form-row">
        <input type="text" hidden value="{{ $id }}" name="id">
        <div class="col-md-3">
            <h1>Matrícula</h1>
            <h3>{{ $estudios->nombre }}</h3>
        </div>
        <div class="col-md-3">
            <h1>Asignaturas</h1>
            <p>{{ $estudios->descripcion }}</p>
        </div>
        <div class="form-group col-md-3" {{ $errors->has('especifica') ? 'has-error' : '' }}>
            <label>Elija una específica</label>
            <select id="especifica" name="especifica" class="form-control">
                <option disabled selected>Seleccione</option>
                @foreach($estudios->options as $opcion)
                    @if($opcion->descripcion == 'Específica')
                        <option value="{{ $opcion->id }}" {{ old('especifica') == $opcion->id ? 'selected' : '' }}>{{ $opcion->nombre }}</option>
                    @endif
                @endforeach
            </select>
            {!! $errors->first('especifica', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-3" {{ $errors->has('bilingüe') ? 'has-error' : '' }}>
            <label for="bilingüe">¿Bilingüe?</label>
            <select id="bilingüe" name="bilingüe" class="form-control">
                <option disabled selected>Seleccione</option>
                <option value="1" {{ old('bilingüe') == '1' ? 'selected' : '' }}>SI</option>
                <option value="0" {{ old('bilingüe') == '0' ? 'selected' : '' }}>NO</option>
            </select>
            {!! $errors->first('bilingüe', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12">
            <h3>Seleccione por orden de preferencia</h3>
        </div>
        <div class="form-group col-md-4" {{ $errors->has('primera') ? 'has-error' : '' }}>
            <label for="primera">Opción 1º</label>
            <select id="primera" name="primera" class="form-control">
                <option disabled selected>Seleccione</option>
                @foreach($estudios->options as $opcion)
                    @if($opcion->descripcion == 'Libre configuración')
                        <option value="{{ $opcion->id }}" {{ old('primera') == $opcion->id ? 'selected' : '' }}>{{ $opcion->nombre }}</option>
                    @endif
                @endforeach
            </select>
            {!! $errors->first('primera', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('segunda') ? 'has-error' : '' }}>
            <label for="segunda">Opción 2º</label>
            <select id="segunda" name="segunda" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('segunda', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('tercera') ? 'has-error' : '' }}>
            <label for="tercera">Opción 3º</label>
            <select id="tercera" name="tercera" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('tercera', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <button type="submit" class="btn btn-success float-right" >Siguiente</button>
    <h5 style="text-align: center" id="error"></h5>
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
        });

        //VALIDACIÓN
        function validacion() {
            var centinel =0;

            var especifica = $('#especifica');
            var bilingüe = $('#bilingüe');
            var primera = $('#primera');
            var segunda =$('#segunda');
            var tercera = $('#tercera');

            if(especifica.val() == null){
                especifica.addClass('error');
                centinel = 1;
            }else {
                especifica.removeClass('error');
            }

            if(bilingüe.val() == null){
                bilingüe.addClass('error');
                centinel = 1;
            }else {
                bilingüe.removeClass('error');
            }

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

            if (centinel ==1){
                $('#error').html('Rellene correctamente los campos en rojo');
                return false;
            }

        }

    </script>
@endpush