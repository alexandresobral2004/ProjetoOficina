<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Warehouse_itens extends EloquentModel{
    
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
            'cod',
            'marca',
            'qtde',
            'preco_custo',
            'margem',
            'preco_final',
            'nome_peca',
            'modelo',
            'compatibility',
           
    ];
    
   public function fornecedores()
   {
   return $this->belongsToMany(Fornecedores::class, 'fornecedor_warehouse_item', 'warehouse_item_id', 'fornecedor_id');
   }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */     
}
