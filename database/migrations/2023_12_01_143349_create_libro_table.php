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
        Schema::create('libro', function (Blueprint $table) {
            $table->string('ISBN', 5);
            $table->char('nombre', 100);
            $table->text('descripcion');
            $table->char('generoLiterario', 100);
            $table->float('precioUnitario');
            $table->text('observacion');
            $table->char('foto', 100);
            $table->char('area', 5);
            $table->primary('ISBN');
            $table->foreign('area')->references('idArea')->on('areaconocimiento');
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
        Schema::dropIfExists('libro');
    }
};
