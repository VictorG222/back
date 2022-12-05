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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('clave');
            $table->unsignedBigInteger('programa_id');
            $table->unsignedBigInteger('estados_globales');
            $table->timestamps();

            $table -> foreign('programa_id') -> on('programas') -> references('id');
            $table -> foreign('estados_globales') -> on('estado_globals') -> references('id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
};
