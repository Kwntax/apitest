<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosFamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_familiares', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('alumno');
            $table->string('nombre', 75);
            $table->string('ocupacion', 75);
            $table->char('telefono', 10);
            $table->string('parentesco', 30);
            $table->tinyInteger('emergencia')->comment("Valores: 0: No emergencia, 1: Emergencia.");
            
            $table->foreign('alumno', 'fk_datos_familiares_alumno')->references('id')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_familiares');
    }
}
