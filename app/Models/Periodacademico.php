<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periodacademico extends Model
{
    protected $fillable = [
        'periodo', 'condicion', 'fecha_inicio', 'fecha_final'
    ];

    
    public function especialidades(){
        return $this->belongsToMany(Especialidade:: class);
    }
}
