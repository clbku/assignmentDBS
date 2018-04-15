<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table='classes';
    protected $fillable = ['study_address', 'level', 'begin_at', 'student_num', 'shift', 'tutor_id', 'subject_id', 'state'];
    public $timestamps = true;
}
