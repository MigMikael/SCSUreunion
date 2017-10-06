<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumnis';
    protected $fillable = [
        'code',
        'sc',
        'first_name',
        'last_name',
        'major',
        'address',
        'email',
        'tel',
        'jobs',
        'position',
        'food',
        'follower',
    ];

    public $timestamps = True;
}
