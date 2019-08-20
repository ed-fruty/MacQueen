<?php

namespace App\Packages;

use Illuminate\Database\Eloquent\Model;

class PackageType extends Model
{
    protected $fillable=[
        'general_package_type_id',
        'package_id'
    ];

    public function general_package_type(){
        return $this->belongsTo(GeneralPackagesType::class,'general_package_type_id');
    }
    public function package(){
        return $this->belongsTo(Package::class,'package_id');
    }
}
