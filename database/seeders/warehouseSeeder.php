<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class warehouseSeeder extends Seeder
{
    public function run()
    {
        DB::table('warehouse_itens')->insert([
            [
                'cod' => '11111',
                'nome_peca' => 'aaaaaa',
                'qtde' => 1,
                'preco_custo' => 1.0,
                'margem' => 0.0,
                'preco_final' => 1.0,
                'modelo' => 'aaa',
                'marca' => 'aaa',
                'compatibility' => 'aaa, bbb, ccc, ddd',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
