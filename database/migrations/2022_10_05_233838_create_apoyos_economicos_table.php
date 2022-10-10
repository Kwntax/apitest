<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApoyosEconomicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apoyos_economicos', function (Blueprint $table) {
            $table->string('id', 6)->primary()->comment("Valores: AE-PDR (Padre), AE-MDR (Madre), AE-HRM (Hermano(a)), AE-CNY (Cónyuge), AE-OF (Otro Familiar), AE-YO (Yo)");
            $table->string('apoyo_economico', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apoyos_economicos');
    }
}
