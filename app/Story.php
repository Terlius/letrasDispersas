<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'user_id', 'title', 'categoria', 'body', 'status', 'imagen'
    ];
}
