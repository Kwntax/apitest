<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosLaboralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_laborales', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('alumno');
            $table->string('nombre', 75);
            $table->string('domicilio', 100);
            $table->char('telefono', 10);
            $table->string('puesto', 50);
            $table->string('departamento', 50);
            $table->tinyInteger('relacion_estudio')->comment("Cero = No relación, Uno = Relación");
            $table->string('razon_trabajo', 6);
            
            $table->foreign('alumno', 'fk_alumnos_datos_laborales')->references('id')->on('alumnos');
            $table->foreign('razon_trabajo', 'fk_razon_trabajo_datos_laborales')->references('id')->on('razones_trabajo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_laborales');
    }
}
