<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Cliente_end;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(UsersTableSeeder::class);

        $cliente = Cliente::create([
            'name' => 'Teste 01',
            'email' => 'teste1@teste.com',
            'password' => bcrypt('senha123'),
            'fone' => '(88) 90000-0001',
            'cpf' => '000.000.000-01',
            'cnpj' => '00.000.000/0000-01',
            'dtNasc' => '1990-01-01',
            'profissao' => 'teste',
            'razaoSocial' => 'teste',
            'foneFixo' => '(85) 9000-0001',
        ]);

        // Adiciona um endereço para o cliente
        Cliente_end::create([
            'address' => 'Rua Teste, 123',
            'city' => 'Teste City',
            'state' => 'TS',
            'zip_code' => '00000-000',
            'cliente_id' => $cliente->id,
        ]);
    }
}
