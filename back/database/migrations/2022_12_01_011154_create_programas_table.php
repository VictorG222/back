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
            $table->string('clave')->unique();
            $table->unsignedBigInteger('areas_id')->nullable();
            $table->unsignedBigInteger('estados_globales')->nullable();
            $table->timestamps();

            $table -> foreign('areas_id') -> on('areas') -> references('id')->onDelete('cascade');
            $table -> foreign('estados_globales') -> on('estado_globals') -> references('id')->onDelete('cascade');

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
