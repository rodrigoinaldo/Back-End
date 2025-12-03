<?php

namespace Database\Seeders;

use App\Models\localAtendimento;
use Illuminate\Database\Seeder;

class LocalAtendimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        localAtendimento::create([
            'nome' => 'Clínica Central',
            'endereco' => 'Rua Principal, 123',
            'telefone' => '(11) 1234-5678',
            'status' => true
        ]);
    }
}
