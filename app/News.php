<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='news';
    protected $fillable = ['datetime', 'author_id', 'image', 'title', 'description', 'content', 'comment_id'];
    public $timestamps = true;
}
