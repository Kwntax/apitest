<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBachilleratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bachilleratos', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('tipo', 6);
            $table->string('nombre', 50);
            $table->string('entidad_federativa', 6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bachilleratos');
    }
}
