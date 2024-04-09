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
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            //tabela usada para mostrar qual é a temporada
            $table->unsignedTinyInteger('number');
            //sintaxe mais nova
            //equiva  a:   linha 24        : linha 26       quando deleta a serie, também deleta suas temporadas
            $table->foreignId('series_id')->constrained()->onDelete('cascade');

            //sintaxe antiga paara gerar relacionamento
            //coluna de id
            //$table->unsignedBigInteger('series_id');
            //tabela usada para gerar relacionamento
           // $table->foreign('series_id')->references('id')->on('series');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seasons');
    }
};
