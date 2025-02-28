<?php

namespace Database\Factories;

use App\Models\Funcionario;
use App\Models\Funcionario_end;
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
            $funcionario->Funcionario_end()->save(Funcionario_end::make([
                'number' => $this->faker->numberBetween(1, 1000),
                'street' => $this->faker->streetName,
                'city' => $this->faker->city,
                'neighborhood' => $this->faker->city,   
                'state' => $this->faker->stateAbbr,
                'zip_code' => $this->faker->postcode,
            ]));
        });
    }
}
