<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especialidade_periodacademico extends Model
{
    protected $table='especialidade_periodacademico';
    protected $fillable = [
        'especialidade_id', 'periodacademico_id',
    ];
}
