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
        Schema::create('motos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('placa')->nullable();
            $table->integer('ano')->nullable();
            $table->integer('ano_fabricacao')->nullable();
            $table->boolean('zero_km')->default(false);
            $table->string('modelo')->nullable();
            $table->string('localizacao')->nullable();
            $table->string('eCondutorPrincipal')->nullable();
            $table->string('cpf_condutor')->nullable();
            $table->string('cpf_cnpj');
            $table->string('name');
            $table->string('email');
            $table->string('phone_celular');
            $table->string('interesse_comunicacoes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motos');
    }
};
