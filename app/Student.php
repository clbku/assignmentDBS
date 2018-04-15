<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='students';
    protected $fillable = ['name', 'dob', 'address', 'hometown', 'sex', 'phone', 'school', 'class', 'avatar'];
    public $timestamps = true;
}
