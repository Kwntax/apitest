<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRazonesTrabajoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('razones_trabajo', function (Blueprint $table) {
            $table->string('id', 6)->primary()->comment("RT-AEF (Apoyar Económicamente a la Familia), RT-ATF (Apoyar Totalmente a la Familia), RT-SGI (Solventar Algunos Gastos Personales), RT-ST (Sostenerme Totalmente).");
            $table->string('razon', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('razones_trabajo');
    }
}
