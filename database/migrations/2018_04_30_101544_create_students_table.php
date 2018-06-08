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
            $table->string('nombre')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('sexo')->nullable();
            $table->string('dni')->nullable();
            $table->date('F_nacimiento')->nullable();
            $table->string('localidad_nacimiento')->nullable();
            $table->string('provincia_nacimiento')->nullable();
            $table->string('pais_nacimiento')->nullable();
            $table->unsignedInteger('telefono')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('municipio')->nullable();
            $table->string('provincia')->nullable();
            $table->unsignedInteger('codigo_postal')->nullable();
            $table->boolean('ampa')->nullable();
            $table->string('transporte')->nullable();
            $table->boolean('primer_centro')->nullable();
            $table->string('centro_anterior')->nullable();
            $table->boolean('repite')->nullable();
            $table->string('pendientes')->nullable();
            $table->string('curso_anterior')->nullable();
            $table->boolean('dictamen')->nullable();
            $table->string('foto')->nullable();
            $table->unsignedInteger('study_id')->nullable();
            $table->boolean('bilingüe')->nullable();
            $table->timestamps();

            //$table->foreign('study_id')->references('id')->on('studies');
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
