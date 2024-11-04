<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'endereco',
        'cargo',
        'is_user',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
