<?php

namespace Database\Seeders;

use App\Models\Especialidade;
use Illuminate\Database\Seeder;

class EspecialidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Especialidade::create([
            'nome' => 'Cardiologia',
            'descricao' => 'Especialidade médica que se dedica ao estudo, diagnóstico e tratamento das doenças do coração e do sistema circulatório.',
            'area' => 'Medica',
            'status' => true,
        ]);
    }
}
