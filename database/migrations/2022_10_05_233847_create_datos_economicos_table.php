<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosEconomicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_economicos', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('alumno');
            $table->string('ingresos', 7);
            $table->string('tipo_vivienda', 6);
            $table->string('vive_con', 6);
            $table->string('tipo_transporte', 6);
            $table->string('persona_apoyo_economico', 6);
            
            $table->foreign('persona_apoyo_economico', 'fk_apoyo_economico_datos_economicos')->references('id')->on('apoyos_economicos');
            $table->foreign('alumno', 'fk_datos_economicos_alumno')->references('id')->on('alumnos');
            $table->foreign('ingresos', 'fk_ingreso_datoseconomicos')->references('id')->on('ingresos_familiares');
            $table->foreign('tipo_transporte', 'fk_tipo_transporte_datos_economicos')->references('id')->on('transportes');
            $table->foreign('tipo_vivienda', 'fk_tipo_vivienda_datos_economicos')->references('id')->on('viviendas');
            $table->foreign('vive_con', 'fk_vive_con_datos_economicos')->references('id')->on('personas_vivienda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_economicos');
    }
}
