<?php

namespace Database\Seeders;

use App\Models\Servico;
use Illuminate\Database\Seeder;

class ServicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Servico::factory(10)->create();
    }
}
