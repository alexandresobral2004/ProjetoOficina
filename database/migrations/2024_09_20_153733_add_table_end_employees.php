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
         Schema::create('address_employee', function (Blueprint $table) {
         $table->id();
         $table->string('address');
         $table->string('city');
         $table->string('state');
         $table->string('zip_code');
         $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
         $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('address_employee', function (Blueprint $table) {
        // Remover chave estrangeira primeiro
        $table->dropForeign(['employee_id']);

        // Remover colunas
        $table->dropColumn('address');
        $table->dropColumn('city');
        $table->dropColumn('state');
        $table->dropColumn('zip_code');
        $table->dropColumn('employee_id');
        });
    }
};
