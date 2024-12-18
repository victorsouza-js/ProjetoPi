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
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('preco');
            $table->string('qtd_estoque');
            $table->decimal('preco_promocional', 10, 4)->nullable(); 
            $table->decimal('peso', 8, 4)->nullable();
            $table->timestamps();
        });

        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor_total');
            $table->dateTime('data');
            $table->integer('cliente_id');
            $table->integer('vendedor_id');
            $table->integer('pagamento_id');
        });


        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('valor_total');
            $table->string('produto_comprado');
            $table->string('forma_pagamento');
        });

        Schema::create('pagamento', function (Blueprint $table) {
            $table->id();
            $table->string('forma_pagamento');
        });


        Schema::create('categoria', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('powerupsuplementos');
    }
};
