<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SafraCountry extends Model
{
	
protected $table = "safra_countries"
    protected $fillable=[
        'name',
        'code',
    ];
    
}
