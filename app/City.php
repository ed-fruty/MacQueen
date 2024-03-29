<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable=[
        'name',
        'country_id',
        'city_code'
    ];
    public function  country(){
        return $this->belongsTo(Country::class);
    }
}
