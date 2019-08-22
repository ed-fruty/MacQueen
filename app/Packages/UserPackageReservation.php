<?php

namespace App\Packages;

use App\Currency;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UserPackageReservation extends Model
{
    protected $fillable=[
        'user_id',
        'package_id',
        'package_hotel_id',
        'total_price',
        'package_status_id',
        'adults_no',
        'children_no',
        'currency_id'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function package(){
        return $this->belongsTo(Package::class,'package_id');
    }
    public function package_hotel(){
        return $this->belongsTo(PackageHotel::class,'package_hotel_id');
    }
    public function currency(){
        return $this->belongsTo(Currency::class,'currency_id');
    }
    public function package_status(){
        return $this->belongsTo(PackageStatus::class,'package_status_id');
    }
}
