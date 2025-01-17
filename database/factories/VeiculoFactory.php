<?php

namespace Database\Factories;

use App\Models\Veiculo;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class VeiculoFactory extends Factory
{
    protected $model = Veiculo::class;

    public function definition()
    {
        return [
            'placa' => $this->faker->unique()->bothify('???#?##'),
            'marca' => $this->faker->randomElement(['Chevrolet', 'Fiat', 'Ford', 'Volkswagen', 'Renault', 'Toyota', 'Hyundai', 'Jeep', 'Honda', 'Nissan']),

            'modelo' => $this->faker->randomElement(['Onix', 'Palio', 'Ka', 'Gol', 'Kwid', 'Corolla', 'HB20', 'Compass', 'Civic', 'Kicks']),

            'ano_fabricacao' => $this->faker->numberBetween(2000, 2022),
            'cor' => $this->faker->randomElement(['Branco', 'Preto', 'Prata', 'Vermelho', 'Azul',       'Verde', 'Amarelo', 'Rosa', 'Roxo', 'Laranja']),

            'chassi' => $this->faker->unique()->numerify('#################'),
            'tipo_veiculo' => $this->faker->randomElement(['Carro', 'Moto', 'Caminhão', 'Van', 'Ônibus']),

            'quilometragem' => $this->faker->numberBetween(0, 200000),
            'cliente_id' => Cliente::factory(),
        ];
    }
}
