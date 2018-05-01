@extends('layouts.layout')

@section('content')

    <div class="row" >
        <div class="col-3">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active"
                   id="list-Alumno-list"
                   data-toggle="list"
                   href="#list-Alumno"
                   role="tab"
                   aria-controls="Alumno">Alumno</a>
                <a class="list-group-item list-group-item-action"
                   id="list-Padres-list"
                   data-toggle="list"
                   href="#list-Padres"
                   role="tab"
                   aria-controls="Padres">Padres</a>
                <a class="list-group-item list-group-item-action"
                   id="list-Matrícula-list"
                   data-toggle="list"
                   href="#list-Matrícula"
                   role="tab"
                   aria-controls="Matrícula">Matrícula</a>
                <a class="list-group-item list-group-item-action"
                   id="list-Curso-list"
                   data-toggle="list"
                   href="#list-Curso"
                   role="tab"
                   aria-controls="Curso">Curso</a>
            </div>
        </div>
        <div class="col-9" style="background-color: white; padding: 10px;">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active"
                     id="list-Alumno"
                     role="tabpanel"
                     aria-labelledby="list-Alumno-list"
                >
                    @include('partials.alumno')
                </div>
                <div class="tab-pane fade"
                     id="list-Padres"
                     role="tabpanel"
                     aria-labelledby="list-Padres-list"
                >
                    @include('partials.padre')
                    @include('partials.madre')
                </div>
                <div class="tab-pane fade"
                     id="list-Matrícula"
                     role="tabpanel"
                     aria-labelledby="list-Matrícula-list"
                >
                    @include('partials.matricula')
                </div>
                <div class="tab-pane fade"
                     id="list-Curso"
                     role="tabpanel"
                     aria-labelledby="list-Curso-list"
                >

                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')

@endpush