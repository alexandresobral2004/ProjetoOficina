<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->id(); // ID do Serviço (chave primária)
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade'); // FK para Cliente
            $table->foreignId('veiculo_id')->constrained('veiculos')->onDelete('cascade'); // FK para Veículo
            $table->date('data_inicio'); // Data de início do serviço
            $table->date('data_termino')->nullable(); // Data de término (opcional)
            $table->enum('status', ['Pendente', 'Em andamento', 'Concluído']); // Status do serviço
            $table->text('observacoes')->nullable(); // Observações sobre o serviço
            $table->decimal('valor_total', 10, 2)->nullable(); // Valor total do serviço
            $table->timestamps(); // Created_at e Updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};
