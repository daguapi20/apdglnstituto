<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $fillable = [
        'dni','nombre', 'apellido', 'email', 'titulo_academico', 'fecha_ingreso', 'telefono_fijo', 
        'telefono_movil', 'provincia_id', 'cantone_id', 'calle', 'estadocente_id', 'tipocontrato_id'
    ];

    
    public function provincia()
    {
        return $this->belongsTo(Provincia:: class);
    }
    public function cantone()
    {
        return $this->belongsTo(Cantone:: class);
    }
    public function estadocente()
    {
        return $this->belongsTo(Estadocente:: class);
    }
    public function tipocontrato()
    {
        return $this->belongsTo(Tipocontrato:: class);
    }
}
