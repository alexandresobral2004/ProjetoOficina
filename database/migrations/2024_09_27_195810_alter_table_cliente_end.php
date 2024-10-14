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
        Schema::table('cliente_end', function (Blueprint $table) {
        // Primeiro, solte a chave estrangeira se ela existir
        // $table->dropForeign(['employee_id']);

        // Renomeie a coluna
        $table->renameColumn('employee_id', 'cliente_id');

        // Adicione a chave estrangeira de volta para a nova coluna
        $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
