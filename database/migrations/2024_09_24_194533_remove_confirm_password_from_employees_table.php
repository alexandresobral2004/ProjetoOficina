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
        Schema::table('employees', function (Blueprint $table) {
        // Remover a coluna confirm_password
        $table->dropColumn('confirm_password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('employees', function (Blueprint $table) {
         // Adicionar novamente a coluna confirm_password
         $table->string('confirm_password')->nullable();
         });
    }
};
