<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Notifications\Notifiable;

class Cliente extends EloquentModel
{
    use HasFactory, Notifiable;
      protected $table = 'clientes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'fone',
        'cpf',
        'cnpj',
        'dtNasc',
        'profissao',
        'razaoSocial',
        'foneFixo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',

    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',

        ];
    }

    public function endereco()
    {
        return $this->hasOne(Cliente_end::class, 'cliente_id');
    }

    // Relacionamento de Cliente para Veiculo (um-para-muitos)
    public function veiculos()
    {
        return $this->hasMany(Veiculo::class);

    }
}
