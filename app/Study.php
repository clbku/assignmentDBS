<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $table='studies';
    protected $fillable = ['class_id', 'student_id'];
    public $timestamps = true;
}
