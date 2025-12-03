<?php

namespace Database\Seeders;

use App\Models\tipoConsulta;
use Illuminate\Database\Seeder;

class TipoConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tipoConsulta::create([
            'descricao' => 'Consulta médica geral para avaliação de saúde.',
            'status' => true
        ]);
    }
}
