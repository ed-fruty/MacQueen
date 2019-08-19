<?php

namespace App\Packages;

use App\City;
use App\Country;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable=[
        'image',
        'name',
        'description',
        'country_id',
        'city_id',
        'days',
        'nights',
        'package_category_id'
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function packagecategory(){
        return $this->belongsTo(PackageCategory::class);
    }


}
