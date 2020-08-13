<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignacione extends Model
{
    protected $fillable = [
        'periodacademico_id', 'especialidade_id', 'periodo_id', 'seccione_id', 'paralelo_id'
    ];

   
   public function periodacademicos(){
        return $this->belongsToMany(Periodacademico:: class);
    }

    public function especialidades(){
        return $this->belongsToMany(Especialidade:: class);
    }

    //N:M
    public function periodos(){
        return $this->belongsToMany(Periodo:: class);
    }

    public function secciones(){
        return $this->belongsToMany(Seccione:: class);
    }
    
    public function paralelos(){
        return $this->belongsToMany(Paralelo:: class);
    }
}
