<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('matricula');
            $table->string('nombre', 75);
            $table->string('genero', 6);
            $table->char('foto', 255);
            $table->decimal('promedio_general', 3, 1);
            $table->string('grupo', 25);
            $table->foreign('genero', 'fk_genero_alumno')->references('id')->on('generos');
            $table->foreign('grupo', 'fk_grupo_alumno')->references('id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
