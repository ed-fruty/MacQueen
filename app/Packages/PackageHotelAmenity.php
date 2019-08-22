<?php

namespace App\Packages;

use Illuminate\Database\Eloquent\Model;

class PackageHotelAmenity extends Model
{
    protected $fillable=[
        'general_package_hotel_amenity_id',
        'package_hotel_id'
    ];

    public function general_package_hotel_amenity(){
        return $this->belongsTo(GeneralPackagesHotelAmenity::class,'general_package_hotel_amenity_id');
    }

    public function package_hotel(){
        return $this->belongsTo(PackageHotel::class,'package_hotel_id');
    }
}
