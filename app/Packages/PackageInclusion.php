<?php

namespace App\Packages;

use Illuminate\Database\Eloquent\Model;

class PackageInclusion extends Model
{
    protected $fillable=[
        'general_packages_inclusion_id',
        'package_id'
    ];


    public function general_packages_inclusion(){
        return $this->belongsTo(GeneralPackagesInclusion::class,'general_packages_inclusion_id');
    }

    public function package(){
        return $this->belongsTo(Package::class,'package_id');
    }
}
