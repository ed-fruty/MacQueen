<?php

namespace App\Packages;

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
        'package_currency_id'
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
    public function package_currency(){
        return $this->belongsTo(PackageCurrency::class,'package_currency_id');
    }
    public function package_status(){
        return $this->belongsTo(PackageStatus::class,'package_status_id');
    }
}
