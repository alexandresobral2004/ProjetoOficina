<?php

namespace App\Models;

use App\Enums\EmployeeRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sobrenome',
        'cpf',
        'data_nascimento',
        'telefone',
        'email',
        'cargo',
        'is_user',
    ];

    protected $casts = [
        'cargo' => EmployeeRole::class,
    ];

     /**
     * Relacionamento polimórfico com endereço
     */
    public function endereco()
    {
        return $this->morphOne(Endereco::class, 'enderecavel');
    }
}
