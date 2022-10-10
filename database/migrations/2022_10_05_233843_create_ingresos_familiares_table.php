<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresosFamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos_familiares', function (Blueprint $table) {
            $table->string('id', 7)->primary()->comment("Valores: IF-ME5 (Menos de ,000), IF-510 (,000 A ,000), IF-1015 (,000 A ,000), IF-MA15 (Más de ,000).");
            $table->string('ingresos_familiares', 55);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingresos_familiares');
    }
}
