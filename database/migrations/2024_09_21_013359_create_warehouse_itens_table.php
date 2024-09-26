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
        $table->unsignedBigInteger('id')->primary()->autoIncrement();
        $table->string('cod');
        $table->string('nome_peca'); 
        $table->integer('qtde')->nullable();  
        $table->decimal('preco_custo', 8, 2)->nullable();
        $table->decimal('margem', 8, 2)->nullable(); 
        $table->decimal('preco_final', 8, 2)->nullable(); 
        $table->string('modelo')->nullable();
        $table->string('marca')->nullable();
        $table->string('compatibility')->nullable();
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
