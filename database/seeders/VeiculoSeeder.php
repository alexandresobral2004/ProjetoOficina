<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Veiculo;
use App\Models\Cliente;
use Faker\Factory as Faker;

class VeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Certifique-se de que há clientes no banco de dados
        $clientes = Cliente::all();

        if ($clientes->count() === 0) {
            $this->command->info('Nenhum cliente encontrado. Primeiro, execute o seeder de clientes.');
            return;
        }

        // Adicionando 5 veículos fictícios
        foreach (range(1, 5) as $index) {
            Veiculo::create([
                'modelo' => $faker->word(),
                'marca' => $faker->company(),
                'placa' => strtoupper($faker->bothify('???????')),
                'chassi' => strtoupper($faker->bothify('?????????????????')), // Gera um chassi fictício de 17 caracteres
                'tipo_veiculo' => $faker->sentence(2), // Tipo de veículo livre, ex: "Caminhão Pesado"
                'cor' => $faker->safeColorName(),
                'quilometragem' => $faker->numberBetween(0, 200000),
                'ano_fabricacao' => $faker->year(),
                'cliente_id' => $clientes->random()->id, // Associa o veículo a um cliente existente
                'observacoes' => $faker->optional()->sentence()
            ]);
        }

        $this->command->info('5 veículos adicionados com sucesso!');
    }
}
