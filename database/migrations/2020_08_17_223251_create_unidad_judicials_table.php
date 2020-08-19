<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadJudicialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidadesjudiciales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('provincia',75);
            $table->string('ciudad',75);
            $table->string('direccion',75);
            $table->string('unidadjudicial',75);
            $table->string('materia',75);
            $table->string('telefono',12)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidad_judicials');
    }
}
