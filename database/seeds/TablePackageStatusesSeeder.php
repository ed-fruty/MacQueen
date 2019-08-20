<?php

use Illuminate\Database\Seeder;

class TablePackageStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Packages\PackageStatus::create([
            'name'=>'Booked'
        ]);
        \App\Packages\PackageStatus::create([
            'name'=>'Confirmed'
        ]);
        \App\Packages\PackageStatus::create([
            'name'=>'Reserved'
        ]);
        \App\Packages\PackageStatus::create([
            'name'=>'Canceled'
        ]);
    }
}
