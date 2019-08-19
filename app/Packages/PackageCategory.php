<?php

namespace App\Packages;

use Illuminate\Database\Eloquent\Model;

class PackageCategory extends Model
{
    protected $fillable=[
        'name',
        'image'
    ];
}
