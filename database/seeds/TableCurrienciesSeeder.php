<?php

use Illuminate\Database\Seeder;

class TableCurrienciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Currency::create([
            'currency_name'=>'ريال سعودى',
            'currency_name_en'=>'Saudi riyal',
            'ISO4217_ALPHA3'=>'SAR',
            'ISO4217_NUM3'=>'682',
        ]);
        \App\Currency::create([
            'currency_name'=>'US Dollar',
            'currency_name_en'=>'US Dollar',
            'ISO4217_ALPHA3'=>'USD',
            'ISO4217_NUM3'=>'840',
        ]);

    }
}
