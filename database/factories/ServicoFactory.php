<?php

namespace Database\Factories;

use App\Models\Servico;
use App\Models\Veiculo;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicoFactory extends Factory
{
    protected $model = Servico::class;

    public function definition()
    {
        $dataInicio = $this->faker->dateTimeBetween('-1 year', 'now');
        $dataTermino = (clone $dataInicio)->modify('+'.rand(1, 30).' days');

        return [
            'cliente_id' => Cliente::factory(),
            'veiculo_id' => Veiculo::factory(),
            'data_inicio' => $dataInicio,
            'data_termino' => $dataTermino,
            'status' => $this->faker->randomElement(['Pendente', 'Em andamento', 'Concluido']),
            'descricao' => $this->faker->sentence,
            'valor_total' => $this->faker->randomFloat(2, 50, 5000),
        ];
    }
}
