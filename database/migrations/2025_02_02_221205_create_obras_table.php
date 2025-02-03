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
        Schema::create('Obra', function (Blueprint $table) {
            $table->id('obraID');
            $table->unsignedBigInteger('obraCliente');
            $table->string('obraDesignacao', 255);
            $table->integer('obraSemana')->checkBetween(1, 52);
            $table->boolean('obraConcluida')->default(false);
            $table->decimal('obraHoras', 5, 1)->unsigned();
            $table->decimal('obraOrcamento', 10, 3)->unsigned();
            $table->unsignedBigInteger('obraTipo');
            $table->timestamps();
    
            $table->foreign('obraCliente')->references('clienteID')->on('Cliente');
            $table->foreign('obraTipo')->references('tipoID')->on('Tipo');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Obra');
    }
};
