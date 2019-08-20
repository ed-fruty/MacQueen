<?php

namespace App\Packages;

use Illuminate\Database\Eloquent\Model;

class PackageExclusion extends Model
{
    protected $fillable=[
        'package_id',
        'general_packages_exclusion_id'
    ];
    public function package(){
        return $this->belongsTo(Package::class,'package_id');
    }
    public function general_packages_exclusion(){
        return $this->belongsTo(GeneralPackagesExclusion::class,'general_packages_exclusion_id');
    }
}
