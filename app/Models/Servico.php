<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    // Definir os campos que podem ser preenchidos via formulário
    protected $fillable = [
        'cliente_id',
        'veiculo_id',
        'data_inicio',
        'data_termino',
        'status',
        'observacoes',
        'valor_total',
    ];

    // Relacionamento com Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relacionamento com Veículo
    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }
}
