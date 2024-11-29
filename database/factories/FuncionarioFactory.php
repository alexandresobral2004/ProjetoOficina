<?php

namespace Database\Factories;

use App\Models\Funcionario;
use App\Models\Endereco;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuncionarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Funcionario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'sobrenome' => $this->faker->lastName,
            'cpf' => $this->faker->cpf,
            'data_nascimento' => $this->faker->date,
            'telefone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'cargo' => $this->faker->randomElement(['Gerente', 'Atendente', 'Mecânico', 'Auxiliar']),
            'e_usuario' => $this->faker->boolean,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Funcionario $funcionario) {
            $funcionario->endereco()->save(Endereco::make([
                'numero' => $this->faker->numberBetween(1, 1000),
                'rua' => $this->faker->streetName,
                'bairro' => $this->faker->city,
                'cidade' => $this->faker->city,
                'estado' => $this->faker->stateAbbr,
                'cep' => $this->faker->postcode,
            ]));
        });
    }
}
