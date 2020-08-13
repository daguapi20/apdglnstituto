<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $fillable = [
        'especialidade_id', 'periodo_id', 'cod_asignatura', 'nombre', 'hora',
    ];

    public function especialidade()
    {
        return $this->belongsTo(Especialidade:: class);
    }
    
   
    public function periodo()
    {
        return $this->belongsTo(Periodo:: class);
    }
}
