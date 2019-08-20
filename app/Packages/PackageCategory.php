<?php

namespace App\Packages;

use Illuminate\Database\Eloquent\Model;

class PackageCategory extends Model
{
    protected $fillable=[
        'name',
        'image'
    ];

    public function packages(){
        return $this->hasMany(Package::class,'package_category_id');
    }
}
