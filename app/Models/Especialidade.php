<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    protected $fillable = [
        'ofertacademica_id', 'nombre',
    ];


    public function ofertacademica(){
        return $this->belongsTo(Ofertacademica:: class);
    }

    //N:M
   // public function periodacademicos() {
    //    return $this->belongsToMany(Periodacademico::class);
   // }
}
