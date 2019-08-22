<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable=[
        'facebook',
        'twitter',
        'instagram',
        'mobile',
        'email',
        'address'
    ];
}
