<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

 /**
     * Run the migrations.
     */

    public function up(){
    Schema::create('warehouse_itens', function (Blueprint $table) {
        $table->string('sku')->primary(); 
        $table->string('part_name'); 
        $table->integer('quantity')->nullable(); 
        $table->string('quality')->nullable(); 
        $table->decimal('highest_price', 8, 2)->nullable();
        $table->decimal('lowest_price', 8, 2)->nullable(); 
        $table->decimal('media_price', 8, 2)->nullable(); 
        $table->string('model'); 
        $table->string('brand'); 
        $table->string('compatibility'); 
        $table->string('source'); 
        $table->string('category'); 
        $table->string('location');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
public function down(){
    Schema::dropIfExists('warehouse_itens');
}
};
