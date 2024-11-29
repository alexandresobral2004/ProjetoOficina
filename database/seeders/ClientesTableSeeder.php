<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Cliente_end;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Cliente::factory(5)->create();

    }
}
