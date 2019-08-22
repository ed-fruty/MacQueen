<?php

namespace App\Packages;

use Illuminate\Database\Eloquent\Model;

class PackageCurrency extends Model
{
    protected $fillable=[
        'name',
        'code',
        'symbol'
    ];
}
