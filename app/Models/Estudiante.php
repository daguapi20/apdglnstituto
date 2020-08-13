<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = [
        'tipodocumento_id','dni', 'nombre', 'apellido', 'foto' , 'estadocivile_id', 'fecha_nacimiento', 'nacionalidad', 
        'ocupacione_id', 'discapacidad', 'tipo_discapacidad', 'porcentaje', 'provincia_id', 'cantone_id', 'etnia_id', 'email', 'tiposangre_id', 'miembro_hogar',
        'ingreso_ec', 'direccion_provincia_id', 'direccion_cantone_id', 'calle', 'telefono_fijo', 'telefono_movil', 'telefono_parentesco',
        'parentesco', 'institucion_origen', 'titulo_bachillerato', 'nombre_padre', 'padre_ocupacione_id', 'instruccione_id',
        'nombre_madre', 'madre_ocupacione_id', 'madre_instruccione_id'
    ];

    public function tipodocumento(){
        return $this->belongsTo(Tipodocumento:: class);
    }
    public function estadocivile(){
        return $this->belongsTo(Estadocivile:: class);
    }

    public function etnia(){
        return $this->belongsTo(Etnia:: class);
    }

    public function ocupacione(){
        return $this->belongsTo(Ocupacione:: class);
    }
    //padre ocupaciones
    public function ocupacione2(){
        return $this->belongsTo(Ocupacione:: class, 'padre_ocupacione_id');
    }
    public function ocupacione3(){
        return $this->belongsTo(Ocupacione:: class, 'madre_ocupacione_id');
    }

    public function provincia(){
        return $this->belongsTo(Provincia:: class);
    }
    public function cantone(){
        return $this->belongsTo(Cantone:: class);
    }

    public function provincia2(){
        return $this->belongsTo(Provincia:: class,'direccion_provincia_id');
    }

    public function cantone2(){
        return $this->belongsTo(Cantone:: class,'direccion_cantone_id');
    }
    public function tiposangre(){
        return $this->belongsTo(Tiposangre:: class);
    }
    public function instruccione(){
        return $this->belongsTo(Instruccione:: class);
    }
    public function instruccione2(){
        return $this->belongsTo(Instruccione:: class, 'madre_instruccione_id');
    }
}
