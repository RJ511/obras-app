<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('producao_semanal', function (Blueprint $table) {
            $table->id('producaoID');
            $table->unsignedBigInteger('obraID');
            $table->integer('producaoSemana')->checkBetween(1, 52);
            $table->decimal('horasTrabalhadas', 6, 1)->unsigned();
            $table->timestamps();

            $table->foreign('obraID')->references('obraID')->on('obras');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producao_semanal');
    }
};
