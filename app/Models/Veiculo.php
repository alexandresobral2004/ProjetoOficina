<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'modelo',
        'marca',
        'placa',
        'ano_fabricacao',
        'cor',
        'chassi',
        'tipo_veiculo',
        'quilometragem',
        'cliente_id'
    ];

    // Definir relacionamento com a entidade Cliente (Carro pertence a um Cliente)
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}
