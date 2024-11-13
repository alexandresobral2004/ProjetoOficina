<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Notifications\Notifiable;
use App\Models\Cliente;
use App\Models\Veiculo;
use App\Models\Servico;
use App\Models\Warehouse_itens;


class ServicesOrder_Campus extends EloquentModel{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $table = "services_order"; // testar
    protected $fillable = [
            'data',
            'id_cliente',
            'id_veiculo',
            'id_servico',
            'id_almoxarifado',
    ];

    // Relacionamento com Cliente
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    // Relacionamento com Veículo
    public function veiculo(){
        return $this->belongsTo(Veiculo::class);
    }

    // Relacionamento com Serviço
    public function servico(){
        return $this->belongsTo(Servico::class);
    }

    // Relacionamento com Almoxarifado
    public function almoxarifado(){
        return $this->belongsTo(Warehouse_itens::class);
    }
    protected $hidden = [
        // Defina atributos que não devem ser exibidos em JSON, se necessário
    ];
    
    protected $casts = [
        'data' => 'date', // converte 'data' para o tipo date ao recuperar do banco de dados
    ];
    
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
