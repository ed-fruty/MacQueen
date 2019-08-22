<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable=[
        'currency_name',
        'currency_name_en',
        'iso4217_alpha3',
        'iso4217_num3',
    ];
}
