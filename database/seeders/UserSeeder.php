<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Rodrigo Lindo",
            'cpf' => "11122233345",
            'password' => Hash::make('password'),
            'email' => 'lagado75@gmail.com',
            'telefone' => '+5544988276521',
            'status' => true,
            'role' => 'admin'
        ]);
    }
}
