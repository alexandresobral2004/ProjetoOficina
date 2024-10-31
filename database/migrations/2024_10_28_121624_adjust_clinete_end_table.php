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
            $table->string('neighborhood');
            $table->string('number');
            if (Schema::hasColumn('cliente_end', 'address')) {
                $table->renameColumn('address', 'street');
            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cliente_end', function (Blueprint $table) {
            $table->dropColumn('neighborhood');
            $table->dropColumn('number');
            if (Schema::hasColumn('cliente_end', 'street')) {
                $table->renameColumn('street', 'address');
            }

        });
    }
};
