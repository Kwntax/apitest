<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoBachilleratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_bachilleratos', function (Blueprint $table) {
            $table->string('id', 6)->primary()->comment("Valores: TB-PBL (Escuela Pública (Oficial de Gobierno)), TB-PRV (Privada o Particular).");
            $table->string('tipo_bachillerato', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_bachilleratos');
    }
}
