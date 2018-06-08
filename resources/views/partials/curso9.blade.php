

@extends('layouts.layout')

@section('content')
    {!! Form::open(['route' => ['store.primerobachiller1'], 'onsubmit' => 'return validacion()']) !!}
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
        <div class="form-group col-md-12" {{ $errors->has('opcion') ? 'has-error' : '' }}>
            <label for="opcion">Seleccione una troncal</label>
            <select id="opcion" name="opcion" class="form-control">
                <option disabled selected>Seleccione</option>
                @foreach($estudios->options as $opcion)
                    @if($opcion->descripcion == 'De opción')
                        <option value="{{ $opcion->id }}" {{ old('opcion') == $opcion->id ? 'selected' : '' }}>{{ $opcion->nombre }}</option>
                    @endif
                @endforeach
            </select>
            {!! $errors->first('troncal', '<span class="help-block">:message</span>') !!}
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
                    @if($opcion->descripcion == 'Específica')
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
    <div class="form-row">
        <div class="form-group col-md-4" {{ $errors->has('cuarta') ? 'has-error' : '' }}>
            <label for="cuarta">Opción 4º</label>
            <select id="cuarta" name="cuarta" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('cuarta', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('quinta') ? 'has-error' : '' }}>
            <label for="quinta">Opción 5º</label>
            <select id="quinta" name="quinta" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('quinta', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('sexta') ? 'has-error' : '' }}>
            <label for="sexta">Opción 6º</label>
            <select id="sexta" name="sexta" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('sexta', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4" {{ $errors->has('septima') ? 'has-error' : '' }}>
            <label for="septima">Opción 7º</label>
            <select id="septima" name="septima" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('septima', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('octava') ? 'has-error' : '' }}>
            <label for="octava">Opción 8º</label>
            <select id="octava" name="octava" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('octava', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('novena') ? 'has-error' : '' }}>
            <label for="novena">Opción 9º</label>
            <select id="novena" name="novena" class="form-control">
                <option disabled selected>Seleccione</option>
            </select>
            {!! $errors->first('novena', '<span class="help-block">:message</span>') !!}
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
                $('#cuarta').html('<option disabled selected>Seleccione</option>');
                $('#quinta').html('<option disabled selected>Seleccione</option>');
                $('#sexta').html('<option disabled selected>Seleccione</option>');
                $('#septima').html('<option disabled selected>Seleccione</option>');
                $('#octava').html('<option disabled selected>Seleccione</option>');
                $('#novena').html('<option disabled selected>Seleccione</option>');
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
                $('#sexta').html('<option disabled selected>Seleccione</option>');
                $('#septima').html('<option disabled selected>Seleccione</option>');
                $('#octava').html('<option disabled selected>Seleccione</option>');
                $('#novena').html('<option disabled selected>Seleccione</option>');
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
                $('#sexta').html('<option disabled selected>Seleccione</option>');
                $('#septima').html('<option disabled selected>Seleccione</option>');
                $('#octava').html('<option disabled selected>Seleccione</option>');
                $('#novena').html('<option disabled selected>Seleccione</option>');
            });

            $('#cuarta').change(function (){
                var opciones='';
                primera.each(function () {
                    if ($(this).val() != $('#primera').val() && $(this).val() != $('#segunda').val() && $(this).val() != $('#tercera').val() && $(this).val() != $('#cuarta').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("quinta") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#quinta').html(opciones);
                $('#sexta').html('<option disabled selected>Seleccione</option>');
                $('#septima').html('<option disabled selected>Seleccione</option>');
                $('#octava').html('<option disabled selected>Seleccione</option>');
                $('#novena').html('<option disabled selected>Seleccione</option>');
            });

            $('#quinta').change(function (){
                var opciones='';
                primera.each(function () {
                    if ($(this).val() != $('#primera').val() && $(this).val() != $('#segunda').val() && $(this).val() != $('#tercera').val() && $(this).val() != $('#cuarta').val() && $(this).val() != $('#quinta').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("sexta") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#sexta').html(opciones);
                $('#septima').html('<option disabled selected>Seleccione</option>');
                $('#octava').html('<option disabled selected>Seleccione</option>');
                $('#novena').html('<option disabled selected>Seleccione</option>');
            });

            $('#sexta').change(function (){
                var opciones='';
                primera.each(function () {
                    if ($(this).val() != $('#primera').val() && $(this).val() != $('#segunda').val() && $(this).val() != $('#tercera').val() && $(this).val() != $('#cuarta').val() && $(this).val() != $('#quinta').val() && $(this).val() != $('#sexta').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("septima") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#septima').html(opciones);
                $('#octava').html('<option disabled selected>Seleccione</option>');
                $('#novena').html('<option disabled selected>Seleccione</option>');
            });

            $('#septima').change(function (){
                var opciones='';
                primera.each(function () {
                    if ($(this).val() != $('#primera').val() && $(this).val() != $('#segunda').val() && $(this).val() != $('#tercera').val() && $(this).val() != $('#cuarta').val() && $(this).val() != $('#quinta').val() && $(this).val() != $('#sexta').val() && $(this).val() != $('#septima').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("octava") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#octava').html(opciones);
                $('#novena').html('<option disabled selected>Seleccione</option>');
            });


            $('#octava').change(function (){
                var opciones='';
                primera.each(function () {
                    if ($(this).val() != 'Seleccione' && $(this).val() != $('#primera').val() && $(this).val() != $('#segunda').val() && $(this).val() != $('#tercera').val() && $(this).val() != $('#cuarta').val() && $(this).val() != $('#quinta').val() && $(this).val() != $('#sexta').val() && $(this).val() != $('#septima').val() && $(this).val() != $('#octava').val()) {
                        console.log('opcion' + $(this).text());
                        opciones +='<option value="'+$(this).val()+'" {{ old("novena") == $opcion->id ? "selected" : "" }}>'+$(this).text()+'</option>';
                    }
                });
                $('#novena').html(opciones);
            });
        });

        //VALIDACIÓN
        function validacion() {
            var centinel =0;

            var opcion = $('#opcion');
            var primera = $('#primera');
            var segunda =$('#segunda');
            var tercera = $('#tercera');
            var cuarta = $('#cuarta');
            var quinta = $('#quinta');
            var sexta = $('#sexta');
            var septima = $('#septima');
            var octava = $('#octava');
            var novena = $('#novena');

            if(opcion.val() == null){
                opcion.addClass('error');
                centinel = 1;
            }else {
                opcion.removeClass('error');
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

            if(sexta.val() == null){
                sexta.addClass('error');
                centinel = 1;
            }else {
                sexta.removeClass('error');
            }

            if(septima.val() == null){
                septima.addClass('error');
                centinel = 1;
            }else {
                septima.removeClass('error');
            }

            if(octava.val() == null){
                octava.addClass('error');
                centinel = 1;
            }else {
                octava.removeClass('error');
            }

            if(novena.val() == null){
                novena.addClass('error');
                centinel = 1;
            }else {
                novena.removeClass('error');
            }

            if (centinel ==1){
                $('#error').html('Rellene correctamente los campos en rojo');
                return false;
            }

        }

    </script>
@endpush