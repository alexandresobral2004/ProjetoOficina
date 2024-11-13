<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /*** Run the migrations.*/
    public function up(){
        Schema::create('services_order', function (Blueprint $table) {
            $table->id(); // Cria um campo auto-incremento como chave primária
            $table->date('data');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_veiculo');
            $table->unsignedBigInteger('id_servico');
            $table->unsignedBigInteger('id_almoxarifado');
            $table->timestamps();
    
            // Definindo as chaves estrangeiras
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_veiculo')->references('id')->on('veiculos');
            $table->foreign('id_servico')->references('id')->on('servicos');
            $table->foreign('id_almoxarifado')->references('id')->on('warehouse_itens');
        });
    }
    

    /*** Reverse the migrations.*/
    public function down(){
        Schema::dropIfExists('services_order');
    }
};