
@extends('layouts.layout')

@section('content')
    {!! Form::open(['route' => ['store.Segundobachiller1'], 'method' => 'POST', 'onsubmit' => 'return validacion()']) !!}
    <div class="form-row">
        <input type="text" hidden value="{{ $id }}" name="id">
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
        <div class="form-group col-md-6" {{ $errors->has('primera') ? 'has-error' : '' }}>
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
        <div class="form-group col-md-6" {{ $errors->has('segunda') ? 'has-error' : '' }}>
            <label for="segunda">Específica 2º</label>
            <select id="segunda" name="segunda" class="form-control">
                <option disabled selected>Seleccione</option>

            </select>
            {!! $errors->first('segunda', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4" {{ $errors->has('tercera') ? 'has-error' : '' }}>
            <label for="tercera">Específica 3º</label>
            <select id="tercera" name="tercera" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('tercera', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('cuarta') ? 'has-error' : '' }}>
            <label for="cuarta">Específica 4º</label>
            <select id="cuarta" name="cuarta" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('cuarta', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('quinta') ? 'has-error' : '' }}>
            <label for="quinta">Específica 5º</label>
            <select id="quinta" name="quinta" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('quinta', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12">
            <h3>Seleccione por orden de preferencia</h3>
        </div>
        <div class="form-group col-md-4" {{ $errors->has('primera1') ? 'has-error' : '' }}>
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
        <div class="form-group col-md-4" {{ $errors->has('segunda1') ? 'has-error' : '' }}>
            <label for="segunda1">Específica 2º</label>
            <select id="segunda1" name="segunda1" class="form-control">
                <option disabled selected>Seleccione</option>

            </select>
            {!! $errors->first('segunda1', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('tercera1') ? 'has-error' : '' }}>
            <label for="tercera1">Específica 3º</label>
            <select id="tercera1" name="tercera1" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('tercera1', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4" {{ $errors->has('cuarta1') ? 'has-error' : '' }}>
            <label for="cuarta1">Específica 4º</label>
            <select id="cuarta1" name="cuarta1" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('cuarta1', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('quinta1') ? 'has-error' : '' }}>
            <label for="quinta1">Específica 5º</label>
            <select id="quinta1" name="quinta1" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('quinta1', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('sexta1') ? 'has-error' : '' }}>
            <label for="sexta1">Específica 6º</label>
            <select id="sexta1" name="sexta1" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('sexta1', '<span class="help-block">:message</span>') !!}
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
                $('#cuarta').html('<option disabled selected>Seleccione</option>');
                $('#quinta').html('<option disabled selected>Seleccione</option>');
            });

            $('#segunda').change(function (){
                var opciones='';
                primera.each(function () {
                    if ($(this).val() != $('#primera').val() && $(this).val() != $('#segunda').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("tercera") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#tercera').html(opciones);
                $('#cuarta').html('<option disabled selected>Seleccione</option>');
                $('#quinta').html('<option disabled selected>Seleccione</option>');
            });

            $('#tercera').change(function (){
                var opciones='';
                primera.each(function () {
                    if ($(this).val() != $('#primera').val() && $(this).val() != $('#segunda').val() && $(this).val() != $('#tercera').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("cuarta") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#cuarta').html(opciones);
                $('#quinta').html('<option disabled selected>Seleccione</option>');
            });

            $('#cuarta').change(function (){
                var opciones='';
                primera.each(function () {
                    if ($(this).val() != 'Seleccione' && $(this).val() != $('#primera').val() && $(this).val() != $('#segunda').val() && $(this).val() != $('#tercera').val() && $(this).val() != $('#cuarta').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("quinta") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#quinta').html(opciones);
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
                $('#quinta1').html('<option disabled selected>Seleccione</option>');
                $('#sexta1').html('<option disabled selected>Seleccione</option>');
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
                $('#quinta1').html('<option disabled selected>Seleccione</option>');
                $('#sexta1').html('<option disabled selected>Seleccione</option>');
            });

            $('#tercera1').change(function (){
                var opciones='';
                primera1.each(function () {
                    if ($(this).val() != $('#primera1').val() && $(this).val() != $('#segunda1').val() && $(this).val() != $('#tercera1').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("cuarta1") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#cuarta1').html(opciones);
                $('#quinta1').html('<option disabled selected>Seleccione</option>');
                $('#sexta1').html('<option disabled selected>Seleccione</option>');
            });

            $('#cuarta1').change(function (){
                var opciones='';
                primera1.each(function () {
                    if ($(this).val() != $('#primera1').val() && $(this).val() != $('#segunda1').val() && $(this).val() != $('#tercera1').val() && $(this).val() != $('#cuarta1').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("quinta1") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#quinta1').html(opciones);
                $('#sexta1').html('<option disabled selected>Seleccione</option>');});

            $('#quinta1').change(function (){
                var opciones='';
                primera1.each(function () {
                    if ($(this).val() != 'Seleccione' && $(this).val() != $('#primera1').val() && $(this).val() != $('#segunda1').val() && $(this).val() != $('#tercera1').val() && $(this).val() != $('#cuarta1').val() && $(this).val() != $('#quinta1').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("tercera1") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#sexta1').html(opciones);
            });

        });

        //VALIDACIÓN
        function validacion() {
            var centinel =0;

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
            var cuarta = $('#cuarta');
            var quinta = $('#quinta');

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

            if(cuarta.val() == null){
                cuarta.addClass('error');
                centinel = 1;
            }else {
                cuarta.removeClass('error');
            }

            if(quinta.val() == null){
                quinta.addClass('error');
                centinel = 1;
            }else {
                quinta.removeClass('error');
            }

            //específicas 2
            var primera1 = $('#primera1');
            var segunda1 = $('#segunda1');
            var tercera1 = $('#tercera1');
            var cuarta1 = $('#cuarta1');
            var quinta1 = $('#quinta1');
            var sexta1 = $('#sexta1');

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

            if(quinta1.val() == null){
                quinta1.addClass('error');
                centinel = 1;
            }else {
                quinta1.removeClass('error');
            }

            if(sexta1.val() == null){
                sexta1.addClass('error');
                centinel = 1;
            }else {
                sexta1.removeClass('error');
            }

            if (centinel ==1){
                $('#error').html('Rellene correctamente los campos en rojo');
                return false;
            }

        }


    </script>
@endpush