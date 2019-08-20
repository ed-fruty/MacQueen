<?php

namespace App\Packages;
use Illuminate\Database\Eloquent\Model;

class PackageHotelRoom extends Model
{
    protected $fillable=[
        'name',
        'package_hotel_id',
        'max_adult_no',
        'max_children_no',
        'adult_price',
        'children_price'
    ];

    public function package_hotel(){
        return $this->belongsTo(PackageHotel::class,'package_hotel_id');
    }

}
