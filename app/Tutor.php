<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table='tutors';
    protected $fillable = ['specialize', 'achievements', 'user_id', 'point'];
    public $timestamps = true;
}
