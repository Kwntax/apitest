<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionesAnterioresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones_anteriores', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('alumno');
            $table->smallInteger('ingreso');
            $table->string('ingles');
            $table->tinyInteger('bachillerato');
            
            $table->foreign('alumno', 'fk_calificaciones_anteriores_alumno')->references('id')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificaciones_anteriores');
    }
}
