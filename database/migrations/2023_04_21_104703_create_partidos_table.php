<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->integer('goles_local')->default(0);
            $table->integer('goles_visitante')->default(0);
            $table->foreignId('equipo_local_id')->references('id')->on('equipos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('equipo_visitante_id')->references('id')->on('equipos')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('fecha_partido');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
