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
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id();
            $table->string('cpf', 11);
            $table->string('instituicaoFinanceira', 255);
            $table->decimal('valorAPagar', 10, 2);
            $table->decimal('valorSolicitado', 10, 2);
            $table->decimal('taxaJuros', 5, 2);
            $table->integer('qntParcelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ofertas');
    }
};
