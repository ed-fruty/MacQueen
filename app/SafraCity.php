<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SafraCity extends Model
{
	
protected $table = "cities";

    protected $fillable=[
        'name',
        'country_id',
        'city_code',
        'expedia_id',
        'lat',
        'long',
        'region_id',
    ];
   
}
