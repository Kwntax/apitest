<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuatrimestresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuatrimestres', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('carrera', 50);
            $table->tinyInteger('cuatrimestre');
            $table->string('grupo');
            $table->string('nivel', 20)->comment("Valores: TSU, Ingeniería, Licenciatura.");
            $table->string('especialidad', 50);
            $table->string('periodo', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuatrimestres');
    }
}
