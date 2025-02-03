<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ObraFuncionarioDia', function (Blueprint $table) {
            $table->unsignedBigInteger('obraID');
            $table->unsignedBigInteger('funcionarioID');
            $table->decimal('horasTrabalhadas', 2, 1)->unsigned();
            $table->date('dia');
            $table->timestamps();

            $table->primary(['obraID', 'funcionarioID', 'dia']);
            $table->foreign('obraID')->references('obraID')->on('Obra');
            $table->foreign('funcionarioID')->references('funcionarioID')->on('Funcionario');
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ObraFuncionarioDia');
    }
};
