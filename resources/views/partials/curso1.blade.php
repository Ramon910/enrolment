

@extends('layouts.layout')

@section('content')
    {!! Form::open(['route' => ['store.primeroeso'], 'method' => 'POST']) !!}
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
            <div class="form-check">
                @foreach( $estudios->options as $opcion)
                    @if($opcion->descripcion == 'Específica')
                        <input class="" type="radio" name="especifica" value="{{ $opcion->id }}" {{ old('especifica') == $opcion->id ? 'checked' : '' }}>
                        <label class="" for="especifica">{{ $opcion->nombre }}</label>
                    @endif
                @endforeach
            </div>
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
                @foreach($estudios->options as $opcion)
                    @if($opcion->descripcion == 'Libre configuración')
                        <option value="{{ $opcion->id }}" {{ old('segunda') == $opcion->id ? 'selected' : '' }}>{{ $opcion->nombre }}</option>
                    @endif
                @endforeach
            </select>
            {!! $errors->first('segunda', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group col-md-4" {{ $errors->has('tercera') ? 'has-error' : '' }}>
            <label for="tercera">Opción 3º</label>
            <select id="tercera" name="tercera" class="form-control">
                <option disabled selected>Seleccione</option>
                @foreach($estudios->options as $opcion)
                    @if($opcion->descripcion == 'Libre configuración')
                        <option value="{{ $opcion->id }}" {{ old('tercera') == $opcion->id ? 'selected' : '' }}>{{ $opcion->nombre }}</option>
                    @endif
                @endforeach
            </select>
            {!! $errors->first('tercera', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <button type="submit" class="btn btn-success ">Siguiente</button>
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