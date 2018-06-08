

@extends('layouts.layout')

@section('content')
    {!! Form::open(['route' => ['store.ciclosformativos'], 'method' => 'POST', 'onsubmit' => 'return validacion()']) !!}
    <div class="form-row">
        <input type="text" hidden value="{{ $id }}" name="id">
        <div class="col-md-6 text-center">
            <h2>{{ $estudios->nombre }}</h2>
        </div>
        <div class="col-md-6 text-center">
            <p>{{ $estudios->descripcion }}</p>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12" {{ $errors->has('ciclo') ? 'has-error' : '' }}>
            <h3 class="float-left " style="width: 50%">Ciclos Formativos de GRADO MEDIO</h3>
            <h3 class="float-left text-right" style="width: 50%">Ciclos Formativos de GRADO SUPERIOR</h3>
            <div style="clear: both;"><hr></div>
            <div class="form-check">
                <div class="float-left " style="width: 35%;">
                    @foreach( $estudios->options as $opcion)
                        @if($opcion->descripcion == 'Grado Medio Administración y gestión')
                            <input class="" type="radio" name="ciclo" value="{{ $opcion->id }}" {{ old('ciclo') == $opcion->id ? 'checked' : '' }}>
                            <label class="" for="ciclo" style="display: inline;">{{ $opcion->nombre }}</label>
                            <br>
                        @endif
                    @endforeach
                </div>
                <div class="float-left text-center" style="width: 15%; ">
                    <p>Administración y Gestión</p>
                </div>
                <div class="float-left " style="width: 50%;">
                    @foreach( $estudios->options as $opcion)
                        @if($opcion->descripcion == 'Grado Superior Administración y Gestión')
                            <input class="" type="radio" name="ciclo" value="{{ $opcion->id }}" {{ old('ciclo') == $opcion->id ? 'checked' : '' }}>
                            <label class="" for="ciclo" style="display: inline;">{{ $opcion->nombre }}</label>
                            <br>
                        @endif
                    @endforeach
                </div>
                <div style="clear: both;"><hr></div>

                <div class="float-left " style="width: 35%;">
                    @foreach( $estudios->options as $opcion)
                        @if($opcion->descripcion == 'Grado Medio Elecetricidad y Electrónica')
                            <input class="" type="radio" name="ciclo" value="{{ $opcion->id }}" {{ old('ciclo') == $opcion->id ? 'checked' : '' }}>
                            <label class="" for="ciclo" style="display: inline;">{{ $opcion->nombre }}</label>
                            <br>
                        @endif
                    @endforeach
                </div>
                <div class="float-left text-center" style="width: 15%; ">
                    <p>Electricidad y Electrónica</p>
                </div>
                <div class="float-left " style="width: 50%;">
                    @foreach( $estudios->options as $opcion)
                        @if($opcion->descripcion == 'Grado Superior Electricidad y Electrónica')
                            <input class="" type="radio" name="ciclo" value="{{ $opcion->id }}" {{ old('ciclo') == $opcion->id ? 'checked' : '' }}>
                            <label class="" for="ciclo" style="display: inline;">{{ $opcion->nombre }}</label>
                            <br>
                        @endif
                    @endforeach
                </div>
                <div style="clear: both;"><hr></div>

                <div class="float-left " style="width: 35%;">
                    @foreach( $estudios->options as $opcion)
                        @if($opcion->descripcion == 'Grado Medio Informática y comunicaciones')
                            <input class="" type="radio" name="ciclo" value="{{ $opcion->id }}" {{ old('ciclo') == $opcion->id ? 'checked' : '' }}>
                            <label class="" for="ciclo" style="display: inline;">{{ $opcion->nombre }}</label>
                            <br>
                        @endif
                    @endforeach
                </div>
                <div class="float-left text-center" style="width: 15%; ">
                    <p>Informática y comunicaciones</p>
                </div>
                <div class="float-left" style="width: 50%;">
                    @foreach( $estudios->options as $opcion)
                        @if($opcion->descripcion == 'Grado Superior Informática y Comunicaciones')
                            <input class="" type="radio" name="ciclo" value="{{ $opcion->id }}" {{ old('ciclo') == $opcion->id ? 'checked' : '' }}>
                            <label class="" for="ciclo" style="display: inline;">{{ $opcion->nombre }}</label>
                            <br>
                        @endif
                    @endforeach
                </div>
                <div style="clear: both;"><hr></div>

                <div class="float-left " style="width: 35%;">
                    @foreach( $estudios->options as $opcion)
                        @if($opcion->descripcion == 'Grado Medio Sanidad')
                            <input class="" type="radio" name="ciclo" value="{{ $opcion->id }}" {{ old('ciclo') == $opcion->id ? 'checked' : '' }}>
                            <label class="" for="ciclo" style="display: inline;">{{ $opcion->nombre }}</label>
                            <br>
                        @endif
                    @endforeach
                </div>
                <div class="float-left text-center" style="width: 15%; ">
                    <p>Sanidad</p>
                </div>
                <div class="float-left " style="width: 50%;">
                    @foreach( $estudios->options as $opcion)
                        @if($opcion->descripcion == 'Grado Superior Sanidad')
                            <input class="" type="radio" name="ciclo" value="{{ $opcion->id }}" {{ old('ciclo') == $opcion->id ? 'checked' : '' }}>
                            <label class="" for="ciclo" style="display: inline;">{{ $opcion->nombre }}</label>
                            <br>
                        @endif
                    @endforeach
                </div>
                <div style="clear: both;"><hr></div>

            </div>
            {!! $errors->first('ciclo', '<span class="help-block">:message</span>') !!}
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

            var ciclo = $('input[name=ciclo]');


            for(var i=0; i<ciclo.length; i++) {
                if(ciclo[i].checked) {
                    $('div.form-check').removeClass('error');
                    return true;
                }else{
                    $('div.form-check').addClass('error');
                    centinel = 1;
                }
            }

            if (centinel == 1){
                $('#error').html('Rellene correctamente los campos en rojo');
                return false;
            }

        }

    </script>
@endpush