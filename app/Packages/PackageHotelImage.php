<?php

namespace App\Packages;

use Illuminate\Database\Eloquent\Model;

class PackageHotelImage extends Model
{
    protected $fillable=[
        'package_hotel_id',
        'image',
    ];

    public function package_hotel(){
        return $this->belongsTo(PackageHotel::class,'package_hotel_id');
    }
}
