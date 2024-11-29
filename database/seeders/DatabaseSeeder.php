<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Servico;
use App\Models\Veiculo;
use GuzzleHttp\Client;
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

        $this->call(
            [
                UsersTableSeeder::class,
                ClientesTableSeeder::class,
                FuncionariosTableSeeder::class,
                ServicosTableSeeder::class,
                VeiculosTableSeeder::class
            ]);
    }
}
