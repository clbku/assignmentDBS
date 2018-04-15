<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table='accounts';
    protected $fillable = ['username', 'state', 'user_id'];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public $timestamps = true;
}
