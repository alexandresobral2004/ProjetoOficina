<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Cliente_end;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'dtNasc' => $this->faker->date,
            'profissao' => $this->faker->jobTitle,
            'fone' => $this->faker->phoneNumber,
            'cpf' => $this->faker->cpf,
            'cnpj' => $this->faker->cnpj,
            'razaoSocial' => $this->faker->company,
            'foneFixo' => $this->faker->phoneNumber,

            
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Cliente $cliente) {
            $cliente->endereco()->save(Cliente_end::make(
                [
                    'number' => $this->faker->numberBetween(1, 1000),
                    'street' => $this->faker->streetName,
                    'neighborhood' => $this->faker->city,
                    'city' => $this->faker->city,
                    'state' => $this->faker->stateAbbr,
                    'zip_code' => $this->faker->postcode,
                ]
            ));
        });
    }
}
