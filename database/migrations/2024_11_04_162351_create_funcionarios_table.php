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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('cpf')->unique();
            $table->string('telefone');
            $table->string('cargo'); // Cargo do funcionário (ex: Mecânico, Gerente, Atendente)
            $table->boolean('is_user')->default(false); // Indica se o funcionário é usuário do sistema
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null'); // FK para Users
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
