<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('users')->insert([
         [
         'tipo_user' => 'admin',
         'name' => 'Admin',
         'email' => 'admin@admin.com',
         'password' => Hash::make('123456'),
         'confirm_password' => Hash::make('123456'),
         'fone' => '555-1234',
         'cnpj' => '12.345.678/0001-99',
         'cpf' => null,
         'status' => 1,
         'role' => 'admin',
         'created_at' => now(),
         'updated_at' => now(),
         ],
         [
         'tipo_user' => 'client',
         'name' => 'Client User',
         'email' => 'cliente@cliente.com',
         'password' => Hash::make('123456'),
         'confirm_password' => Hash::make('123456'),
         'fone' => '555-5678',
         'cnpj' => null,
         'cpf' => '123.456.789-00',
         'status' => 1,
         'role' => 'user',
         'created_at' => now(),
         'updated_at' => now(),
         ]
         ]);
    }
}
