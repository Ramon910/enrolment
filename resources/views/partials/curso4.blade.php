

@extends('layouts.layout')

@section('content')
    {!! Form::open(['route' => ['store.primeropmar'], 'method' => 'POST', 'onsubmit' => 'return validacion()']) !!}
    <div class="form-row">
        <input type="text" hidden value="{{ $id }}" name="id">
        <div class="col-md-4">
            <h1>Matrícula</h1>
            <h3>{{ $estudios->nombre }}</h3>
        </div>
        <div class="col-md-4">
            <h1>Asignaturas</h1>
            <p>{{ $estudios->descripcion }}</p>
        </div>
        <div class="form-group col-md-4" {{ $errors->has('especifica') ? 'has-error' : '' }}>
            <label for="especifica">Seleccione una específica</label>
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
    </div>
    <button type="submit" class="btn btn-success float-right" >Siguiente</button>
    <h5 style="text-align: center" id="error"></h5>
    {{ Form::close() }}
@endsection

@push('scripts')
    <script>

        //VALIDACIÓN
        function validacion() {
            var centinel =0;

            var especifica = $('#especifica');

            if(especifica.val() == null){
                especifica.addClass('error');
                centinel = 1;
            }else {
                especifica.removeClass('error');
            }

            if (centinel ==1){
                $('#error').html('Rellene correctamente los campos en rojo');
                return false;
            }

        }

    </script>
@endpush