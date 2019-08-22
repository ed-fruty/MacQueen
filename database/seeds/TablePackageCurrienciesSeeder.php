<?php

use Illuminate\Database\Seeder;

class TablePackageCurrienciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Packages\PackageCurrency::create([
            'name'=>'Saudi riyal',
            'code'=>'SR',
            'symbol'=>'SR'
        ]);
    }
}
