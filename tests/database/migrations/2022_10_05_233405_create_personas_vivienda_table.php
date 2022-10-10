<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasViviendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas_vivienda', function (Blueprint $table) {
            $table->string('id', 6)->primary()->comment("Valores: VC-AP (Ambos Padres), VC-UP (Uno de los Padres), VC-PRJ (Pareja), VC-SL (Solo(a)), VC-OF (Otro familiar), VC-AMG (Amigos)");
            $table->string('vive_con', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas_vivienda');
    }
}
