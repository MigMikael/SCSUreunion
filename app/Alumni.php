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
        'is_gratitude',
        'is_party',
        'is_attend',
        'attach_payment'
    ];

    public $timestamps = True;
}
