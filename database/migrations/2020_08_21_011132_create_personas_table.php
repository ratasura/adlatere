<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipoDocumento', 10)->nullable($value =  false);
            $table->string('valorDocumento', 13)->nullable($value =  false)->unique();
            $table->string('nombres', 50)->nullable($value =  false);
            $table->string('email')->unique()->nullable($value =  false);
            $table->string('direccion', 100)->nullable($value =  false);
            $table->string('telefonoDomicilio', 10)->nullable($value =  true);
            $table->string('telefonoCelular', 9)->nullable($value =  false);
            $table->string('tipoPersona', 15)->nullable($value =  false);
            $table->string('nombreComercial',50)->nullable($value =  false);
            $table->string('representanteLegal',50)->nullable($value =  false);
            $table->boolean('estadoPersona')->nullable($value =  false);
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
        Schema::dropIfExists('personas');
    }
}
