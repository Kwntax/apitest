<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('alumno');
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->string('ciudad_nacimiento', 30);
            $table->string('municipio_estado', 6);
            $table->integer('domicilio');
            $table->char('telefono_celular', 10);
            $table->char('telefono_casa', 10);
            $table->string('correo_personal', 50);
            $table->string('correo_institucional', 50);
            $table->string('estado_civil', 6);
            
            $table->foreign('alumno', 'fk_datos_personales_alumno')->references('id')->on('alumnos');
            $table->foreign('domicilio', 'fk_domicilio_datos_personales')->references('id')->on('domicilios');
            $table->foreign('estado_civil', 'fk_estado_civil_datos_personales')->references('id')->on('estados_civiles');
            $table->foreign('municipio_estado', 'fk_municipio_estado_datos_personales')->references('id')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_personales');
    }
}
