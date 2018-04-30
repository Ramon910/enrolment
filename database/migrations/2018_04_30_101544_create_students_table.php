<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('sexo');
            $table->string('dni');
            $table->date('F_nacimiento');
            $table->string('localidad_nacimiento');
            $table->string('provincia_navimiento');
            $table->string('pais_nacimiento');
            $table->unsignedInteger('telefono');
            $table->string('domicilio');
            $table->string('municipio');
            $table->string('provincia');
            $table->unsignedInteger('codigo_postal');
            $table->boolean('ampa');
            $table->string('transporte')->nullable();
            $table->boolean('1_centro');
            $table->string('centro_anterior');
            $table->boolean('repite');
            $table->string('pendientes');
            $table->string('curso_anterior');
            $table->boolean('dictamen');
            $table->binary('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
