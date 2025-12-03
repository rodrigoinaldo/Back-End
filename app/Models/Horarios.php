<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    /** @use HasFactory<\Database\Factories\HorariosFactory> */
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
    ];

        protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
