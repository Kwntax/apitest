<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->string('id', 25)->primary();
            $table->tinyInteger('cuatrimestre');
            $table->string('grupo');
            $table->string('nombre_completo', 100);
            $table->string('carrera', 6);
            $table->string('especialidad', 6);
            $table->integer('periodo');
            
            $table->foreign('carrera', 'fk_carrera_grupos')->references('id')->on('carreras');
            $table->foreign('especialidad', 'fk_especialidad_grupos')->references('id')->on('especialidades');
            $table->foreign('periodo', 'fk_periodo_grupos')->references('id')->on('periodos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
