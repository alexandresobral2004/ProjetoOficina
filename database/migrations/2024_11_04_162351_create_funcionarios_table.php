<?php

use App\Enums\EmployeeRole;
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
            $table->date('data_nascimento');
            $table->string('cpf')->unique();
            $table->string('email')->unique();
            $table->string('telefone');
            $table->enum('cargo', array_column(EmployeeRole::cases(), 'value'));
            $table->boolean('e_usuario')->default(false); // Indica se o funcionário é usuário do sistema
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
