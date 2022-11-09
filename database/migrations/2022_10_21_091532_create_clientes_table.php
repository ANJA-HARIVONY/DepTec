<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('fechaSolicitud', 20);
            $table->string('nombre', 120);
            $table->string('codigoIsp', 20);
            $table->string('barrio', 120);
            $table->string('ubicacion', 255);
            $table->string('contacto', 120);
            $table->string('numTelefono', 120);
            $table->double('velocidad', 8, 2);
            $table->string('typoConexion', 20);
            $table->string('referencia', 25);
            $table->string('prioridad', 25);
            $table->string('observaciones', 255);
            $table->string('fechaInstalacion', 20);
            $table->string('antena', 20);
            $table->string('router', 20);
            $table->string('instalador', 20);
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
        Schema::dropIfExists('clientes');
    }
};
