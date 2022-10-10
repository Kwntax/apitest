<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosEscolaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_escolares', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('alumno');
            $table->integer('bachillerato');
            $table->string('tipo_bachillerato', 6);
            $table->string('entidad_federativa', 6);
            
            $table->foreign('alumno', 'fk_alumno_datos_escolares')->references('id')->on('alumnos');
            $table->foreign('bachillerato', 'fk_bachillerato_datos_escolares')->references('id')->on('bachilleratos');
            $table->foreign('entidad_federativa', 'fk_entidad_federativa_datos_escolares')->references('id')->on('entidades_federativas');
            $table->foreign('tipo_bachillerato', 'fk_tipo_bachillerato_datos_escolares')->references('id')->on('tipo_bachilleratos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_escolares');
    }
}
