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
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('clave');
            $table->timestamps();
            $table->unsignedBigInteger('areas_id');
            $table->unsignedBigInteger('estados_globales');

            $table -> foreign('areas_id') -> on('areas') -> references('id');
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
        Schema::dropIfExists('programas');
    }
};
