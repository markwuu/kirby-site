<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poem extends Model
{
    protected $fillable = [
        'title', 'body',
    ];
}
