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
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');

            // Dados básicos
            $table->string('name');
            $table->string('email');
            $table->string('phone_celular')->nullable();

            // Documentos
            $table->string('cpf_cnpj');
            $table->string('representante')->nullable();
            $table->date('datadenascimento')->nullable();
            $table->string('identidade')->nullable();
            $table->string('orgaoexpedidor')->nullable();
            $table->date('datadeexpedicao')->nullable();
            $table->string('genero')->nullable();
            $table->string('estadocivil')->nullable();

            // Endereço
            $table->string('cep')->nullable();
            $table->string('endereco')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();

            // Produto escolhido
            $table->string('escolha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprestimos');
    }
};
