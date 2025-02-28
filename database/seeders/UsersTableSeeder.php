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
                // 'tipo_user' => 'admin',
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                // 'confirme_password' => Hash::make('123456'),
                'fone' => '555-1234',
                'status' => 1,
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // 'tipo_user' => 'client',
                'name' => 'Client User',
                'email' => 'cliente@cliente.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'fone' => '555-5678',
                'status' => 1,
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
