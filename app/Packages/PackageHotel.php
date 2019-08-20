<?php

namespace App\Packages;

use App\City;
use App\Country;
use Illuminate\Database\Eloquent\Model;

class PackageHotel extends Model
{
    protected $fillable=[
      'name',
      'default_image',
      'country_id',
      'city_id',
      'address',
      'description',
      'long',
      'lat',
      'rate',
      'package_id',
        'general_package_type_id'
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }
    public function package(){
        return $this->belongsTo(Package::class,'package_id');
    }
    public function general_package_type(){
        return $this->belongsTo(GeneralPackagesType::class,'general_package_type_id');
    }
    public function package_hotel_images(){
        return $this->hasMany(PackageHotelImage::class,'package_hotel_id');
    }
    public function package_hotel_amenities(){
        return $this->hasMany(PackageHotelAmenity::class,'package_hotel_id');
    }
}
