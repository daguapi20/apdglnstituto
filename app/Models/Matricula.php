<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    //

    public function asignacione(){
        return $this->belongsTo(Asignacione:: class);
    }

    public function estudiante(){
        return $this->belongsTo(Estudiante:: class);
    }
    public function tipomatricula(){
        return $this->belongsTo(Tipomatricula:: class);
    }

    // N:M
    public function Asignaturas(){
        return $this->belongsToMany(Asignatura:: class);
    }

/* Relacion muchos a travez de 
    public function asignaciones(){
        return $this->hasManyThrough(Asignacione:: class , Paralelo:: class);
    }*/
}
