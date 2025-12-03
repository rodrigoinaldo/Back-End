<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    /** @use HasFactory<\Database\Factories\AgendaFactory> */
    use HasFactory;

    protected $fillable = [
        'descricao',
        'medico_id',
        'local_atendimento_id',
        'tipo_consulta_id',
        'horario_id',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];



    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }

    public function local_atendimento()
    {
        return $this->belongsTo(localAtendimento::class);
    }

    public function tipo_consulta()
    {
        return $this->belongsTo(tipoConsulta::class);
    }

    public function horario()
    {
        return $this->belongsTo(Horarios::class);
    }
}
