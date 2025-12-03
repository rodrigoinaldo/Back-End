<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class AgendamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agendamentos')->insert([
            'user_id' => 1,
            'dataHora' => new DateTime('now'),
            'status' => true,
            'medico_id' => 1,
            'local_atendimento_id' => 1,
            'tipo_consulta_id' => 1
        ]);
    }
}
