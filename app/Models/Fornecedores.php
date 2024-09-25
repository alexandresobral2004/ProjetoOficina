<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'cnpj',
        'email',
        'celular',
        'nome_vendedor',
        'fone',
        'nomeFantasia',
        'razaoSocial',
        'cep',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
    ];

    public function warehouseItems()
    {
    return $this->belongsToMany(Warehouse_itens::class, 'fornecedor_warehouse_item', 'fornecedor_id',
    'warehouse_item_id');
    }

   
}
