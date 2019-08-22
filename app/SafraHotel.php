<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SafraHotel extends Model
{
	
protected $table = "hotels";
    protected $fillable=[
        'active',
        'expedia_id',
        'city_id'
    ];
    
}
