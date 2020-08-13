<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'sassignment_id', 'teacher_id', 'subject_id', 'student_id', 'teaching', 'application_experiment', 'application_experiment', 'sum', 'decimal_average', 'main_exam', 'final_average', 'letter_average', 'observation',
    ];
    
    public function sassignment()
    {
        return $this->belongsTo(Sassignment:: class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher:: class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject:: class);
    }
    public function student()
    {
        return $this->belongsTo(Student:: class);
    }
}
