<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosCivilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados_civiles', function (Blueprint $table) {
            $table->string('id', 6)->primary()->comment("Valores: EC-CSD (Casado), EC-DVR (Divorciado), EC-SLT (Soltero), EC-UL (Union Libre).");
            $table->string('estado_civil', 25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados_civiles');
    }
}
