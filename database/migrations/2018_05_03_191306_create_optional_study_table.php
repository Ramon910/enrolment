<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionalStudyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('optional_study', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('study_id');
            $table->unsignedInteger('optional_id');
            $table->timestamps();

            $table->foreign('study_id')->references('id')->on('studies');
            $table->foreign('optional_id')->references('id')->on('optionals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('optional_study');
    }
}
