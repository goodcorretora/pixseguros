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
        Schema::create('ocupacionals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null'); 
            $table->string('name');
            $table->string('representante')->nullable();
            $table->string('email');
            $table->string('phone_celular');
            $table->string('phone_fixo')->nullable();
            $table->string('cnpj'); 
            $table->string('cep')->nullable();
            $table->string('endereco')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('funcionarios')->nullable(); 
            $table->boolean('ocupacional')->default(false);
            $table->boolean('seguranca')->default(false);
            $table->boolean('ergonomico')->default(false);
            $table->boolean('ambulatorio')->default(false);
            $table->boolean('pericia')->default(false);
            $table->boolean('promocao')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocupacionals');
    }
};
