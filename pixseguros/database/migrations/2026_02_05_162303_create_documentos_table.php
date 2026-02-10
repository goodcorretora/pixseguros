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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // Dados básicos
            $table->string('name');
            $table->string('email');
            $table->string('phone_celular')->nullable();

            $table->string('cpf_cnpj')->nullable();
            $table->string('representante')->nullable();
            $table->date('datadenascimento')->nullable();
            $table->string('identidade')->nullable();
            $table->string('orgaoexpedidor')->nullable();
            $table->date('datadeexpedicao')->nullable();
            $table->string('genero')->nullable();
            $table->string('estadocivil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
