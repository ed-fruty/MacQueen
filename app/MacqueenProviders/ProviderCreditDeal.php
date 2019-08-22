<?php

namespace App\MacqueenProviders;

use App\Currency;
use Illuminate\Database\Eloquent\Model;

class ProviderCreditDeal extends Model
{
    protected $fillable=[
        'provider_id',
        'title',
        'description',
        'date',
        'credit',
        'currency_id'
    ];
    public function provider(){
        return $this->belongsTo(Provider::class,'provider_id');
    }
    public function currency(){
        return $this->belongsTo(Currency::class,'currency_id');
    }}
