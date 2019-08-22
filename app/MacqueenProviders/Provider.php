<?php

namespace App\MacqueenProviders;

use App\Currency;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable=[
        'name',
        'commission_rate',
        'remaining_credit',
        'currency_id'
    ];
    public function credit_deals(){
        return $this->hasMany(Provider::class,'provider_id');
    }

    public function currency(){
        return $this->belongsTo(Currency::class,'currency_id');
    }
}
