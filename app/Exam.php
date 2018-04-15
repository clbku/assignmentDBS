<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table='exams';
    protected $fillable = ['class_id', 'student_id', 'exam_code', 'date'];
    public $timestamps = true;
}
