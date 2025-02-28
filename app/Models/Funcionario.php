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
        'e_usuario',
    ];

    protected $casts = [
        'cargo' => EmployeeRole::class,
    ];

     /**
     * Relacionamento polimórfico com endereço
     */
    public function Funcionario_end()
    {
    return $this->hasMany(Funcionario_end::class, 'func_id');
    }

}
