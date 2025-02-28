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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
             $table->string('name');
             $table->string('email')->unique();
             $table->date('dtNasc')->nullable();
             $table->string('profissao')->nullable();
             $table->string('fone')->nullable();
             $table->string('cpf')->nullable();
             $table->string('cnpj')->nullable();
             $table->string('razaoSocial')->nullable();
             $table->string('foneFixo')->nullable();
             $table->timestamps();
        });

        /*
            'name',
            'email',
            'fone',
            'cpf',
            'cnpj',
            'dtNasc',
            'profissao',
            'razaoSocial',
            'foneFixo',

        */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
