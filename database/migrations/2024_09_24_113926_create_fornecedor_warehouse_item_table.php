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
       Schema::create('fornecedor_warehouse_item', function (Blueprint $table) {
       $table->charset = 'utf8mb4';
       $table->collation = 'utf8mb4_unicode_ci';

       $table->unsignedBigInteger('fornecedor_id');
       $table->foreign('fornecedor_id')->references('id')->on('fornecedores')->onDelete('cascade');

       $table->unsignedBigInteger('warehouse_item_id');
       $table->foreign('warehouse_item_id')->references('id')->on('warehouse_itens')->onDelete('cascade');

       $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fornecedor_warehouse_item');
    }
};
