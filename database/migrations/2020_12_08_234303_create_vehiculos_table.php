<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 10);
            $table->string('color', 45);
            $table->string('marca', 45);
            $table->string('tipo', 45);
            $table->bigInteger('conductor_id')->unsigned();
            $table->bigInteger('propietario_id')->unsigned();

            /*
             *  FOREIGN
             */

            $table->foreign('conductor_id')->references('id')->on('conductores');
            $table->foreign('propietario_id')->references('id')->on('propietarios');

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
        Schema::dropIfExists('vehiculos');
    }
}
