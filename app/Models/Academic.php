<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Academic extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'academic_period', 'condition', 'start_date', 'end_date'
    ];

    
    public function period(){
        return $this->belongsTo(Period:: class);
    }

}
